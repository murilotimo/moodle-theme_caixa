<?php
   // Settings for tools menus.
  
    $temp = new admin_settingpage('theme_adaptable_header_navbar_menu', get_string('navbarmenusettings', 'theme_adaptable'));
   
    $temp->add(new admin_setting_heading('theme_adaptable_toolsmenu', get_string('toolsmenu', 'theme_adaptable'),
	    format_text(get_string('toolsmenustitledesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $temp->add(new admin_setting_heading('theme_adaptable_toolsmenu1', get_string('toolsmenuheading1', 'theme_adaptable'),
    format_text(get_string('menusdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));
	
	$name = 'theme_adaptable/disablecustommenu';
    $title = get_string('disablecustommenu', 'theme_adaptable');
    $description = get_string('disablecustommenudesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, false, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
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
	
	$ADMIN->add('theme_adaptable', $temp);