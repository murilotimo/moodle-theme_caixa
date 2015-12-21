<?php
    $temp = new admin_settingpage('theme_adaptable_menus', get_string('menusettings', 'theme_adaptable'));

    $temp->add(new admin_setting_heading('theme_adaptable_menus', get_string('menusheading', 'theme_adaptable'),
    format_text(get_string('menustitledesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/disablecustommenu';
    $title = get_string('disablecustommenu', 'theme_adaptable');
    $description = get_string('disablecustommenudesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, false, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/menusession';
    $title = get_string('menusession', 'theme_adaptable');
    $description = get_string('menusessiondesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, true, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/menusessionttl';
    $title = get_string('menusessionttl', 'theme_adaptable');
    $description = get_string('menusessionttldesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '30', PARAM_INT);
    $temp->add($setting);


    // Settings for tools menus.
    $temp->add(new admin_setting_heading('theme_adaptable_toolsmenu', get_string('toolsmenu', 'theme_adaptable'),
    format_text(get_string('toolsmenustitledesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $temp->add(new admin_setting_heading('theme_adaptable_toolsmenu1', get_string('toolsmenuheading1', 'theme_adaptable'),
    format_text(get_string('menusdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/enabletoolsmenus';
    $title = get_string('enabletoolsmenus', 'theme_adaptable');
    $description = get_string('enabletoolsmenusdesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/toolsmenu';
    $title = get_string('toolsmenu1', 'theme_adaptable');
    $description = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);

    $name = 'theme_adaptable/toolsmenu1field';
    $title = get_string('newmenufield', 'theme_adaptable');
    $description = get_string('newmenufielddesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_adaptable_toolsmenu2', get_string('toolsmenuheading2', 'theme_adaptable'),
    format_text(get_string('menusdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/toolsmenu2';
    $title = get_string('toolsmenu2', 'theme_adaptable');
    $description = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);

    $name = 'theme_adaptable/toolsmenu2field';
    $title = get_string('newmenufield', 'theme_adaptable');
    $description = get_string('newmenufielddesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    // Settings for top header menus.
    $temp->add(new admin_setting_heading('theme_adaptable_topmenus', get_string('topmenusheading', 'theme_adaptable'),
    format_text(get_string('topmenusheadingdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $temp->add(new admin_setting_heading('theme_adaptable_menus_visibility',
            get_string('menusheadingvisibility', 'theme_adaptable'),
            format_text(get_string('menusheadingvisibilitydesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/enablemenus';
    $title = get_string('enablemenus', 'theme_adaptable');
    $description = get_string('enablemenusdesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/disablemenuscoursepages';
    $title = get_string('disablemenuscoursepages', 'theme_adaptable');
    $description = get_string('disablemenuscoursepagesdesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/menuuseroverride';
    $title = get_string('menuuseroverride', 'theme_adaptable');
    $description = get_string('menuuseroverridedesc', 'theme_adaptable');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/menuoverrideprofilefield';
    $title = get_string('menuoverrideprofilefield', 'theme_adaptable');
    $description = get_string('menuoverrideprofilefielddesc', 'theme_adaptable');
    $default = get_string('menuoverrideprofilefielddefault', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_RAW);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_adaptable_menus1', get_string('menusheading1', 'theme_adaptable'),
    format_text(get_string('menusdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/newmenu1';
    $title = get_string('newmenu1', 'theme_adaptable');
    $description = get_string('newmenudesc', 'theme_adaptable');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);

    $name = 'theme_adaptable/newmenu1requirelogin';
    $title = get_string('newmenurequirelogin', 'theme_adaptable');
    $description = get_string('newmenurequirelogindesc', 'theme_adaptable');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/newmenu1field';
    $title = get_string('newmenufield', 'theme_adaptable');
    $description = get_string('newmenufielddesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_adaptable_menus2', get_string('menusheading2', 'theme_adaptable'),
    format_text(get_string('menusdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/newmenu2';
    $title = get_string('newmenu2', 'theme_adaptable');
    $description = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);

    $name = 'theme_adaptable/newmenu2requirelogin';
    $title = get_string('newmenurequirelogin', 'theme_adaptable');
    $description = get_string('newmenurequirelogindesc', 'theme_adaptable');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/newmenu2field';
    $title = get_string('newmenufield', 'theme_adaptable');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_adaptable_menus3', get_string('menusheading3', 'theme_adaptable'),
    format_text(get_string('menusdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/newmenu3';
    $title = get_string('newmenu3', 'theme_adaptable');
    $description = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);

    $name = 'theme_adaptable/newmenu3requirelogin';
    $title = get_string('newmenurequirelogin', 'theme_adaptable');
    $description = get_string('newmenurequirelogindesc', 'theme_adaptable');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/newmenu3field';
    $title = get_string('newmenufield', 'theme_adaptable');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_adaptable_menus4', get_string('menusheading4', 'theme_adaptable'),
    format_text(get_string('menusdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/newmenu4';
    $title = get_string('newmenu4', 'theme_adaptable');
    $description = get_string('newmenudesc', 'theme_adaptable');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);

    $name = 'theme_adaptable/newmenu4requirelogin';
    $title = get_string('newmenurequirelogin', 'theme_adaptable');
    $description = get_string('newmenurequirelogindesc', 'theme_adaptable');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/newmenu4field';
    $title = get_string('newmenufield', 'theme_adaptable');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_adaptable_menus5', get_string('menusheading5', 'theme_adaptable'),
    format_text(get_string('menusdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/newmenu5';
    $title = get_string('newmenu5', 'theme_adaptable');
    $description = get_string('newmenudesc', 'theme_adaptable');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);

    $name = 'theme_adaptable/newmenu5requirelogin';
    $title = get_string('newmenurequirelogin', 'theme_adaptable');
    $description = get_string('newmenurequirelogindesc', 'theme_adaptable');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/newmenu5field';
    $title = get_string('newmenufield', 'theme_adaptable');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_adaptable_menus6', get_string('menusheading6', 'theme_adaptable'),
    format_text(get_string('menusdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/newmenu6';
    $title = get_string('newmenu6', 'theme_adaptable');
    $description = get_string('newmenudesc', 'theme_adaptable');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);

    $name = 'theme_adaptable/newmenu6requirelogin';
    $title = get_string('newmenurequirelogin', 'theme_adaptable');
    $description = get_string('newmenurequirelogindesc', 'theme_adaptable');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/newmenu6field';
    $title = get_string('newmenufield', 'theme_adaptable');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_adaptable_menus7', get_string('menusheading7', 'theme_adaptable'),
    format_text(get_string('menusdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/newmenu7';
    $title = get_string('newmenu7', 'theme_adaptable');
    $description = get_string('newmenudesc', 'theme_adaptable');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);

    $name = 'theme_adaptable/newmenu7requirelogin';
    $title = get_string('newmenurequirelogin', 'theme_adaptable');
    $description = get_string('newmenurequirelogindesc', 'theme_adaptable');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/newmenu7field';
    $title = get_string('newmenufield', 'theme_adaptable');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_adaptable_menus8', get_string('menusheading8', 'theme_adaptable'),
    format_text(get_string('menusdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/newmenu8';
    $title = get_string('newmenu8', 'theme_adaptable');
    $description = get_string('newmenudesc', 'theme_adaptable');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);

    $name = 'theme_adaptable/newmenu8requirelogin';
    $title = get_string('newmenurequirelogin', 'theme_adaptable');
    $description = get_string('newmenurequirelogindesc', 'theme_adaptable');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/newmenu8field';
    $title = get_string('newmenufield', 'theme_adaptable');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_adaptable_menus9', get_string('menusheading9', 'theme_adaptable'),
    format_text(get_string('menusdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/newmenu9';
    $title = get_string('newmenu9', 'theme_adaptable');
    $description = get_string('newmenudesc', 'theme_adaptable');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);

    $name = 'theme_adaptable/newmenu9requirelogin';
    $title = get_string('newmenurequirelogin', 'theme_adaptable');
    $description = get_string('newmenurequirelogindesc', 'theme_adaptable');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/newmenu9field';
    $title = get_string('newmenufield', 'theme_adaptable');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_adaptable_menus10', get_string('menusheading10', 'theme_adaptable'),
    format_text(get_string('menusdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/newmenu10';
    $title = get_string('newmenu10', 'theme_adaptable');
    $description = get_string('newmenudesc', 'theme_adaptable');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);

    $name = 'theme_adaptable/newmenu10requirelogin';
    $title = get_string('newmenurequirelogin', 'theme_adaptable');
    $description = get_string('newmenurequirelogindesc', 'theme_adaptable');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/newmenu10field';
    $title = get_string('newmenufield', 'theme_adaptable');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);
