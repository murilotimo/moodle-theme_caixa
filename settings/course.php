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

    $temp = new admin_settingpage('theme_caixa_course', get_string('coursesettings', 'theme_caixa'));
    $temp->add(new admin_setting_heading('theme_caixa_course', get_string('coursesettingsheading', 'theme_caixa'),
        format_text(get_string('coursedesc', 'theme_caixa'), FORMAT_MARKDOWN)));

    // Course section header background color.
    $name = 'theme_caixa/coursesectionheaderbg';
    $title = get_string('coursesectionheaderbg', 'theme_caixa');
    $description = get_string('coursesectionheaderbgdesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#F3F3F3', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Course section heading text color.
    $name = 'theme_caixa/sectionheadingcolor';
    $title = get_string('sectionheadingcolor', 'theme_caixa');
    $description = get_string('sectionheadingcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#5f588a', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Current course section header background color.
    $name = 'theme_caixa/currentcolor';
    $title = get_string('currentcolor', 'theme_caixa');
    $description = get_string('currentcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#d9edf7', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Course section header border bottom style.
    $name = 'theme_caixa/coursesectionheaderborderstyle';
    $title = get_string('coursesectionheaderborderstyle', 'theme_caixa');
    $description = get_string('coursesectionheaderborderstyledesc', 'theme_caixa');
    $radchoices = $borderstyles;
    $setting = new admin_setting_configselect($name, $title, $description, 'none', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Course section header border bottom color.
    $name = 'theme_caixa/coursesectionheaderbordercolor';
    $title = get_string('coursesectionheaderbordercolor', 'theme_caixa');
    $description = get_string('coursesectionheaderbordercolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#F3F3F3', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Course section header border bottom width.
    $name = 'theme_caixa/coursesectionheaderborderwidth';
    $title = get_string('coursesectionheaderborderwidth', 'theme_caixa');
    $description = get_string('coursesectionheaderborderwidthdesc', 'theme_caixa');
    $radchoices = $from0to6px;;
    $setting = new admin_setting_configselect($name, $title, $description, '0px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Course section border radius.
    $name = 'theme_caixa/coursesectionheaderborderradiustop';
    $title = get_string('coursesectionheaderborderradiustop', 'theme_caixa');
    $description = get_string('coursesectionheaderborderradiustopdesc', 'theme_caixa');
    $radchoices = $from0to50px;
    $setting = new admin_setting_configselect($name, $title, $description, '0px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Course section border radius.
    $name = 'theme_caixa/coursesectionheaderborderradiusbottom';
    $title = get_string('coursesectionheaderborderradiusbottom', 'theme_caixa');
    $description = get_string('coursesectionheaderborderradiusbottomdesc', 'theme_caixa');
    $radchoices = $from0to50px;
    $setting = new admin_setting_configselect($name, $title, $description, '0px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Course section border style.
    $name = 'theme_caixa/coursesectionborderstyle';
    $title = get_string('coursesectionborderstyle', 'theme_caixa');
    $description = get_string('coursesectionborderstyledesc', 'theme_caixa');
    $radchoices = $borderstyles;
    $setting = new admin_setting_configselect($name, $title, $description, 'solid', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Course section border width.
    $name = 'theme_caixa/coursesectionborderwidth';
    $title = get_string('coursesectionborderwidth', 'theme_caixa');
    $description = get_string('coursesectionborderwidthdesc', 'theme_caixa');
    $radchoices = $from0to6px;;
    $setting = new admin_setting_configselect($name, $title, $description, '1px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Course section border color.
    $name = 'theme_caixa/coursesectionbordercolor';
    $title = get_string('coursesectionbordercolor', 'theme_caixa');
    $description = get_string('coursesectionbordercolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#e8eaeb', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Course section border radius.
    $name = 'theme_caixa/coursesectionborderradius';
    $title = get_string('coursesectionborderradius', 'theme_caixa');
    $description = get_string('coursesectionborderradiusdesc', 'theme_caixa');
    $radchoices = $from0to50px;
    $setting = new admin_setting_configselect($name, $title, $description, '0px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_caixa', $temp);