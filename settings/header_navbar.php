<?php
    // Header Navbar.
    $temp = new admin_settingpage('theme_adaptable_navbar', get_string('navbarsettings', 'theme_adaptable'));
    $temp->add(new admin_setting_heading('theme_adaptable_navbar', get_string('navbarsettingsheading', 'theme_adaptable'),
        format_text(get_string('navbardesc', 'theme_adaptable'), FORMAT_MARKDOWN)));


    $name = 'theme_adaptable/menufontsize';
    $title = get_string('menufontsize', 'theme_adaptable');
    $description = get_string('menufontsizedesc', 'theme_adaptable');
    $radchoices = $from10to16;
    $setting = new admin_setting_configselect($name, $title, $description, '14px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/enablehome';
    $title = get_string('home');
    $description = get_string('enablehomedesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/enablehomeredirect';
    $title = get_string('enablehomeredirect', 'theme_adaptable');
    $description = get_string('enablehomeredirectdesc', 'theme_adaptable');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/enablemyhome';
    $title = get_string('myhome');
    $description = get_string('enablemyhomedesc', 'theme_adaptable', get_string('myhome'));
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/enableevents';
    $title = get_string('events', 'theme_adaptable');
    $description = get_string('enableeventsdesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/enablemysites';
    $title = get_string('mysites', 'theme_adaptable');
    $description = get_string('enablemysitesdesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/enablethiscourse';
    $title = get_string('thiscourse', 'theme_adaptable');
    $description = get_string('enablethiscoursedesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/enablezoom';
    $title = get_string('enablezoom', 'theme_adaptable');
    $description = get_string('enablezoomdesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/enableshowhideblocks';
    $title = get_string('enableshowhideblocks', 'theme_adaptable');
    $description = get_string('enableshowhideblocksdesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable help link.
    $name = 'theme_adaptable/enablehelp';
    $title = get_string('enablehelp', 'theme_adaptable');
    $description = get_string('enablehelpdesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/helpprofilefield';
    $title = get_string('helpprofilefield', 'theme_adaptable');
    $description = get_string('helpprofilefielddesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $name = 'theme_adaptable/enablehelp2';
    $title = get_string('enablehelp', 'theme_adaptable');
    $description = get_string('enablehelpdesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/helpprofilefield2';
    $title = get_string('helpprofilefield', 'theme_adaptable');
    $description = get_string('helpprofilefielddesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $name = 'theme_adaptable/helptarget';
    $title = get_string('helptarget', 'theme_adaptable');
    $description = get_string('helptargetdesc', 'theme_adaptable');
    $choices = array(
        '_blank' => get_string('targetnewwindow', 'theme_adaptable'),
        '_self' => get_string('targetsamewindow', 'theme_adaptable'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, '_blank', $choices);

    $temp->add($setting);

    $ADMIN->add('theme_adaptable', $temp);
