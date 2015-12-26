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
 * @package    theme
 * @subpackage adaptable
 * @copyright 2015 Jeremy Hopkins (Coventry University) 
 * @copyright 2015 Fernando Acedo (3-bits.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */


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

    $name = 'theme_adaptable/socialiconlist';
    $title = get_string('socialiconlist', 'theme_adaptable');
    $description = get_string('socialiconlistdesc', 'theme_adaptable');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);

    $ADMIN->add('theme_adaptable', $temp);
