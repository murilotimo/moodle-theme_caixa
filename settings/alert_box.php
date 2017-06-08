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
 * @package   theme_caixa
 * @copyright 2015-2016 Jeremy Hopkins (Coventry University)
 * @copyright 2015-2016 Fernando Acedo (3-bits.com)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */

// Alert Section.
$temp = new admin_settingpage('theme_caixa_frontpage_alert', get_string('frontpagealertsettings', 'theme_caixa'));
$temp->add(new admin_setting_heading('theme_caixa_alert', get_string('alertsettingsheading', 'theme_caixa'),
format_text(get_string('alertdesc', 'theme_caixa'), FORMAT_MARKDOWN)));

// Alert General Settings Heading.
$name = 'theme_caixa/settingsalertgeneral';
$heading = get_string('alertsettingsgeneral', 'theme_caixa');
$setting = new admin_setting_heading($name, $heading, '');
$temp->add($setting);

// Enable or disable alerts.
$name = 'theme_caixa/enablealerts';
$title = get_string('enablealerts', 'theme_caixa');
$description = get_string('enablealertsdesc', 'theme_caixa');
$default = false;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Disable alert in course pages.
$name = 'theme_caixa/enablealertcoursepages';
$title = get_string('enablealertcoursepages', 'theme_caixa');
$description = get_string('enablealertcoursepagesdesc', 'theme_caixa');
$default = false;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Strip Tags.
$name = 'theme_caixa/enablealertstriptags';
$title = get_string('enablealertstriptags', 'theme_caixa');
$description = get_string('enablealertstriptagsdesc', 'theme_caixa');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Number of Alerts.
$name = 'theme_caixa/alertcount';
$title = get_string('alertcount', 'theme_caixa');
$description = get_string('alertcountdesc', 'theme_caixa');
$default = THEME_caixa_DEFAULT_ALERTCOUNT;
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices1to12);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$alertcount = get_config('theme_caixa', 'alertcount');
// If we don't have an an alertcount yet, default to the preset.
if (!$alertcount) {
    $alertcount = THEME_caixa_DEFAULT_ALERTCOUNT;
}

for ($alertindex = 1; $alertindex <= $alertcount; $alertindex++) {
    // Alert Box Heading 1.
    $name = 'theme_caixa/settingsalertbox' . $alertindex;
    $heading = get_string('alertsettings', 'theme_caixa', $alertindex);
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Enable Alert 1.
    $name = 'theme_caixa/enablealert' . $alertindex;
    $title = get_string('enablealert', 'theme_caixa', $alertindex);
    $description = get_string('enablealertdesc', 'theme_caixa', $alertindex);
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Alert Key.
    $name = 'theme_caixa/alertkey' . $alertindex;
    $title = get_string('alertkeyvalue', 'theme_caixa');
    $description = get_string('alertkeyvalue_details', 'theme_caixa');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    // Alert Text 1.
    $name = 'theme_caixa/alerttext' . $alertindex;
    $title = get_string('alerttext', 'theme_caixa');
    $description = get_string('alerttextdesc', 'theme_caixa');
    $default = '';
    $setting = new caixa_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    // Alert Type 1.
    $name = 'theme_caixa/alerttype' . $alertindex;
    $title = get_string('alerttype', 'theme_caixa');
    $description = get_string('alerttypedesc', 'theme_caixa');
    $default = 'info';
    $choices = array(
    'info' => get_string('alertinfo', 'theme_caixa'),
    'warning' => get_string('alertwarning', 'theme_caixa'),
    'success' => get_string('alertannounce', 'theme_caixa'));
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Alert Access.
    $name = 'theme_caixa/alertaccess' . $alertindex;
    $title = get_string('alertaccess', 'theme_caixa');
    $description = get_string('alertaccessdesc', 'theme_caixa');
    $default = 'global';
    $choices = array(
    'global' => get_string('alertaccessglobal', 'theme_caixa'),
    'user' => get_string('alertaccessusers', 'theme_caixa'),
    'admin' => get_string('alertaccessadmins', 'theme_caixa'),
    'profile' => get_string('alertaccessprofile', 'theme_caixa'));
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/alertprofilefield' . $alertindex;
    $title = get_string('alertprofilefield', 'theme_caixa');
    $description = get_string('alertprofilefielddesc', 'theme_caixa');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);
}

$ADMIN->add('theme_caixa', $temp);
