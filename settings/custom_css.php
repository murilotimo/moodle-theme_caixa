<?php
    // Custom CSS and JS section.
    $temp = new admin_settingpage('theme_adaptable_generic', get_string('customcssjssettings', 'theme_adaptable'));
    $temp->add(new admin_setting_heading('theme_adaptable_generic', get_string('genericsettingsheading', 'theme_adaptable'),
        format_text(get_string('genericsettingsdescription', 'theme_adaptable'), FORMAT_MARKDOWN)));

    // Custom CSS file.
    $name = 'theme_adaptable/customcss';
    $title = get_string('customcss', 'theme_adaptable');
    $description = get_string('customcssdesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Section for javascript to be added e.g. Google Analytics.
    $name = 'theme_adaptable/jssection';
    $title = get_string('jssection', 'theme_adaptable');
    $description = get_string('jssectiondesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/fsize';
    $title = get_string('fsize', 'theme_adaptable');
    $description = get_string('fsizedesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $temp->add($setting);

    $ADMIN->add('theme_adaptable', $temp);