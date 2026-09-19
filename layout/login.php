<?php

defined('MOODLE_INTERNAL') || die();

$bodyattributes = $OUTPUT->body_attributes();

$templatecontext = [
    'sitename' => format_string(
        $SITE->shortname,
        true,
        [
            'context' => context_course::instance(SITEID),
            'escape' => false
        ]
    ),

    'output' => $OUTPUT,
    'bodyattributes' => $bodyattributes,
    'sesskey' => sesskey(),

    'logo' => theme_learninghub_get_logo_url(),
    'logocompact' => theme_learninghub_get_compact_logo_url(),
    'brandname' => theme_learninghub_get_brand_name(),
    'tagline' => theme_learninghub_get_tagline(),
    'logoalt' => theme_learninghub_get_logo_alt(),

];

echo $OUTPUT->render_from_template(
    'theme_learninghub/login',
    $templatecontext
);
