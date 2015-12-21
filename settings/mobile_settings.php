<?php
    $temp = new admin_settingpage('theme_adaptable_mobile', get_string('mobilesettings', 'theme_adaptable'));
    $temp->add(new admin_setting_heading('theme_adaptable_mobile', get_string('mobilesettingsheading', 'theme_adaptable'),
        '', FORMAT_MARKDOWN));

    $name = 'theme_adaptable/hidealertsmobile';
    $title = get_string('hidealertsmobile', 'theme_adaptable');
    $description = get_string('hidealertsmobiledesc', 'theme_adaptable');
    $radchoices = array(
        ', .customalert' => get_string('hide'),
        '' => get_string('show'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, ', .socialbox', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/hidesocialmobile';
    $title = get_string('hidesocialmobile', 'theme_adaptable');
    $description = get_string('hidesocialmobiledesc', 'theme_adaptable');
    $radchoices = array(
        ', .socialbox' => get_string('hide'),
        '' => get_string('show'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, ', .socialbox', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/socialboxpaddingtopmobile';
    $title = get_string('socialboxpaddingtopmobile', 'theme_adaptable');
    $description = get_string('socialboxpaddingtopmobile', 'theme_adaptable');
    $choices = array(
        '5px' => "5px",
        '6px' => "6px",
        '7px' => "7px",
        '8px' => "8px",
        '9px' => "9px",
        '10px' => "10px",
        '12px' => "12px",
        '14px' => "14px",
        '16px' => "16px",
        '18px' => "18px",
        '20px' => "20px",
        '22px' => "22px",
    );
    $setting = new admin_setting_configselect($name, $title, $description, '10px', $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/socialboxpaddingbottommobile';
    $title = get_string('socialboxpaddingbottommobile', 'theme_adaptable');
    $description = get_string('socialboxpaddingbottommobile', 'theme_adaptable');
    $choices = $from0to12;
    $setting = new admin_setting_configselect($name, $title, $description, '10px', $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    $name = 'theme_adaptable/hidecoursetitlemobile';
    $title = get_string('hidecoursetitlemobile', 'theme_adaptable');
    $description = get_string('hidecoursetitlemobiledesc', 'theme_adaptable');
    $radchoices = array(
        ', #coursetitle' => get_string('hide'),
        '' => get_string('show'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, ', #coursetitle', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/hidelogomobile';
    $title = get_string('hidelogomobile', 'theme_adaptable');
    $description = get_string('hidelogomobiledesc', 'theme_adaptable');
    $radchoices = array(
        ', #logocontainer' => get_string('hide'),
        '' => get_string('show'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, ', #logocontainer', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/hideheadermobile';
    $title = get_string('hideheadermobile', 'theme_adaptable');
    $description = get_string('hideheadermobiledesc', 'theme_adaptable');
    $radchoices = array(
        ', #page-header' => get_string('hide'),
        '' => get_string('show'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, ', #page-header', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/hidebreadcrumbmobile';
    $title = get_string('hidebreadcrumbmobile', 'theme_adaptable');
    $description = get_string('hidebreadcrumbmobiledesc', 'theme_adaptable');
    $radchoices = array(
        ', .breadcrumb' => get_string('hide'),
        '' => get_string('show'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, ', .breadcrumb', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/hidepagefootermobile';
    $title = get_string('hidepagefootermobile', 'theme_adaptable');
    $description = get_string('hidepagefootermobiledesc', 'theme_adaptable');
    $radchoices = array(
        ', #page-footer' => get_string('hide'),
        '' => get_string('show'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, ', #page-footer', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_adaptable', $temp);