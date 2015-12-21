<?php
    // Frontpage Ticker heading.
    $temp = new admin_settingpage('theme_adaptable_frontpage_ticker', get_string('frontpagetickersettings', 'theme_adaptable'));
    $temp->add(new admin_setting_heading('theme_adaptable_ticker', get_string('tickersettingsheading', 'theme_adaptable'),
        format_text(get_string('tickerdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/enableticker';
    $title = get_string('enableticker', 'theme_adaptable');
    $description = get_string('enabletickerdesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/enabletickermy';
    $title = get_string('enabletickermy', 'theme_adaptable');
    $description = get_string('enabletickermydesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/tickertext1';
    $title = get_string('tickertext1', 'theme_adaptable');
    $description = get_string('tickertext1desc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/tickertext1profilefield';
    $title = get_string('tickertextprofilefield', 'theme_adaptable');
    $description = get_string('tickertextprofilefielddesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $name = 'theme_adaptable/tickertext2';
    $title = get_string('tickertext2', 'theme_adaptable');
    $description = get_string('tickertext2desc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/tickertext2profilefield';
    $title = get_string('tickertextprofilefield', 'theme_adaptable');
    $description = get_string('tickertextprofilefielddesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $ADMIN->add('theme_adaptable', $temp);