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

// Settings for tools menus.

$temp = new admin_settingpage('theme_caixa_header_navbar_menu', get_string('navbarmenusettings', 'theme_caixa'));

$temp->add(new admin_setting_heading('theme_caixa_toolsmenu', get_string('toolsmenu', 'theme_caixa'),
    format_text(get_string('toolsmenudesc', 'theme_caixa'), FORMAT_MARKDOWN)));

$temp->add(new admin_setting_heading('theme_caixa_toolsmenu', get_string('toolsmenuheading', 'theme_caixa'),
format_text(get_string('toolsmenuheadingdesc', 'theme_caixa'), FORMAT_MARKDOWN)));

$name = 'theme_caixa/disablecustommenu';
$title = get_string('disablecustommenu', 'theme_caixa');
$description = get_string('disablecustommenudesc', 'theme_caixa');
$setting = new admin_setting_configcheckbox($name, $title, $description, false, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$name = 'theme_caixa/enabletoolsmenus';
$title = get_string('enabletoolsmenus', 'theme_caixa');
$description = get_string('enabletoolsmenusdesc', 'theme_caixa');
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

// Number of tools menus.
$name = 'theme_caixa/toolsmenuscount';
$title = get_string('toolsmenuscount', 'theme_caixa');
$description = get_string('toolsmenuscountdesc', 'theme_caixa');
$default = THEME_caixa_DEFAULT_TOOLSMENUSCOUNT;
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices1to12);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// If we don't have a menuscount yet, default to the preset.
$toolsmenuscount = get_config('theme_caixa', 'toolsmenuscount');

if (!$toolsmenuscount) {
    $toolsmenuscount = THEME_caixa_DEFAULT_TOOLSMENUSCOUNT;
}

for ($toolsmenusindex = 1; $toolsmenusindex <= $toolsmenuscount; $toolsmenusindex ++) {
    $temp->add(new admin_setting_heading('theme_caixa_menus' . $toolsmenusindex,
    get_string('toolsmenuheading', 'theme_caixa') . $toolsmenusindex,
    format_text(get_string('toolsmenudesc', 'theme_caixa'), FORMAT_MARKDOWN)));

    $name = 'theme_caixa/toolsmenu' . $toolsmenusindex . 'title';
    $title = get_string('toolsmenutitle', 'theme_caixa') . ' ' . $toolsmenusindex;
    $description = get_string('toolsmenutitledesc', 'theme_caixa');
    $default = get_string('toolsmenutitledefault', 'theme_caixa');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_RAW);
    $temp->add($setting);

    $name = 'theme_caixa/toolsmenu' . $toolsmenusindex;
    $title = get_string('toolsmenu', 'theme_caixa') . ' ' . $toolsmenusindex;
    $description = get_string('toolsmenudesc', 'theme_caixa');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);
    $name = 'theme_caixa/toolsmenu' . $toolsmenusindex . 'field';
    $title = get_string('toolsmenufield', 'theme_caixa');
    $description = get_string('toolsmenufielddesc', 'theme_caixa');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);
}


    $ADMIN->add('theme_caixa', $temp);
