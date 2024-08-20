<?php

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    $settings = new admin_settingpage('local_auto_redirect', get_string('pluginname', 'local_auto_redirect'));

    $settings->add(new admin_setting_configcheckbox(
        'local_auto_redirect/redirect_next_section',
        get_string('setting_redirect_next_section', 'local_auto_redirect'),
        get_string('setting_redirect_next_section_desc', 'local_auto_redirect'),
        1
    ));

    $ADMIN->add('localplugins', $settings);
}
