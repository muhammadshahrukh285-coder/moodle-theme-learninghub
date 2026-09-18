<?php
defined('MOODLE_INTERNAL') || die();

/**
 * Returns additional SCSS for the Learning Hub theme.
 *
 * @param theme_config $theme
 * @return string
 */
function theme_learninghub_get_extra_scss($theme) {
    $scss = '';

    $scss .= file_get_contents(
        __DIR__ . '/scss/abstracts/_variables.scss'
    );

    $scss .= file_get_contents(
        __DIR__ . '/scss/components/_header.scss'
    );

    $scss .= file_get_contents(
        __DIR__ . '/scss/components/_layout.scss'
    );

    $scss .= file_get_contents(
        __DIR__ . '/scss/pages/_frontpage.scss'
    );

    $scss .= file_get_contents(
        __DIR__ . '/scss/pages/_login.scss'
    );

    return $scss;
}


/**
 * Returns the configured main logo URL.
 *
 * @param theme_config|null $theme
 * @return moodle_url|null
 */
function theme_learninghub_get_logo_url($theme = null) {
    global $PAGE;

    if (!$theme) {
        $theme = $PAGE->theme;
    }

    $url = $theme->setting_file_url(
        'logo',
        'logo'
    );

    return $url;
}


/**
 * Returns the configured compact logo URL.
 *
 * @param theme_config|null $theme
 * @return moodle_url|null
 */
function theme_learninghub_get_compact_logo_url($theme = null) {
    global $PAGE;

    if (!$theme) {
        $theme = $PAGE->theme;
    }

    $url = $theme->setting_file_url(
        'logocompact',
        'logocompact'
    );

    return $url;
}


/**
 * Returns the configured favicon URL.
 *
 * @param theme_config|null $theme
 * @return moodle_url|null
 */
function theme_learninghub_get_favicon_url($theme = null) {
    global $PAGE;

    if (!$theme) {
        $theme = $PAGE->theme;
    }

    $url = $theme->setting_file_url(
        'favicon',
        'favicon'
    );

    return $url;
}


/**
 * Returns the configured brand name.
 *
 * @param theme_config|null $theme
 * @return string
 */
function theme_learninghub_get_brand_name($theme = null) {
    global $PAGE;

    if (!$theme) {
        $theme = $PAGE->theme;
    }

    $brandname = $theme->settings->brandname ?? '';

    return $brandname ?: 'Learning Hub';
}


/**
 * Returns the configured tagline.
 *
 * @param theme_config|null $theme
 * @return string
 */
function theme_learninghub_get_tagline($theme = null) {
    global $PAGE;

    if (!$theme) {
        $theme = $PAGE->theme;
    }

    $tagline = $theme->settings->tagline ?? '';

    return $tagline ?: 'Learn. Grow. Perform.';
}


/**
 * Returns the configured logo alt text.
 *
 * @param theme_config|null $theme
 * @return string
 */
function theme_learninghub_get_logo_alt($theme = null) {
    global $PAGE;

    if (!$theme) {
        $theme = $PAGE->theme;
    }

    $alt = $theme->settings->logoalt ?? '';

    return $alt ?: theme_learninghub_get_brand_name($theme);
}

/**
 * Serves files associated with Learning Hub theme settings.
 *
 * @param stdClass $course
 * @param stdClass $cm
 * @param context $context
 * @param string $filearea
 * @param array $args
 * @param bool $forcedownload
 * @param array $options
 * @return bool
 */
function theme_learninghub_pluginfile(
    $course,
    $cm,
    $context,
    $filearea,
    $args,
    $forcedownload,
    array $options = []
) {
    if ($context->contextlevel == CONTEXT_SYSTEM &&
            in_array($filearea, ['logo', 'logocompact', 'favicon'], true)) {

        $theme = theme_config::load('learninghub');

        // Theme assets should be cacheable by browsers and proxies.
        if (!array_key_exists('cacheability', $options)) {
            $options['cacheability'] = 'public';
        }

        return $theme->setting_file_serve(
            $filearea,
            $args,
            $forcedownload,
            $options
        );
    }

    send_file_not_found();
}

/**
 * Returns the favicon URL configured in the Learning Hub theme.
 *
 * @param core_renderer $renderer
 * @return moodle_url
 */
function theme_learninghub_get_favicon($renderer) {
    $url = theme_learninghub_get_favicon_url();

    if ($url) {
        return $url;
    }

    return $renderer->favicon();
}
