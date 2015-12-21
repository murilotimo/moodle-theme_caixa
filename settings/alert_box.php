<?php
    // Alert Section.
    $temp = new admin_settingpage('theme_adaptable_frontpage_alert', get_string('frontpagealertsettings', 'theme_adaptable'));
    $temp->add(new admin_setting_heading('theme_adaptable_alert', get_string('alertsettingsheading', 'theme_adaptable'),
        format_text(get_string('alertdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    // Alert General Settings Heading.
    $name = 'theme_adaptable/settingsalertgeneral';
    $heading = get_string('alertsettingsgeneral', 'theme_adaptable');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Disable alert in course pages.
    $name = 'theme_adaptable/enablealertcoursepages';
    $title = get_string('enablealertcoursepages', 'theme_adaptable');
    $description = get_string('enablealertcoursepagesdesc', 'theme_adaptable');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Strip Tags.
    $name = 'theme_adaptable/enablealertstriptags';
    $title = get_string('enablealertstriptags', 'theme_adaptable');
    $description = get_string('enablealertstriptagsdesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Number of Alerts.
    $name = 'theme_adaptable/alertcount';
    $title = get_string('alertcount', 'theme_adaptable');
    $description = get_string('alertcountdesc', 'theme_adaptable');
	$default = THEME_ADAPTABLE_DEFAULT_ALERTCOUNT;
	$choices = array(
	'1' => '1',
	'2' => '2',
	'3' => '3',
	'4' => '4',
	'5' => '5',
	'6' => '6',
	'7' => '7',
	'8' => '8',
	'9' => '9',
	'10' => '10');    
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // If we don't have an an alertcount yet, default to the preset.
    $alertcount = get_config('theme_adaptable', 'alertcount');
    if (!$alertcount) {
        $alertcount = THEME_ADAPTABLE_DEFAULT_ALERTCOUNT;
    }

    for ($alertindex = 1; $alertindex <= $alertcount; $alertindex++) {
        // Alert Box Heading 1.
        $name = 'theme_adaptable/settingsalertbox' . $alertindex;
        $heading = get_string('alertsettings', 'theme_adaptable', $alertindex);
        $setting = new admin_setting_heading($name, $heading, '');
        $temp->add($setting);

        // Enable Alert 1.
        $name = 'theme_adaptable/enablealert' . $alertindex;
        $title = get_string('enablealert', 'theme_adaptable', $alertindex);
        $description = get_string('enablealertdesc', 'theme_adaptable', $alertindex);
        $default = false;
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        // Alert Key.
        $name = 'theme_adaptable/alertkey' . $alertindex;
        $title = get_string('alertkeyvalue', 'theme_adaptable');
        $description = get_string('alertkeyvalue_details', 'theme_adaptable');
        $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
        $temp->add($setting);

        // Alert Text 1.
        $name = 'theme_adaptable/alerttext' . $alertindex;
        $title = get_string('alerttext', 'theme_adaptable');
        $description = get_string('alerttextdesc', 'theme_adaptable');
        $default = '';
        $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
        $temp->add($setting);

        // Alert Type 1.
        $name = 'theme_adaptable/alerttype' . $alertindex;
        $title = get_string('alerttype', 'theme_adaptable');
        $description = get_string('alerttypedesc', 'theme_adaptable');
        $default = 'info';
        $choices = array(
            'info' => get_string('alertinfo', 'theme_adaptable'),
            'warning' => get_string('alertwarning', 'theme_adaptable'),
            'success' => get_string('alertannounce', 'theme_adaptable'));
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        // Alert Access.
        $name = 'theme_adaptable/alertaccess' . $alertindex;
        $title = get_string('alertaccess', 'theme_adaptable');
        $description = get_string('alertaccessdesc', 'theme_adaptable');
        $default = 'global';
        $choices = array(
            'global' => get_string('alertaccessglobal', 'theme_adaptable'),
            'users' => get_string('alertaccessusers', 'theme_adaptable'),
            'admin' => get_string('alertaccessadmins', 'theme_adaptable'),
            'profile' => get_string('alertaccessprofile', 'theme_adaptable'));
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        $name = 'theme_adaptable/alertprofilefield' . $alertindex;
        $title = get_string('alertprofilefield', 'theme_adaptable');
        $description = get_string('alertprofilefielddesc', 'theme_adaptable');
        $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
        $temp->add($setting);
    }

    $ADMIN->add('theme_adaptable', $temp);