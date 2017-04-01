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
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */

global $PAGE;

$temp = new admin_settingpage('theme_caixa_menus', get_string('menusettings', 'theme_caixa'));

$temp->add(new admin_setting_heading('theme_caixa_menus', get_string('menusheading', 'theme_caixa'),
format_text(get_string('menustitledesc', 'theme_caixa'), FORMAT_MARKDOWN)));

// Settings for top header menus.
$temp->add(new admin_setting_heading('theme_caixa_menus_visibility',
get_string('menusheadingvisibility', 'theme_caixa'),
format_text(get_string('menusheadingvisibilitydesc', 'theme_caixa'), FORMAT_MARKDOWN)));

$name = 'theme_caixa/enablemenus';
$title = get_string('enablemenus', 'theme_caixa');
$description = get_string('enablemenusdesc', 'theme_caixa');
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$name = 'theme_caixa/disablemenuscoursepages';
$title = get_string('disablemenuscoursepages', 'theme_caixa');
$description = get_string('disablemenuscoursepagesdesc', 'theme_caixa');
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$name = 'theme_caixa/menusession';
$title = get_string('menusession', 'theme_caixa');
$description = get_string('menusessiondesc', 'theme_caixa');
$setting = new admin_setting_configcheckbox($name, $title, $description, true, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$name = 'theme_caixa/menusessionttl';
$title = get_string('menusessionttl', 'theme_caixa');
$description = get_string('menusessionttldesc', 'theme_caixa');
$setting = new admin_setting_configtext($name, $title, $description, '30', PARAM_INT);
$temp->add($setting);

$name = 'theme_caixa/menuuseroverride';
$title = get_string('menuuseroverride', 'theme_caixa');
$description = get_string('menuuseroverridedesc', 'theme_caixa');
$default = false;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$name = 'theme_caixa/menuoverrideprofilefield';
$title = get_string('menuoverrideprofilefield', 'theme_caixa');
$description = get_string('menuoverrideprofilefielddesc', 'theme_caixa');
$default = get_string('menuoverrideprofilefielddefault', 'theme_caixa');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_RAW);
$temp->add($setting);

// Number of menus.
$name = 'theme_caixa/topmenuscount';
$title = get_string('topmenuscount', 'theme_caixa');
$description = get_string('topmenuscountdesc', 'theme_caixa');
$default = THEME_caixa_DEFAULT_TOPMENUSCOUNT;
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices1to12);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// If we don't have a menuscount yet, default to the preset.
$topmenuscount = get_config('theme_caixa', 'topmenuscount');
if (!$topmenuscount) {
    $topmenuscount = THEME_caixa_DEFAULT_TOPMENUSCOUNT;
}

for ($topmenusindex = 1; $topmenusindex <= $topmenuscount; $topmenusindex ++) {
    $temp->add(new admin_setting_heading('theme_caixa_menus' . $topmenusindex,
    get_string('newmenuheading', 'theme_caixa') . $topmenusindex,
    format_text(get_string('menusdesc', 'theme_caixa'), FORMAT_MARKDOWN)));

    $name = 'theme_caixa/newmenu' . $topmenusindex . 'title';
    $title = get_string('newmenutitle', 'theme_caixa');
    $description = get_string('newmenutitledesc', 'theme_caixa');
    $default = get_string('newmenutitledefault', 'theme_caixa') . ' ' . $topmenusindex;
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_RAW);
    $temp->add($setting);

    $name = 'theme_caixa/newmenu' . $topmenusindex;
    $title = get_string('newmenu', 'theme_caixa') . $topmenusindex;
    $description = get_string('newmenudesc', 'theme_caixa');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);

    $name = 'theme_caixa/newmenu' . $topmenusindex . 'requirelogin';
    $title = get_string('newmenurequirelogin', 'theme_caixa');
    $description = get_string('newmenurequirelogindesc', 'theme_caixa');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/newmenu' . $topmenusindex . 'field';
    $title = get_string('newmenufield', 'theme_caixa');
    $description = get_string('newmenufielddesc', 'theme_caixa');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);
}

$ADMIN->add('theme_caixa', $temp);

