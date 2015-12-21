<?php
    // Marketing blocks section.
    $temp = new admin_settingpage('theme_adaptable_frontpage_blocks', get_string('frontpageblocksettings', 'theme_adaptable'));

    $name = 'theme_adaptable/homebk';
    $title = get_string('homebk', 'theme_adaptable');
    $description = get_string('homebkdesc', 'theme_adaptable');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'homebk');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/infobox';
    $title = get_string('infobox', 'theme_adaptable');
    $description = get_string('infoboxdesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/infoboxfullscreen';
    $title = get_string('infoboxfullscreen', 'theme_adaptable');
    $description = get_string('infoboxfullscreendesc', 'theme_adaptable');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/infobox2';
    $title = get_string('infobox2', 'theme_adaptable');
    $description = get_string('infobox2desc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_adaptable_marketing', get_string('marketingsettingsheading', 'theme_adaptable'),
        format_text(get_string('marketingdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/frontpagemarketenabled';
    $title = get_string('frontpagemarketenabled', 'theme_adaptable');
    $description = get_string('frontpagemarketenableddesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/frontpagemarketoption';
    $title = get_string('frontpagemarketoption', 'theme_adaptable');
    $description = get_string('frontpagemarketoptiondesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    $name = 'theme_adaptable/market1';
    $title = get_string('market1', 'theme_adaptable');
    $description = get_string('market1desc', 'theme_adaptable');
    $default = '';
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market2';
    $title = get_string('market2', 'theme_adaptable');
    $description = get_string('market2desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market3';
    $title = get_string('market3', 'theme_adaptable');
    $description = get_string('market3desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market4';
    $title = get_string('market4', 'theme_adaptable');
    $description = get_string('market4desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market5';
    $title = get_string('market5', 'theme_adaptable');
    $description = get_string('market5desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market6';
    $title = get_string('market6', 'theme_adaptable');
    $description = get_string('market6desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market7';
    $title = get_string('market7', 'theme_adaptable');
    $description = get_string('market7desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market8';
    $title = get_string('market8', 'theme_adaptable');
    $description = get_string('market8desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market9';
    $title = get_string('market9', 'theme_adaptable');
    $description = get_string('market9desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market10';
    $title = get_string('market10', 'theme_adaptable');
    $description = get_string('market10desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market11';
    $title = get_string('market11', 'theme_adaptable');
    $description = get_string('market11desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market12';
    $title = get_string('market12', 'theme_adaptable');
    $description = get_string('market12desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_adaptable', $temp);