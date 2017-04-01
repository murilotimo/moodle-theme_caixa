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
 * @copyright  2015 Jeremy Hopkins (Coventry University)
 * @copyright  2015 Fernando Acedo (3-bits.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */


    // Header heading.
    $temp = new admin_settingpage('theme_caixa_header', get_string('headersettings', 'theme_caixa'));
    $temp->add(new admin_setting_heading('theme_caixa_header', get_string('headersettingsheading', 'theme_caixa'),
    format_text(get_string('headerdesc', 'theme_caixa'), FORMAT_MARKDOWN)));

    // Enable front page login form in header.
    $name = 'theme_caixa/frontpagelogin';
    $title = get_string('frontpagelogin', 'theme_caixa');
    $description = get_string('frontpagelogindesc', 'theme_caixa');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Select type of login.
    $name = 'theme_caixa/displaylogin';
    $title = get_string('displaylogin', 'theme_caixa');
    $description = get_string('displaylogindesc', 'theme_caixa');
    $choices = array(
        'button' => get_string('displayloginbutton', 'theme_caixa'),
        'box' => get_string('displayloginbox', 'theme_caixa'),
        'no' => get_string('displayloginno', 'theme_caixa')
    );
    $setting = new admin_setting_configselect($name, $title, $description, 'button', $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Enable messaging menu in header.
    $name = 'theme_caixa/enablemessagemenu';
    $title = get_string('enablemessagemenu', 'theme_caixa');
    $description = get_string('enablemessagemenudesc', 'theme_caixa');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Filter admin messages
    $name = 'theme_caixa/filteradminmessages';
    $title = get_string('filteradminmessages', 'theme_caixa');
    $description = get_string('filteradminmessagesdesc', 'theme_caixa');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Logo.
    $name = 'theme_caixa/logo';
    $title = get_string('logo', 'theme_caixa');
    $description = get_string('logodesc', 'theme_caixa');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

       // Logo no centro.
    $name = 'theme_caixa/logocenter';
    $title = get_string('logocenter', 'theme_caixa');
    $description = get_string('logocenterdesc', 'theme_caixa');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logocenter');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Favicon file setting.
    $name = 'theme_caixa/favicon';
    $title = get_string('favicon', 'theme_caixa');
    $description = get_string('favicondesc', 'theme_caixa');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'favicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Display Course title in the header.
    $name = 'theme_caixa/sitetitle';
    $title = get_string('sitetitle', 'theme_caixa');
    $description = get_string('sitetitledesc', 'theme_caixa');
    $radchoices = array(
        'disabled' => get_string('sitetitleoff', 'theme_caixa'),
        'default' => get_string('sitetitledefault', 'theme_caixa'),
        'custom' => get_string('sitetitlecustom', 'theme_caixa')
    );
    $setting = new admin_setting_configselect($name, $title, $description, 'default', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Site title.
    $name = 'theme_caixa/sitetitletext';
    $title = get_string('sitetitletext', 'theme_caixa');
    $description = get_string('sitetitletextdesc', 'theme_caixa');
    $default = '';
    $setting = new caixa_setting_confightmleditor($name, $title, $description, $default);


    $temp->add($setting);


    // Display Course title in the header.
    $name = 'theme_caixa/enableheading';
    $title = get_string('enableheading', 'theme_caixa');
    $description = get_string('enableheadingdesc', 'theme_caixa');
    $radchoices = array(
        'fullname' => get_string('breadcrumbtitlefullname', 'theme_caixa'),
        'shortname' => get_string('breadcrumbtitleshortname', 'theme_caixa'),
        'off' => get_string('hide'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, 'fullname', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Site Title Padding Top.
    $name = 'theme_caixa/sitetitlepaddingtop';
    $title = get_string('sitetitlepaddingtop', 'theme_caixa');
    $description = get_string('sitetitlepaddingtopdesc', 'theme_caixa');
    $setting = new admin_setting_configtext($name, $title, $description, '0px');
    $setting = new admin_setting_configselect($name, $title, $description, '0px', $from0to20px);
    $temp->add($setting);

    // Site Title Padding Left.
    $name = 'theme_caixa/sitetitlepaddingleft';
    $title = get_string('sitetitlepaddingleft', 'theme_caixa');
    $description = get_string('sitetitlepaddingleftdesc', 'theme_caixa');
    $setting = new admin_setting_configselect($name, $title, $description, '0px', $from0to20px);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Site Title Maximum Width.
    $name = 'theme_caixa/sitetitlemaxwidth';
    $title = get_string('sitetitlemaxwidth', 'theme_caixa');
    $description = get_string('sitetitlemaxwidthdesc', 'theme_caixa');
    $setting = new admin_setting_configselect($name, $title, $description, '50%', $from35to80percent);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Breadcrumb home.
    $name = 'theme_caixa/breadcrumbhome';
    $title = get_string('breadcrumbhome', 'theme_caixa');
    $description = get_string('breadcrumbhomedesc', 'theme_caixa');
    $radchoices = array(
        'text' => get_string('breadcrumbhometext', 'theme_caixa'),
        'icon' => get_string('breadcrumbhomeicon', 'theme_caixa')
    );
    $setting = new admin_setting_configselect($name, $title, $description, 'icon', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Breadcrumb separator.
    $name = 'theme_caixa/breadcrumbseparator';
    $title = get_string('breadcrumbseparator', 'theme_caixa');
    $description = get_string('breadcrumbseparatordesc', 'theme_caixa');
    $setting = new admin_setting_configtext($name, $title, $description, 'angle-right');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Choose to display search box or social icons.
    $name = 'theme_caixa/socialorsearch';
    $title = get_string('socialorsearch', 'theme_caixa');
    $description = get_string('socialorsearchdesc', 'theme_caixa');
    $radchoices = array(
        'social' => get_string('socialorsearchsocial', 'theme_caixa'),
        'search' => get_string('socialorsearchsearch', 'theme_caixa')
    );
    $setting = new admin_setting_configselect($name, $title, $description, 'social', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Search box padding top.
    $name = 'theme_caixa/searchboxpaddingtop';
    $title = get_string('searchboxpaddingtop', 'theme_caixa');
    $description = get_string('searchboxpaddingtopdesc', 'theme_caixa');
    $setting = new admin_setting_configselect($name, $title, $description, '16px', $from0to30px);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_caixa', $temp);
