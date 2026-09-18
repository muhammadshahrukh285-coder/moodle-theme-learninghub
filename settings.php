<?php
defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {

    $settings = new admin_settingpage(
        'themesettinglearninghub',
        get_string('settings', 'theme_learninghub')
    );

    /*
     * Branding settings.
     */
    $settings->add(new admin_setting_heading(
        'theme_learninghub/brandingheading',
        get_string('brandingheading', 'theme_learninghub'),
        get_string('brandingheading_desc', 'theme_learninghub')
    ));

    $settings->add(new admin_setting_configstoredfile(
        'theme_learninghub/logo',
        get_string('logo', 'theme_learninghub'),
        get_string('logo_desc', 'theme_learninghub'),
        'logo',
        0,
        [
            'accepted_types' => ['.png', '.jpg', '.jpeg', '.svg'],
        ]
    ));

    $settings->add(new admin_setting_configstoredfile(
        'theme_learninghub/logocompact',
        get_string('logocompact', 'theme_learninghub'),
        get_string('logocompact_desc', 'theme_learninghub'),
        'logocompact',
        0,
        [
            'accepted_types' => ['.png', '.jpg', '.jpeg', '.svg'],
        ]
    ));

    $settings->add(new admin_setting_configstoredfile(
        'theme_learninghub/favicon',
        get_string('favicon', 'theme_learninghub'),
        get_string('favicon_desc', 'theme_learninghub'),
        'favicon',
        0,
        [
            'accepted_types' => ['.ico', '.png'],
        ]
    ));

    $settings->add(new admin_setting_configtext(
        'theme_learninghub/brandname',
        get_string('brandname', 'theme_learninghub'),
        get_string('brandname_desc', 'theme_learninghub'),
        'Learning Hub',
        PARAM_TEXT
    ));

    $settings->add(new admin_setting_configtext(
        'theme_learninghub/tagline',
        get_string('tagline', 'theme_learninghub'),
        get_string('tagline_desc', 'theme_learninghub'),
        'Learn. Grow. Perform.',
        PARAM_TEXT
    ));

    $settings->add(new admin_setting_configtext(
        'theme_learninghub/logoalt',
        get_string('logoalt', 'theme_learninghub'),
        get_string('logoalt_desc', 'theme_learninghub'),
        'Learning Hub',
        PARAM_TEXT
    ));

    /*
     * Contact settings.
     */
    $settings->add(new admin_setting_heading(
        'theme_learninghub/contactheading',
        get_string('contactsettings', 'theme_learninghub'),
        ''
    ));

    $settings->add(new admin_setting_configtext(
        'theme_learninghub/contactemail',
        get_string('contactemail', 'theme_learninghub'),
        get_string('contactemail_desc', 'theme_learninghub'),
        '',
        PARAM_EMAIL
    ));

    $settings->add(new admin_setting_configtext(
        'theme_learninghub/contactname',
        get_string('contactname', 'theme_learninghub'),
        get_string('contactname_desc', 'theme_learninghub'),
        'Learning Hub',
        PARAM_TEXT
    ));

}
