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
 * @copyright  2015-2016 Jeremy Hopkins (Coventry University)
 * @copyright  2015-2016 Fernando Acedo (3-bits.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */


    // Colors section.
    $temp = new admin_settingpage('theme_caixa_color', get_string('colorsettings', 'theme_caixa'));
    $temp->add(new admin_setting_heading('theme_caixa_color', get_string('colorsettingsheading', 'theme_caixa'),
                   format_text(get_string('colordesc', 'theme_caixa'), FORMAT_MARKDOWN)));


    // Main colors heading.
    $name = 'theme_caixa/settingsmaincolors';
    $heading = get_string('settingsmaincolors', 'theme_caixa');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Site main color.
    $name = 'theme_caixa/maincolor';
    $title = get_string('maincolor', 'theme_caixa');
    $description = get_string('maincolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#009688', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Site background color.
    $name = 'theme_caixa/backcolor';
    $title = get_string('backcolor', 'theme_caixa');
    $description = get_string('backcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#FFF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main region background color.
    $name = 'theme_caixa/regionmaincolor';
    $title = get_string('regionmaincolor', 'theme_caixa');
    $description = get_string('regionmaincolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#FFF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Link color.
    $name = 'theme_caixa/linkcolor';
    $title = get_string('linkcolor', 'theme_caixa');
    $description = get_string('linkcolordesc', 'theme_caixa');
    $default = '#009688';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $temp->add($setting);

    // Link hover color.
    $name = 'theme_caixa/linkhover';
    $title = get_string('linkhover', 'theme_caixa');
    $description = get_string('linkhoverdesc', 'theme_caixa');
    $default = '#009688';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Selection text color.
    $name = 'theme_caixa/selectiontext';
    $title = get_string('selectiontext', 'theme_caixa');
    $description = get_string('selectiontextdesc', 'theme_caixa');
    $default = '#000000';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Selection background color.
    $name = 'theme_caixa/selectionbackground';
    $title = get_string('selectionbackground', 'theme_caixa');
    $description = get_string('selectionbackgrounddesc', 'theme_caixa');
    $default = '#eeff41';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Header colors heading.
    $name = 'theme_caixa/settingsheadercolors';
    $heading = get_string('settingsheadercolors', 'theme_caixa');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Loading bar color.
    $name = 'theme_caixa/loadingcolor';
    $title = get_string('loadingcolor', 'theme_caixa');
    $description = get_string('loadingcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#f44336', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Top header message badge background color.
    $name = 'theme_caixa/msgbadgecolor';
    $title = get_string('msgbadgecolor', 'theme_caixa');
    $description = get_string('msgbadgecolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#E53935', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Top header background color.
    $name = 'theme_caixa/headerbkcolor';
    $title = get_string('headerbkcolor', 'theme_caixa');
    $description = get_string('headerbkcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#00796B', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Top header text color.
    $name = 'theme_caixa/headertextcolor';
    $title = get_string('headertextcolor', 'theme_caixa');
    $description = get_string('headertextcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Bottom header background color.
    $name = 'theme_caixa/headerbkcolor2';
    $title = get_string('headerbkcolor2', 'theme_caixa');
    $description = get_string('headerbkcolor2desc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#009688', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Bottom header text color.
    $name = 'theme_caixa/headertextcolor2';
    $title = get_string('headertextcolor2', 'theme_caixa');
    $description = get_string('headertextcolor2desc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Loading bar color.
    $name = 'theme_caixa/loadingcolor';
    $title = get_string('loadingcolor', 'theme_caixa');
    $description = get_string('loadingcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#4db6ac', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Menu colors heading.
    $name = 'theme_caixa/settingsmenucolors';
    $heading = get_string('settingsmenucolors', 'theme_caixa');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Main menu background color.
    $name = 'theme_caixa/menubkcolor';
    $title = get_string('menubkcolor', 'theme_caixa');
    $description = get_string('menubkcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main menu text color.
    $name = 'theme_caixa/menufontcolor';
    $title = get_string('menufontcolor', 'theme_caixa');
    $description = get_string('menufontcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#444444', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main menu hover color.
    $name = 'theme_caixa/menuhovercolor';
    $title = get_string('menuhovercolor', 'theme_caixa');
    $description = get_string('menuhovercolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#b2dfdb', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main menu bottom border color.
    $name = 'theme_caixa/menubordercolor';
    $title = get_string('menubordercolor', 'theme_caixa');
    $description = get_string('menubordercolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#80cbc4', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Mobile Menu colors heading.
    $name = 'theme_caixa/settingsmobilemenucolors';
    $heading = get_string('settingsmobilemenucolors', 'theme_caixa');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Mobile menu background color.
    $name = 'theme_caixa/mobilemenubkcolor';
    $title = get_string('mobilemenubkcolor', 'theme_caixa');
    $description = get_string('mobilemenubkcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#F9F9F9', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Mobile menu text color.
    $name = 'theme_caixa/mobilemenufontcolor';
    $title = get_string('mobilemenufontcolor', 'theme_caixa');
    $description = get_string('mobilemenufontcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#000000', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Market blocks colors heading.
    $name = 'theme_caixa/settingsmarketingcolors';
    $heading = get_string('settingsmarketingcolors', 'theme_caixa');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Market blocks border color.
    $name = 'theme_caixa/marketblockbordercolor';
    $title = get_string('marketblockbordercolor', 'theme_caixa');
    $description = get_string('marketblockbordercolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#e8eaeb', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Market blocks background color.
    $name = 'theme_caixa/marketblocksbackgroundcolor';
    $title = get_string('marketblocksbackgroundcolor', 'theme_caixa');
    $description = get_string('marketblocksbackgroundcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, 'transparent', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Overlay tiles colors heading.
    $name = 'theme_caixa/settingsoverlaycolors';
    $heading = get_string('settingsoverlaycolors', 'theme_caixa');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    $name = 'theme_caixa/rendereroverlaycolor';
    $title = get_string('rendereroverlaycolor', 'theme_caixa');
    $description = get_string('rendereroverlaycolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#009688', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/rendereroverlayfontcolor';
    $title = get_string('rendereroverlayfontcolor', 'theme_caixa');
    $description = get_string('rendereroverlayfontcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#FFF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/tilesbordercolor';
    $title = get_string('tilesbordercolor', 'theme_caixa');
    $description = get_string('tilesbordercolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#009688', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/covbkcolor';
    $title = get_string('covbkcolor', 'theme_caixa');
    $description = get_string('covbkcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#009688', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/covfontcolor';
    $title = get_string('covfontcolor', 'theme_caixa');
    $description = get_string('covfontcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/dividingline';
    $title = get_string('dividingline', 'theme_caixa');
    $description = get_string('dividinglinedesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/dividingline2';
    $title = get_string('dividingline2', 'theme_caixa');
    $description = get_string('dividingline2desc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Navbar colors heading.
    $name = 'theme_caixa/settingsnavbarcolors';
    $heading = get_string('settingsnavbarcolors', 'theme_caixa');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    $name = 'theme_caixa/navbarborder';
    $title = get_string('navbarborder', 'theme_caixa');
    $description = get_string('navbarborderdesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#B7B3EF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/navbarhover';
    $title = get_string('navbarhover', 'theme_caixa');
    $description = get_string('navbarhoverdesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#3C469C', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Breadcrumb colors heading.
    $name = 'theme_caixa/settingsbreadcrumbcolors';
    $heading = get_string('settingsbreadcrumbcolors', 'theme_caixa');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Breadcrumb background color.
    $name = 'theme_caixa/breadcrumb';
    $title = get_string('breadcrumb', 'theme_caixa');
    $description = get_string('breadcrumbdesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#f5f5f5', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Breadcrumb text color.
    $name = 'theme_caixa/breadcrumbtextcolor';
    $title = get_string('breadcrumbtextcolor', 'theme_caixa');
    $description = get_string('breadcrumbtextcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#444444', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Messages pop-up colors heading.
    $name = 'theme_caixa/settingsmessagescolors';
    $heading = get_string('settingsmessagescolors', 'theme_caixa');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Messages pop-up background color.
    $name = 'theme_caixa/messagepopupbackground';
    $title = get_string('messagepopupbackground', 'theme_caixa');
    $description = get_string('messagepopupbackgrounddesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#fff000', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Messages pop-up text color.
    $name = 'theme_caixa/messagepopupcolor';
    $title = get_string('messagepopupcolor', 'theme_caixa');
    $description = get_string('messagepopupcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#333333', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Footer colors heading.
    $name = 'theme_caixa/settingsfootercolors';
    $heading = get_string('settingsfootercolors', 'theme_caixa');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    $name = 'theme_caixa/footerbkcolor';
    $title = get_string('footerbkcolor', 'theme_caixa');
    $description = get_string('footerbkcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#424242', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/footertextcolor';
    $title = get_string('footertextcolor', 'theme_caixa');
    $description = get_string('footertextcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/footertextcolor2';
    $title = get_string('footertextcolor2', 'theme_caixa');
    $description = get_string('footertextcolor2desc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/footerlinkcolor';
    $title = get_string('footerlinkcolor', 'theme_caixa');
    $description = get_string('footerlinkcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_caixa', $temp);
