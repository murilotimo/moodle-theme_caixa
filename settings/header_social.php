<?php
    // Social links.
    $temp = new admin_settingpage('theme_adaptable_social', get_string('socialsettings', 'theme_adaptable'));

    $temp->add(new admin_setting_heading('theme_adaptable_social', get_string('socialheading', 'theme_adaptable'),
    format_text(get_string('socialtitledesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/socialset';
    $title = get_string('socialset', 'theme_adaptable');
    $description = get_string('socialsetdesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/socialsize';
    $title = get_string('socialsize', 'theme_adaptable');
    $description = get_string('socialsize', 'theme_adaptable');
    $choices = array(
        16 => "16px",
        18 => "18px",
        22 => "22px",
        26 => "26px",
        32 => "32px",
        36 => "36px",
        42 => "42px",
    );
    $setting = new admin_setting_configselect($name, $title, $description, 32, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/socialsizemobile';
    $title = get_string('socialsizemobile', 'theme_adaptable');
    $description = get_string('socialsizemobile', 'theme_adaptable');
    $choices = array(
        14 => "14px",
        16 => "16px",
        18 => "18px",
        22 => "22px",
        26 => "26px",
        32 => "32px",
        36 => "36px",
        42 => "42px",
    );
    $setting = new admin_setting_configselect($name, $title, $description, '14', $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/socialpaddingtop';
    $title = get_string('socialpaddingtop', 'theme_adaptable');
    $description = get_string('socialpaddingtop', 'theme_adaptable');
    $choices = array(
        '0%' => "0%",
        '0.1%' => "0.1%",
        '0.2%' => "0.2%",
        '0.3%' => "0.3%",
        '0.4%' => "0.4%",
        '0.5%' => "0.5%",
        '0.6%' => "0.6%",
        '0.7%' => "0.7%",
        '0.8%' => "0.8%",
        '0.9%' => "0.9%",
        '1%' => "1%",
        '1.1%' => "1.1%",
        '1.2%' => "1.2%",
        '1.3%' => "1.3%",
        '1.4%' => "1.4%",
        '1.5%' => "1.5%",
        '1.6%' => "1.6%",
        '1.7%' => "1.7%",
        '1.8%' => "1.8%",
        '1.9%' => "1.9%",
        '2%' => "2%",
        '2.1%' => "2.1%",
        '2.2%' => "2.2%",
        '2.3%' => "2.3%",
        '2.4%' => "2.4%",
        '2.5%' => "2.5%",
    );
    $setting = new admin_setting_configselect($name, $title, $description, '1.8%', $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Social settings.
    $name = 'theme_adaptable/socialsearchicon';
    $title = get_string('socialsearchicon', 'theme_adaptable');
    $description = get_string('socialsearchicondesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, false, false);
    $temp->add($setting);

    $name = 'theme_adaptable/social1';
    $title = get_string('social1', 'theme_adaptable');
    $description = get_string('social1desc', 'theme_adaptable');
    $default = 'http://facebook.com/';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social1icon';
    $title = get_string('social1icon', 'theme_adaptable') . ' - ' . get_string('social1', 'theme_adaptable');
    $default = 'fa-facebook-square';
    $description = get_string('socialicondesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social2';
    $title = get_string('social2', 'theme_adaptable');
    $description = get_string('social2desc', 'theme_adaptable');
    $default = 'http://twitter.com/';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social2icon';
    $title = get_string('social2icon', 'theme_adaptable') . ' - ' . get_string('social2', 'theme_adaptable');
    $default = 'fa-twitter-square';
    $description = get_string('socialicondesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social3';
    $title = get_string('social3', 'theme_adaptable');
    $description = get_string('social3desc', 'theme_adaptable');
    $default = 'https://plus.google.com/';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social3icon';
    $title = get_string('social3icon', 'theme_adaptable') . ' - ' . get_string('social3', 'theme_adaptable');
    $default = 'fa-google-plus';
    $description = get_string('socialicondesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social4';
    $title = get_string('social4', 'theme_adaptable');
    $description = get_string('social4desc', 'theme_adaptable');
    $default = 'https://www.instagram.com/';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social4icon';
    $title = get_string('social4icon', 'theme_adaptable') . ' - ' . get_string('social4', 'theme_adaptable');
    $default = 'fa-instagram';
    $description = get_string('socialicondesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social5';
    $title = get_string('social5', 'theme_adaptable');
    $description = get_string('social5desc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social5icon';
    $title = get_string('social5icon', 'theme_adaptable') . ' - ' . get_string('social5', 'theme_adaptable');
    $default = 'fa-tumblr-square';
    $description = get_string('socialicondesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social6';
    $title = get_string('social6', 'theme_adaptable');
    $description = get_string('social6desc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social6icon';
    $title = get_string('social6icon', 'theme_adaptable') . ' - ' . get_string('social6', 'theme_adaptable');
    $default = 'fa-linkedin';
    $description = get_string('socialicondesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social7';
    $title = get_string('social7', 'theme_adaptable');
    $description = get_string('social7desc', 'theme_adaptable');
    $default = 'https://youtube.com/';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social7icon';
    $title = get_string('social7icon', 'theme_adaptable') . ' - ' . get_string('social7', 'theme_adaptable');
    $default = 'fa-youtube-square';
    $description = get_string('socialicondesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social8';
    $title = get_string('social8', 'theme_adaptable');
    $description = get_string('social8desc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social8icon';
    $title = get_string('social8icon', 'theme_adaptable') . ' - ' . get_string('social8', 'theme_adaptable');
    $default = 'fa-flickr';
    $description = get_string('socialicondesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social9';
    $title = get_string('social9', 'theme_adaptable');
    $description = get_string('social9desc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social9icon';
    $title = get_string('social9icon', 'theme_adaptable') . ' - ' . get_string('social9', 'theme_adaptable');
    $default = 'fa-pinterest-p';
    $description = get_string('socialicondesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social10';
    $title = get_string('social10', 'theme_adaptable');
    $description = get_string('social10desc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social10icon';
    $title = get_string('social10icon', 'theme_adaptable') . ' - ' . get_string('social10', 'theme_adaptable');
    $default = 'fa-globe';
    $description = get_string('socialicondesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social11';
    $title = get_string('social11', 'theme_adaptable');
    $description = get_string('social11desc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social11icon';
    $title = get_string('social11icon', 'theme_adaptable') . ' - ' . get_string('social11', 'theme_adaptable');
    $default = 'fa-rss';
    $description = get_string('socialicondesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);
	
	$ADMIN->add('theme_adaptable', $temp);