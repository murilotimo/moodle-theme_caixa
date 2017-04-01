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


    $temp = new admin_settingpage('theme_caixa_mobile', get_string('mobilesettings', 'theme_caixa'));
    $temp->add(new admin_setting_heading('theme_caixa_mobile', get_string('mobilesettingsheading', 'theme_caixa'),
        '', FORMAT_MARKDOWN));

    $name = 'theme_caixa/hidealertsmobile';
    $title = get_string('hidealertsmobile', 'theme_caixa');
    $description = get_string('hidealertsmobiledesc', 'theme_caixa');
    $radchoices = array(
        ', .customalert' => get_string('hide'),
        '' => get_string('show'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, ', .socialbox', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/hidesocialmobile';
    $title = get_string('hidesocialmobile', 'theme_caixa');
    $description = get_string('hidesocialmobiledesc', 'theme_caixa');
    $radchoices = array(
        ', .socialbox' => get_string('hide'),
        '' => get_string('show'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, ', .socialbox', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/socialboxpaddingtopmobile';
    $title = get_string('socialboxpaddingtopmobile', 'theme_caixa');
    $description = get_string('socialboxpaddingtopmobile', 'theme_caixa');
    $choices = array(
        '5px' => "5px",
        '6px' => "6px",
        '7px' => "7px",
        '8px' => "8px",
        '9px' => "9px",
        '10px' => "10px",
        '12px' => "12px",
        '14px' => "14px",
        '16px' => "16px",
        '18px' => "18px",
        '20px' => "20px",
        '22px' => "22px",
    );
    $setting = new admin_setting_configselect($name, $title, $description, '10px', $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/socialboxpaddingbottommobile';
    $title = get_string('socialboxpaddingbottommobile', 'theme_caixa');
    $description = get_string('socialboxpaddingbottommobile', 'theme_caixa');
    $choices = $from0to12px;
    $setting = new admin_setting_configselect($name, $title, $description, '10px', $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/hidecoursetitlemobile';
    $title = get_string('hidecoursetitlemobile', 'theme_caixa');
    $description = get_string('hidecoursetitlemobiledesc', 'theme_caixa');
    $radchoices = array(
        ', #coursetitle, #titlecontainer' => get_string('hide'),
        '' => get_string('show'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, ', #coursetitle, #titlecontainer', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/hidelogomobile';
    $title = get_string('hidelogomobile', 'theme_caixa');
    $description = get_string('hidelogomobiledesc', 'theme_caixa');
    $radchoices = array(
        ', #logocontainer' => get_string('hide'),
        '' => get_string('show'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, ', #logocontainer', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/hideheadermobile';
    $title = get_string('hideheadermobile', 'theme_caixa');
    $description = get_string('hideheadermobiledesc', 'theme_caixa');
    $radchoices = array(
        ', #page-header' => get_string('hide'),
        '' => get_string('show'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, ', #page-header', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/hidebreadcrumbmobile';
    $title = get_string('hidebreadcrumbmobile', 'theme_caixa');
    $description = get_string('hidebreadcrumbmobiledesc', 'theme_caixa');
    $radchoices = array(
        ', .breadcrumb' => get_string('hide'),
        '' => get_string('show'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, ', .breadcrumb', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/hidepagefootermobile';
    $title = get_string('hidepagefootermobile', 'theme_caixa');
    $description = get_string('hidepagefootermobiledesc', 'theme_caixa');
    $radchoices = array(
        ', #page-footer' => get_string('hide'),
        '' => get_string('show'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, ', #page-footer', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_caixa', $temp);
