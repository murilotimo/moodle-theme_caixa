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


    // Buttons Section.
    $temp = new admin_settingpage('theme_caixa_buttons', get_string('buttonsettings', 'theme_caixa'));
    $temp->add(new admin_setting_heading('theme_caixa_header', get_string('buttonsettingsheading', 'theme_caixa'),
    format_text(get_string('buttondesc', 'theme_caixa'), FORMAT_MARKDOWN)));

    $name = 'theme_caixa/buttonradius';
    $title = get_string('buttonradius', 'theme_caixa');
    $description = get_string('buttonradiusdesc', 'theme_caixa');
    $radchoices = $from0to6px;
    $setting = new admin_setting_configselect($name, $title, $description, '5px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Buttons background color.
    $name = 'theme_caixa/buttoncolor';
    $title = get_string('buttoncolor', 'theme_caixa');
    $description = get_string('buttoncolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#009688', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Buttons background hover color.
    $name = 'theme_caixa/buttonhovercolor';
    $title = get_string('buttonhovercolor', 'theme_caixa');
    $description = get_string('buttonhovercolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#00695c', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Buttons text color.
    $name = 'theme_caixa/buttontextcolor';
    $title = get_string('buttontextcolor', 'theme_caixa');
    $description = get_string('buttontextcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/editonbk';
    $title = get_string('editonbk', 'theme_caixa');
    $description = get_string('editonbkdesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#4caf50', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/editoffbk';
    $title = get_string('editoffbk', 'theme_caixa');
    $description = get_string('editoffbkdesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#f44336', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/editfont';
    $title = get_string('editfont', 'theme_caixa');
    $description = get_string('editfontdesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/editverticalpadding';
    $title = get_string('editverticalpadding', 'theme_caixa');
    $description = get_string('editverticalpadding', 'theme_caixa');
    $radchoices = $from0to6px;
    $setting = new admin_setting_configselect($name, $title, $description, '4px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/edithorizontalpadding';
    $title = get_string('edithorizontalpadding', 'theme_caixa');
    $description = get_string('edithorizontalpadding', 'theme_caixa');
    $radchoices = $from0to6px;
    $setting = new admin_setting_configselect($name, $title, $description, '6px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/edittopmargin';
    $title = get_string('edittopmargin', 'theme_caixa');
    $description = get_string('edittopmargin', 'theme_caixa');
    $radchoices = $from0to8px;
    $setting = new admin_setting_configselect($name, $title, $description, '1px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/buttonlogincolor';
    $title = get_string('buttonlogincolor', 'theme_caixa');
    $description = get_string('buttonlogincolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ef5350', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/buttonloginhovercolor';
    $title = get_string('buttonloginhovercolor', 'theme_caixa');
    $description = get_string('buttonloginhovercolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#e53935', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/buttonlogintextcolor';
    $title = get_string('buttonlogintextcolor', 'theme_caixa');
    $description = get_string('buttonlogintextcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#FFFFFF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/buttonloginpadding';
    $title = get_string('buttonloginpadding', 'theme_caixa');
    $description = get_string('buttonloginpaddingdesc', 'theme_caixa');
    $radchoices = $from0to8px;
    $setting = new admin_setting_configselect($name, $title, $description, '0px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/buttonloginheight';
    $title = get_string('buttonloginheight', 'theme_caixa');
    $description = get_string('buttonloginheightdesc', 'theme_caixa');
    $radchoices = array(
        '16px' => "16px",
        '18px' => "18px",
        '20px' => "20px",
        '22px' => "22px",
        '24px' => "24px",
        '26px' => "26px",
        '28px' => "28px",
        '30px' => "30px",
        '32px' => "32px",
        '34px' => "34px",
    );
    $setting = new admin_setting_configselect($name, $title, $description, '24px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/buttonloginmargintop';
    $title = get_string('buttonloginmargintop', 'theme_caixa');
    $description = get_string('buttonloginmargintopdesc', 'theme_caixa');
    $radchoices = $from0to12px;
    $setting = new admin_setting_configselect($name, $title, $description, '2px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_caixa', $temp);
