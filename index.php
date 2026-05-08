<?php
/**
 * Fallback template — required by WordPress for any theme.
 *
 * The brochure homepage lives in front-page.php, which WordPress picks up
 * automatically when "Your homepage displays" is set to "Your latest posts"
 * (the default). This file is loaded only when no more specific template
 * matches (e.g. for a stray archive page) and just renders the front page
 * content so visitors never see an empty layout.
 *
 * @package MagicStar
 */

get_template_part( 'front-page' );
