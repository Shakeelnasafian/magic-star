# Magic Star Garage — WordPress theme setup

This folder is now a standalone WordPress theme (`Magic Star Garage`). To deploy it:

## 1. Install the theme

1. Zip the contents of this folder (the zip should contain `style.css`, `functions.php`, etc. at the top level — not nested in another folder). Recommended zip name: `magic-star.zip`.
2. In WP admin: **Appearance > Themes > Add New > Upload Theme**, choose the zip, install, then **Activate**.
3. In **Settings > Reading**, make sure *Your homepage displays* is set to **Your latest posts** (the default). The theme’s `front-page.php` will be served as the homepage automatically.

## 2. Install Contact Form 7

1. **Plugins > Add New** → search **Contact Form 7** → Install → Activate.
2. Go to **Contact > Add New**.
3. Name the form **Magic Star Quote Request** (any name works, but matching this label keeps things tidy).
4. In the **Form** tab, replace the default content with the snippet in section 3 below.
5. In the **Mail** tab, set:
   - **To:** `Magicstarautorepairing@gmail.com`
   - **From:** `Magic Star Website <wordpress@your-domain.com>` (use a real address on your domain so SPF/DKIM pass)
   - **Subject:** `New quote request from [your-name]`
   - **Message body:** see section 4 below.
6. Save the form. Copy its **ID** from the table on the *Contact Forms* screen (the number in the shortcode column).

## 3. CF7 form definition (paste into the *Form* tab)

This template reproduces the original site’s field layout — the `form-row` / `form-group` divs hook into the existing CSS so the styling is identical.

```html
<div class="form-row">
    <div class="form-group">
        <label for="msg-name">Full Name</label>
        [text* your-name id:msg-name placeholder "John Doe"]
    </div>
    <div class="form-group">
        <label for="msg-phone">Phone</label>
        [tel* your-phone id:msg-phone placeholder "+971 50 430 2507"]
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <label for="msg-email">Email</label>
        [email* your-email id:msg-email placeholder "you@example.com"]
    </div>
    <div class="form-group">
        <label for="msg-car">Car Make &amp; Model</label>
        [text your-car id:msg-car placeholder "e.g. Mercedes S-Class"]
    </div>
</div>

<div class="form-group">
    <label for="msg-service">Service Required</label>
    [select your-service id:msg-service "Select a service" "Engine Repair & Gear Repairing" "General Maintenance" "Engine Diagnostics" "Auto AC Repairing" "Wrapping Service" "Tinting Service" "Painting Service" "Denting Service" "PPF Service" "Oil Change" "Detailing & Polishing" "Other"]
</div>

<div class="form-group">
    <label for="msg-message">Message</label>
    [textarea your-message id:msg-message rows:4 placeholder "Tell us a little about what your car needs..."]
</div>

[submit class:btn class:btn-gold class:btn-block "Send Request"]
```

## 4. Mail body (paste into the *Mail* tab → *Message body*)

```
A new quote request was submitted on magicstarautorepairing.com.

Name:     [your-name]
Phone:    [your-phone]
Email:    [your-email]
Car:      [your-car]
Service:  [your-service]

Message:
[your-message]

--
This e-mail was sent from the contact form on the Magic Star Garage website.
```

In the same tab, set **Reply-To:** `[your-email]` so you can reply directly from your inbox.

## 5. Wire the form to the homepage

The theme renders the CF7 form in the contact section automatically once it knows the form’s ID.

**Option A — admin setting (recommended):**
- Go to **Settings > Magic Star Garage**.
- Enter the CF7 form ID and save.

**Option B — code constant:**
- Add `define( 'MAGIC_STAR_CF7_ID', 123 );` (replacing 123) to `wp-config.php`.

If neither is set, logged-in admins will see a one-line setup notice in place of the form so the homepage never silently ships without it.

## 6. Notes & customisation

- All static images live in `images/` at the theme root (hero, brand logos, luxury car backgrounds). The CSS references them with relative paths so they keep working when the theme is moved between sites.
- The hand-tuned SEO `<title>` and meta description live in `header.php`. The theme intentionally does *not* enable WordPress’s `title-tag` support, which would otherwise overwrite them. If you install Yoast or Rank Math and want them to control the title, remove the static `<title>` and `<meta name="description">` lines from `header.php` and add `add_theme_support( 'title-tag' );` inside `magic_star_setup()` in `functions.php`.
- The structured-data JSON-LD blocks (AutoRepair business + FAQPage) are inlined in `header.php` and `footer.php` respectively. Edit them there if business details change.
- Phone, email, address and working hours are currently hardcoded in `header.php`, `footer.php` and `front-page.php`. If they change, search the theme for `+971504302507` / `Magicstarautorepairing@gmail.com` / `Umm Ramool` and update each occurrence.
- The original `script.js` is enqueued as-is and continues to drive the mobile menu, sticky-header shadow, scroll-reveal animations and the back-to-top button. The old front-end form-submission handler in `script.js` is now inert because the CF7 form does not have `id="contactForm"` — CF7 handles submission via its own AJAX layer.
