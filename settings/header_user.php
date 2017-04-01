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


    // Navbar.
    $temp = new admin_settingpage('theme_caixa_usernav', get_string('usernav', 'theme_caixa'));
    $temp->add(new admin_setting_heading('theme_caixa_usernav', get_string('usernavheading', 'theme_caixa'),
           format_text(get_string('usernavdesc', 'theme_caixa'), FORMAT_MARKDOWN)));

    $name = 'theme_caixa/hideinforum';
    $title = get_string('hideinforum', 'theme_caixa');
    $description = get_string('hideinforumdesc', 'theme_caixa');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable My.
    $name = 'theme_caixa/enablemy';
    $title = get_string('enablemy', 'theme_caixa');
    $description = get_string('enablemydesc', 'theme_caixa');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable View Profile.
    $name = 'theme_caixa/enableprofile';
    $title = get_string('enableprofile', 'theme_caixa');
    $description = get_string('enableprofiledesc', 'theme_caixa');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Edit Profile.
    $name = 'theme_caixa/enableeditprofile';
    $title = get_string('enableeditprofile', 'theme_caixa');
    $description = get_string('enableeditprofiledesc', 'theme_caixa');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Calendar.
    $name = 'theme_caixa/enablecalendar';
    $title = get_string('enablecalendar', 'theme_caixa');
    $description = get_string('enablecalendardesc', 'theme_caixa');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Private Files.
    $name = 'theme_caixa/enableprivatefiles';
    $title = get_string('enableprivatefiles', 'theme_caixa');
    $description = get_string('enableprivatefilesdesc', 'theme_caixa');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Grades.
    $name = 'theme_caixa/enablegrades';
    $title = get_string('enablegrades', 'theme_caixa');
    $description = get_string('enablegradesdesc', 'theme_caixa');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Badges.
    $name = 'theme_caixa/enablebadges';
    $title = get_string('enablebadges', 'theme_caixa');
    $description = get_string('enablebadgesdesc', 'theme_caixa');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Preferences.
    $name = 'theme_caixa/enablepref';
    $title = get_string('enablepref', 'theme_caixa');
    $description = get_string('enableprefdesc', 'theme_caixa');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Notes.
    $name = 'theme_caixa/enablenote';
    $title = get_string('enablenote', 'theme_caixa');
    $description = get_string('enablenotedesc', 'theme_caixa');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Blog.
    $name = 'theme_caixa/enableblog';
    $title = get_string('enableblog', 'theme_caixa');
    $description = get_string('enableblogdesc', 'theme_caixa');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Forum posts.
    $name = 'theme_caixa/enableposts';
    $title = get_string('enableposts', 'theme_caixa');
    $description = get_string('enablepostsdesc', 'theme_caixa');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Feed.
    $name = 'theme_caixa/enablefeed';
    $title = get_string('enablefeed', 'theme_caixa');
    $description = get_string('enablefeeddesc', 'theme_caixa');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_caixa', $temp);
