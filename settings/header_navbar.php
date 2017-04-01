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


// Header Navbar.
$temp = new admin_settingpage('theme_caixa_navbar', get_string('navbarsettings', 'theme_caixa'));
$temp->add(new admin_setting_heading('theme_caixa_navbar', get_string('navbarsettingsheading', 'theme_caixa'),
format_text(get_string('navbardesc', 'theme_caixa'), FORMAT_MARKDOWN)));


// Sticky Navbar at the top. See issue #278.

/*******************
 * $name = 'theme_caixa/stickynavbar';
 * $title = get_string('stickynavbar', 'theme_caixa');
 * $description = get_string('stickynavbardesc', 'theme_caixa');
 * $default = false;
 * $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
 * $setting->set_updatedcallback('theme_reset_all_caches');
 * $temp->add($setting);
 *
 * $name = 'theme_caixa/navbarcachetime';
 * $title = get_string('navbarcachetime', 'theme_caixa');
 * $description = get_string('navbarcachetimedesc', 'theme_caixa');
 * $setting = new admin_setting_configselect($name, $title, $description, '0', $from0to60inc5);
 * $setting->set_updatedcallback('theme_reset_all_caches');
 * $temp->add($setting);
 */

$name = 'theme_caixa/enablehome';
$title = get_string('home');
$description = get_string('enablehomedesc', 'theme_caixa');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$name = 'theme_caixa/enablehomeredirect';
$title = get_string('enablehomeredirect', 'theme_caixa');
$description = get_string('enablehomeredirectdesc', 'theme_caixa');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$name = 'theme_caixa/enablemyhome';
$title = get_string('myhome');
$description = get_string('enablemyhomedesc', 'theme_caixa', get_string('myhome'));
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$name = 'theme_caixa/enableevents';
$title = get_string('events', 'theme_caixa');
$description = get_string('enableeventsdesc', 'theme_caixa');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$name = 'theme_caixa/enablemysites';
$title = get_string('mysites', 'theme_caixa');
$description = get_string('enablemysitesdesc', 'theme_caixa');
$choices = array(
    'excludehidden' => get_string('mysitesexclude', 'theme_caixa'),
    'includehidden' => get_string('mysitesinclude', 'theme_caixa'),
    'disabled' => get_string('mysitesdisabled', 'theme_caixa'),
);
$setting->set_updatedcallback('theme_reset_all_caches');
$setting = new admin_setting_configselect($name, $title, $description, 'excludehidden', $choices);
$temp->add($setting);

$name = 'theme_caixa/mysitesmaxlength';
$title = get_string('mysitesmaxlength', 'theme_caixa');
$description = get_string('mysitesmaxlengthdesc', 'theme_caixa');
$setting = new admin_setting_configselect($name, $title, $description, '30', $from20to40);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$name = 'theme_caixa/mysitessortoverride';
$title = get_string('mysitessortoverride', 'theme_caixa');
$description = get_string('mysitessortoverridedesc', 'theme_caixa');
$choices = array(
    'off' => get_string('mysitessortoverrideoff', 'theme_caixa'),
    'strings' => get_string('mysitessortoverridestrings', 'theme_caixa'),
    'profilefields' => get_string('mysitessortoverrideprofilefields', 'theme_caixa'),
    'profilefieldscohort' => get_string('mysitessortoverrideprofilefieldscohort', 'theme_caixa')
);
$setting = new admin_setting_configselect($name, $title, $description, 'off', $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$name = 'theme_caixa/mysitessortoverridefield';
$title = get_string('mysitessortoverridefield', 'theme_caixa');
$description = get_string('mysitessortoverridefielddesc', 'theme_caixa');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_RAW);
$temp->add($setting);

$name = 'theme_caixa/enablethiscourse';
$title = get_string('thiscourse', 'theme_caixa');
$description = get_string('enablethiscoursedesc', 'theme_caixa');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$name = 'theme_caixa/enablezoom';
$title = get_string('enablezoom', 'theme_caixa');
$description = get_string('enablezoomdesc', 'theme_caixa');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$name = 'theme_caixa/enableshowhideblocks';
$title = get_string('enableshowhideblocks', 'theme_caixa');
$description = get_string('enableshowhideblocksdesc', 'theme_caixa');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Enable help link.
$name = 'theme_caixa/enablehelp';
$title = get_string('enablehelp', 'theme_caixa');
$description = get_string('enablehelpdesc', 'theme_caixa');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$temp->add($setting);

$name = 'theme_caixa/helpprofilefield';
$title = get_string('helpprofilefield', 'theme_caixa');
$description = get_string('helpprofilefielddesc', 'theme_caixa');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
$temp->add($setting);

$name = 'theme_caixa/enablehelp2';
$title = get_string('enablehelp', 'theme_caixa');
$description = get_string('enablehelpdesc', 'theme_caixa');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$temp->add($setting);

$name = 'theme_caixa/helpprofilefield2';
$title = get_string('helpprofilefield', 'theme_caixa');
$description = get_string('helpprofilefielddesc', 'theme_caixa');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
$temp->add($setting);

$name = 'theme_caixa/helptarget';
$title = get_string('helptarget', 'theme_caixa');
$description = get_string('helptargetdesc', 'theme_caixa');
$choices = array(
    '_blank' => get_string('targetnewwindow', 'theme_caixa'),
    '_self' => get_string('targetsamewindow', 'theme_caixa'),
);
$setting = new admin_setting_configselect($name, $title, $description, '_blank', $choices);

$temp->add($setting);

$ADMIN->add('theme_caixa', $temp);
