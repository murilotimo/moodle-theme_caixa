<?php
    // Analytics Section.
    $temp = new admin_settingpage('theme_adaptable_analytics', get_string('analyticssettings', 'theme_adaptable'));
    $temp->add(new admin_setting_heading('theme_adaptable_analytics', get_string('analyticssettingsheading', 'theme_adaptable'),
        format_text(get_string('analyticssettingsdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    // Number of Analytics entries.
    $name = 'theme_adaptable/analyticscount';
    $title = get_string('analyticscount', 'theme_adaptable');
    $description = get_string('analyticscountdesc', 'theme_adaptable');
    $default = THEME_ADAPTABLE_DEFAULT_ANALYTICSCOUNT;
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices1to12);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// If we don't have an an analyticscount yet, default to the preset.
    $analyticscount = get_config('theme_adaptable', 'analyticscount');
    if (!$analyticscount) {
        $alertcount = THEME_ADAPTABLE_DEFAULT_ANALYTICSCOUNT;
    }
	
    for ($analyticsindex = 1; $analyticsindex <= $analyticscount; $analyticsindex ++) {
        // Alert Box Heading 1.
        $name = 'theme_adaptable/settingsanalytics' . $analyticsindex;
        $heading = get_string('analyticssettings', 'theme_adaptable', $analyticsindex);
        $setting = new admin_setting_heading($name, $heading, '');
        $temp->add($setting);

        // Alert Text 1.
        $name = 'theme_adaptable/analyticstext' . $analyticsindex;
        $title = get_string('analyticstext', 'theme_adaptable');
        $description = get_string('analyticstextdesc', 'theme_adaptable');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_RAW);
        $temp->add($setting);

        $name = 'theme_adaptable/analyticsprofilefield' . $analyticsindex;
        $title = get_string('analyticsprofilefield', 'theme_adaptable');
        $description = get_string('analyticsprofilefielddesc', 'theme_adaptable');
        $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
        $temp->add($setting);
    }	

    $ADMIN->add('theme_adaptable', $temp);