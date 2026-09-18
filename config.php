<?php
defined('MOODLE_INTERNAL') || die();

require_once(__DIR__ . '/lib.php');

$THEME->name = 'learninghub';

$THEME->parents = ['boost'];

$THEME->layouts = [
    'frontpage' => [
        'file' => 'frontpage.php',
        'regions' => ['side-pre'],
        'defaultregion' => 'side-pre',
        'options' => ['nonavbar' => true],
    ],

    'contact' => [
        'file' => 'contact.php',
        'regions' => [],
        'options' => [
            'noblocks' => true,
            'nonavbar' => true,
        ],
    ],

    'login' => [
    'file' => 'login.php',
    'regions' => [],
    'options' => [
        'langmenu' => true,
    ],
   ],
];

$THEME->sheets = [];

$THEME->editor_sheets = [];

$THEME->usefallback = true;

$THEME->scss = function($theme) {
    return theme_boost_get_main_scss_content($theme);
};

$THEME->prescsscallback = 'theme_boost_get_pre_scss';

$THEME->extrascsscallback = 'theme_learninghub_get_extra_scss';

$THEME->rendererfactory = 'theme_overridden_renderer_factory';

$THEME->enable_dock = false;

$THEME->yuicssmodules = [];

$THEME->haseditswitch = true;

$THEME->iconsystem = \core\output\icon_system::FONTAWESOME;
