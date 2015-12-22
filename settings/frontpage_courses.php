<?php
    // Frontpage courses section.
    $temp = new admin_settingpage('theme_adaptable_frontpage_courses', get_string('frontpagecoursesettings', 'theme_adaptable'));
    $temp->add(new admin_setting_heading('theme_adaptable_frontpage_courses',
                                         get_string('frontpagesettingsheading',
                                         'theme_adaptable'),
                                         format_text(get_string('frontpagedesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/frontpagerenderer';
    $title = get_string('frontpagerenderer', 'theme_adaptable');
    $description = get_string('frontpagerendererdesc', 'theme_adaptable');
    $choices = array(
        1 => get_string('frontpagerendereroption1', 'theme_adaptable'),
        2 => get_string('frontpagerendereroption2', 'theme_adaptable'),
        3 => get_string('frontpagerendereroption3', 'theme_adaptable'),
        4 => get_string('frontpagerendereroption4', 'theme_adaptable'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, 2, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/frontpagerendererdefaultimage';
    $title = get_string('frontpagerendererdefaultimage', 'theme_adaptable');
    $description = get_string('frontpagerendererdefaultimagedesc', 'theme_adaptable');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'frontpagerendererdefaultimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Show course contacts.
    $name = 'theme_adaptable/tilesshowcontacts';
    $title = get_string('tilesshowcontacts', 'theme_adaptable');
    $description = get_string('tilesshowcontactsdesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $temp->add($setting);

    $name = 'theme_adaptable/tilesshowallcontacts';
    $title = get_string('tilesshowallcontacts', 'theme_adaptable');
    $description = get_string('tilesshowallcontactsdesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $temp->add($setting);

    $name = 'theme_adaptable/tilescontactstitle';
    $title = get_string('tilescontactstitle', 'theme_adaptable');
    $description = get_string('tilescontactstitledesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $temp->add($setting);

    $name = 'theme_adaptable/covhidebutton';
    $title = get_string('covhidebutton', 'theme_adaptable');
    $description = get_string('covhidebuttondesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $temp->add($setting);

    // Show 'Available Courses' label.
    $name = 'theme_adaptable/enableavailablecourses';
    $title = get_string('enableavailablecourses', 'theme_adaptable');
    $description = get_string('enableavailablecoursesdesc', 'theme_adaptable');
    $setting = new admin_setting_configselect($name, $title, $description, 0,
    array(
            'inherit' => get_string('show'),
            'none' => get_string('hide')
        ));
    $temp->add($setting);

    $ADMIN->add('theme_adaptable', $temp);