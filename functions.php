<?php
/**
 * Magic Star Garage theme functions.
 *
 * @package MagicStar
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! defined( 'MAGIC_STAR_VERSION' ) ) {
    define( 'MAGIC_STAR_VERSION', '1.0.0' );
}

/**
 * Theme defaults and feature support.
 */
function magic_star_setup() {
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support(
        'html5',
        array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
    );
    // We deliberately do NOT enable 'title-tag' — the front-page template ships a hand-tuned SEO title.

    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'magic-star' ),
        )
    );
}
add_action( 'after_setup_theme', 'magic_star_setup' );

/**
 * Enqueue Google Fonts, theme stylesheet and front-end script.
 */
function magic_star_enqueue_assets() {
    wp_enqueue_style(
        'magic-star-google-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'magic-star-style',
        get_stylesheet_uri(),
        array( 'magic-star-google-fonts' ),
        MAGIC_STAR_VERSION
    );

    wp_enqueue_script(
        'magic-star-script',
        get_template_directory_uri() . '/script.js',
        array(),
        MAGIC_STAR_VERSION,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'magic_star_enqueue_assets' );

/**
 * Preconnect Google Fonts hosts for faster first paint.
 */
function magic_star_resource_hints( $urls, $relation_type ) {
    if ( 'preconnect' === $relation_type ) {
        $urls[] = array( 'href' => 'https://fonts.googleapis.com' );
        $urls[] = array(
            'href'        => 'https://fonts.gstatic.com',
            'crossorigin' => 'anonymous',
        );
    }
    return $urls;
}
add_filter( 'wp_resource_hints', 'magic_star_resource_hints', 10, 2 );

/**
 * Settings: which Contact Form 7 form ID to render in the contact section.
 *
 * Two ways to override:
 *   1. Set the option `magic_star_cf7_id` to your CF7 form's post ID.
 *   2. Define the constant MAGIC_STAR_CF7_ID in wp-config.php.
 *
 * If neither is set, the contact section shows a friendly admin notice instead
 * of an empty space, so the site never silently ships a missing form.
 */
function magic_star_get_cf7_id() {
    if ( defined( 'MAGIC_STAR_CF7_ID' ) ) {
        return (int) MAGIC_STAR_CF7_ID;
    }
    return (int) get_option( 'magic_star_cf7_id', 0 );
}

/**
 * Render the contact form area: the [contact-form-7] shortcode if configured,
 * otherwise a setup notice for the site administrator.
 */
function magic_star_render_contact_form() {
    $cf7_id = magic_star_get_cf7_id();

    if ( $cf7_id && shortcode_exists( 'contact-form-7' ) ) {
        echo do_shortcode( '[contact-form-7 id="' . absint( $cf7_id ) . '" title="Magic Star Quote Request"]' );
        return;
    }

    if ( current_user_can( 'manage_options' ) ) {
        echo '<div class="form-note" style="display:block;color:#ff8a8a;text-align:left;">';
        if ( ! shortcode_exists( 'contact-form-7' ) ) {
            echo esc_html__( 'Install and activate the Contact Form 7 plugin, then create a "Magic Star Quote Request" form.', 'magic-star' );
        } else {
            echo esc_html__( 'Set the Magic Star CF7 form ID via Settings > Magic Star Garage (or update the magic_star_cf7_id option) to render the quote form.', 'magic-star' );
        }
        echo '</div>';
    }
}

/**
 * Tiny settings screen: lets the site owner pick the CF7 form ID without
 * editing code. Lives under Settings > Magic Star Garage.
 */
function magic_star_register_settings_page() {
    add_options_page(
        __( 'Magic Star Garage', 'magic-star' ),
        __( 'Magic Star Garage', 'magic-star' ),
        'manage_options',
        'magic-star-settings',
        'magic_star_render_settings_page'
    );
}
add_action( 'admin_menu', 'magic_star_register_settings_page' );

function magic_star_register_settings() {
    register_setting(
        'magic_star_settings',
        'magic_star_cf7_id',
        array(
            'type'              => 'integer',
            'sanitize_callback' => 'absint',
            'default'           => 0,
        )
    );
}
add_action( 'admin_init', 'magic_star_register_settings' );

function magic_star_render_settings_page() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'Magic Star Garage', 'magic-star' ); ?></h1>
        <form method="post" action="options.php">
            <?php settings_fields( 'magic_star_settings' ); ?>
            <table class="form-table" role="presentation">
                <tr>
                    <th scope="row">
                        <label for="magic_star_cf7_id"><?php esc_html_e( 'Contact Form 7 form ID', 'magic-star' ); ?></label>
                    </th>
                    <td>
                        <input
                            type="number"
                            id="magic_star_cf7_id"
                            name="magic_star_cf7_id"
                            value="<?php echo esc_attr( get_option( 'magic_star_cf7_id', 0 ) ); ?>"
                            class="regular-text"
                            min="0" />
                        <p class="description">
                            <?php esc_html_e( 'Find the form ID in Contact > Contact Forms (the number in the shortcode column). This form is rendered in the home-page Contact section.', 'magic-star' ); ?>
                        </p>
                    </td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}
