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


    // Fonts Section.
    $temp = new admin_settingpage('theme_caixa_font', get_string('fontsettings', 'theme_caixa'));
    $temp->add(new admin_setting_heading('theme_caixa_font', get_string('fontsettingsheading', 'theme_caixa'),
                   format_text(get_string('fontdesc', 'theme_caixa'), FORMAT_MARKDOWN)));

    // Fonts heading.
    $name = 'theme_caixa/settingsfonts';
    $heading = get_string('settingsfonts', 'theme_caixa');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Main Font Name.
    $name = 'theme_caixa/fontname';
    $title = get_string('fontname', 'theme_caixa');
    $description = get_string('fontnamedesc', 'theme_caixa');
    $default = 'Open Sans';
    $choices = $fontlist;
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main Font Subset.
    $name = 'theme_caixa/fontsubset';
    $title = get_string('fontsubset', 'theme_caixa');
    $description = get_string('fontsubsetdesc', 'theme_caixa');
    $default = '';
    $setting = new admin_setting_configmulticheckbox($name, $title, $description, $default, array(
        'latin-ext' => "latin-ext",
        'cyrillic' => "cyrillic",
        'cyrillic-ext' => "cyrillic-ext",
        'greek' => "greek",
        'greek-ext' => "greek-ext",
        'vietnamese' => "vietnamese",
    ));
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main Font size.
    $name = 'theme_caixa/fontsize';
    $title = get_string('fontsize', 'theme_caixa');
    $description = get_string('fontsizedesc', 'theme_caixa');
    $setting = new admin_setting_configselect($name, $title, $description, '95%', $from85to110percent);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main Font weight.
    $name = 'theme_caixa/fontweight';
    $title = get_string('fontweight', 'theme_caixa');
    $description = get_string('fontweightdesc', 'theme_caixa');
    $setting = new admin_setting_configselect($name, $title, $description, 400, $from100to900);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main Font color.
    $name = 'theme_caixa/fontcolor';
    $title = get_string('fontcolor', 'theme_caixa');
    $description = get_string('fontcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#333333', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Top Menu Font Size.
    $name = 'theme_caixa/topmenufontsize';
    $title = get_string('topmenufontsize', 'theme_caixa');
    $description = get_string('topmenufontsizedesc', 'theme_caixa');
    $radchoices = $standardfontsize;
    $setting = new admin_setting_configselect($name, $title, $description, '14px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Navber Menu Font Size.
    $name = 'theme_caixa/menufontsize';
    $title = get_string('menufontsize', 'theme_caixa');
    $description = get_string('menufontsizedesc', 'theme_caixa');
    $radchoices = $standardfontsize;
    $setting = new admin_setting_configselect($name, $title, $description, '14px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Navbar Menu Padding.
    $name = 'theme_caixa/menufontpadding';
    $title = get_string('menufontpadding', 'theme_caixa');
    $description = get_string('menufontpaddingdesc', 'theme_caixa');
    $radchoices = $from10to30px;
    $setting = new admin_setting_configselect($name, $title, $description, '20px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Header Font Name.
    $name = 'theme_caixa/fontheadername';
    $title = get_string('fontheadername', 'theme_caixa');
    $description = get_string('fontheadernamedesc', 'theme_caixa');
    $default = 'Roboto Slab';
    $choices = $fontlist;
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $temp->add($setting);

    // Header Font weight.
    $name = 'theme_caixa/fontheaderweight';
    $title = get_string('fontheaderweight', 'theme_caixa');
    $description = get_string('fontheaderweightdesc', 'theme_caixa');
    $setting = new admin_setting_configselect($name, $title, $description, 400, $from100to900);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Header font color.
    $name = 'theme_caixa/fontheadercolor';
    $title = get_string('fontheadercolor', 'theme_caixa');
    $description = get_string('fontheadercolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#333333', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Title Font Name.
    $name = 'theme_caixa/fonttitlename';
    $title = get_string('fonttitlename', 'theme_caixa');
    $description = get_string('fonttitlenamedesc', 'theme_caixa');
    $default = 'Audiowide';
    $choices = $fontlist;
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Title Font size.
    $name = 'theme_caixa/fonttitlesize';
    $title = get_string('fonttitlesize', 'theme_caixa');
    $description = get_string('fonttitlesizedesc', 'theme_caixa');
    $default = '48px';
    $choices = $standardfontsize;
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Title Font weight.
    $name = 'theme_caixa/fonttitleweight';
    $title = get_string('fonttitleweight', 'theme_caixa');
    $description = get_string('fonttitleweightdesc', 'theme_caixa');
    $setting = new admin_setting_configselect($name, $title, $description, 400, $from100to900);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Title font color.
    $name = 'theme_caixa/fonttitlecolor';
    $title = get_string('fonttitlecolor', 'theme_caixa');
    $description = get_string('fonttitlecolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Course Title Font Name.
    $name = 'theme_caixa/fonttitlenamecourse';
    $title = get_string('fonttitlenamecourse', 'theme_caixa');
    $description = get_string('fonttitlenamecoursedesc', 'theme_caixa');
    $default = 'Audiowide';
    $choices = $fontlist;
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Course Title Font size.
    $name = 'theme_caixa/fonttitlesizecourse';
    $title = get_string('fonttitlesizecourse', 'theme_caixa');
    $description = get_string('fonttitlesizecoursedesc', 'theme_caixa');
    $default = '48px';
    $choices = $standardfontsize;
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Course Font weight.
    $name = 'theme_caixa/fonttitleweightcourse';
    $title = get_string('fonttitleweightcourse', 'theme_caixa');
    $description = get_string('fonttitleweightcoursedesc', 'theme_caixa');
    $setting = new admin_setting_configselect($name, $title, $description, 400, $from100to900);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Course font color.
    $name = 'theme_caixa/fonttitlecolorcourse';
    $title = get_string('fonttitlecolorcourse', 'theme_caixa');
    $description = get_string('fonttitlecolorcoursedesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);



    // Block Header Font size.
    $name = 'theme_caixa/fontblockheadersize';
    $title = get_string('fontblockheadersize', 'theme_caixa');
    $description = get_string('fontblockheadersizedesc', 'theme_caixa');
    $default = '28px';
    $choices = $standardfontsize;
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Block Header Font weight.
    $name = 'theme_caixa/fontblockheaderweight';
    $title = get_string('fontblockheaderweight', 'theme_caixa');
    $description = get_string('fontblockheaderweightdesc', 'theme_caixa');
    $setting = new admin_setting_configselect($name, $title, $description, 400, $from100to900);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Block Header Font color.
    $name = 'theme_caixa/fontblockheadercolor';
    $title = get_string('fontblockheadercolor', 'theme_caixa');
    $description = get_string('fontblockheadercolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#009688', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    $ADMIN->add('theme_caixa', $temp);
