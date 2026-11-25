# Project Notes

## WordPress theme

The custom theme is in `wp-content/themes/wp-theme`. It uses Timber 2 with Twig templates under `templates/`.

Install the theme's PHP dependencies from the theme directory with:

```sh
cd wp-content/themes/wp-theme
composer install
```

Commit `composer.json` and `composer.lock`; do not commit the generated `vendor/` directory. Timber is initialized in `functions.php`.

## Twig and SCF data flow

Keep WordPress and SCF data retrieval in PHP template controllers (`index.php`, `front-page.php`, or future controllers). Pass values into Twig through Timber's context. Keep presentation in `templates/*.twig`; Twig autoescapes ordinary output, so do not mark field values safe unless they are intentionally trusted HTML.

SCF is a separate WordPress plugin. Install and activate Secure Custom Fields in the local WordPress dashboard. The starter front page expects a text field named `hero_title` attached to the page selected as the site's front page. `front-page.php` uses `get_field()` only when SCF is active, and `front-page.twig` falls back to the page title (or site name) when the field is empty.

To try the example, create a static page, select it under **Settings → Reading**, then create an SCF text field with the name `hero_title` for that page. Enter a value and view the front page.

## Theme conventions

- Use Composer for PHP dependencies and keep the lockfile in version control.
- Use a PHP controller to prepare template context; do not fetch SCF data from Twig.
- Put reusable Twig layouts and partials under `templates/`.
- Enqueue frontend styles from `functions.php` rather than adding page-specific inline styles.
