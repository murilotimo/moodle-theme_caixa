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

    $ADMIN->add('theme_adaptable', $temp);