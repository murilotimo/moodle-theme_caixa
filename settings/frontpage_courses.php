<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version details
 *
 * @package    theme_caixa
 * @copyright 2015 Jeremy Hopkins (Coventry University)
 * @copyright 2015 Fernando Acedo (3-bits.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */


    // Frontpage courses section.
    $temp = new admin_settingpage('theme_caixa_frontpage_courses', get_string('frontpagecoursesettings', 'theme_caixa'));
    $temp->add(new admin_setting_heading('theme_caixa_frontpage_courses',
                                         get_string('frontpagesettingsheading',
                                         'theme_caixa'),
                                         format_text(get_string('frontpagedesc', 'theme_caixa'), FORMAT_MARKDOWN)));

    $name = 'theme_caixa/frontpagerenderer';
    $title = get_string('frontpagerenderer', 'theme_caixa');
    $description = get_string('frontpagerendererdesc', 'theme_caixa');
    $choices = array(
        1 => get_string('frontpagerendereroption1', 'theme_caixa'),
        2 => get_string('frontpagerendereroption2', 'theme_caixa'),
        3 => get_string('frontpagerendereroption3', 'theme_caixa'),
        4 => get_string('frontpagerendereroption4', 'theme_caixa'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, 2, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/frontpagerendererdefaultimage';
    $title = get_string('frontpagerendererdefaultimage', 'theme_caixa');
    $description = get_string('frontpagerendererdefaultimagedesc', 'theme_caixa');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'frontpagerendererdefaultimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Show course contacts.
    $name = 'theme_caixa/tilesshowcontacts';
    $title = get_string('tilesshowcontacts', 'theme_caixa');
    $description = get_string('tilesshowcontactsdesc', 'theme_caixa');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $temp->add($setting);

    $name = 'theme_caixa/tilesshowallcontacts';
    $title = get_string('tilesshowallcontacts', 'theme_caixa');
    $description = get_string('tilesshowallcontactsdesc', 'theme_caixa');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $temp->add($setting);

    $name = 'theme_caixa/tilescontactstitle';
    $title = get_string('tilescontactstitle', 'theme_caixa');
    $description = get_string('tilescontactstitledesc', 'theme_caixa');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $temp->add($setting);

    $name = 'theme_caixa/covhidebutton';
    $title = get_string('covhidebutton', 'theme_caixa');
    $description = get_string('covhidebuttondesc', 'theme_caixa');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $temp->add($setting);

    // Show 'Available Courses' label.
    $name = 'theme_caixa/enableavailablecourses';
    $title = get_string('enableavailablecourses', 'theme_caixa');
    $description = get_string('enableavailablecoursesdesc', 'theme_caixa');
    $setting = new admin_setting_configselect($name, $title, $description, 0,
    array(
            'inherit' => get_string('show'),
            'none' => get_string('hide')
        ));
    $temp->add($setting);

    $ADMIN->add('theme_caixa', $temp);
