<?php
    $temp = new admin_settingpage('theme_adaptable_layout', get_string('layoutsettings', 'theme_adaptable'));
    $temp->add(new admin_setting_heading('theme_adaptable_layout', get_string('layoutsettingsheading', 'theme_adaptable'),
        format_text(get_string('layoutdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    // Display block in the Left/Right side.
    $name = 'theme_adaptable/blockside';
    $title = get_string('blockside', 'theme_adaptable');
    $description = get_string('blocksidedesc', 'theme_adaptable');
    $setting = new admin_setting_configselect($name, $title, $description, 0,
    array(
            0 => get_string('rightblocks', 'theme_adaptable'),
            1 => get_string('leftblocks', 'theme_adaptable'),
        ));
    $temp->add($setting);

    // View default.
    $name = 'theme_adaptable/viewselect';
    $title = get_string('viewselect', 'theme_adaptable');
    $description = get_string('viewselectdesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Fullscreen width.
    $name = 'theme_adaptable/fullscreenwidth';
    $title = get_string('fullscreenwidth', 'theme_adaptable');
    $description = get_string('fullscreenwidthdesc', 'theme_adaptable');
    $radchoices = array(
        '95%' => '95%',
        '96%' => '96%',
        '97%' => '97%',
        '98%' => '98%',
        '99%' => '99%',
        '100%' => '100%',
    );
    $setting = new admin_setting_configselect($name, $title, $description, '98%', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/coursetitlemaxwidth';
    $title = get_string('coursetitlemaxwidth', 'theme_adaptable');
    $description = get_string('coursetitlemaxwidthdesc', 'theme_adaptable');
    $radchoices = array(
        '35%' => '35%',
        '36%' => '36%',
        '37%' => '37%',
        '38%' => '38%',
        '39%' => '39%',
        '40%' => '40%',
        '41%' => '41%',
        '42%' => '42%',
        '43%' => '43%',
        '44%' => '44%',
        '45%' => '45%',
        '46%' => '46%',
        '47%' => '47%',
        '48%' => '48%',
        '49%' => '49%',
        '50%' => '50%',
    );
    $setting = new admin_setting_configselect($name, $title, $description, '50%', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_adaptable', $temp);