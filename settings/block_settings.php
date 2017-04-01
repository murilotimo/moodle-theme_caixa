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


    $temp = new admin_settingpage('theme_caixa_blocks', get_string('blocksettings', 'theme_caixa'));

    $name = 'theme_caixa/blockicons';
    $title = get_string('blockicons', 'theme_caixa');
    $description = get_string('blockiconsdesc', 'theme_caixa');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/blockbackgroundcolor';
    $title = get_string('blockbackgroundcolor', 'theme_caixa');
    $description = get_string('blockbackgroundcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#FFFFFF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/blockheaderbackgroundcolor';
    $title = get_string('blockheaderbackgroundcolor', 'theme_caixa');
    $description = get_string('blockheaderbackgroundcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#FFFFFF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/blockbordercolor';
    $title = get_string('blockbordercolor', 'theme_caixa');
    $description = get_string('blockbordercolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#59585D', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/blocklinkcolor';
    $title = get_string('blocklinkcolor', 'theme_caixa');
    $description = get_string('blocklinkcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#009688', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/blocklinkhovercolor';
    $title = get_string('blocklinkhovercolor', 'theme_caixa');
    $description = get_string('blocklinkhovercolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#009688', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/blockregionbackgroundcolor';
    $title = get_string('blockregionbackground', 'theme_caixa');
    $description = get_string('blockregionbackgrounddesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, 'transparent', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/blockheaderbordertopstyle';
    $title = get_string('blockheaderbordertopstyle', 'theme_caixa');
    $description = get_string('blockheaderbordertopstyledesc', 'theme_caixa');
    $radchoices = $borderstyles;
    $setting = new admin_setting_configselect($name, $title, $description, 'dashed', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/blockheadertopradius';
    $title = get_string('blockheadertopradius', 'theme_caixa');
    $description = get_string('blockheadertopradiusdesc', 'theme_caixa');
    $radchoices = $from0to20px;
    $setting = new admin_setting_configselect($name, $title, $description, '0px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/blockheaderbottomradius';
    $title = get_string('blockheaderbottomradius', 'theme_caixa');
    $description = get_string('blockheaderbottomradiusdesc', 'theme_caixa');
    $radchoices = $from0to20px;
    $setting = new admin_setting_configselect($name, $title, $description, '0px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/blockheaderbordertop';
    $title = get_string('blockheaderbordertop', 'theme_caixa');
    $description = get_string('blockheaderbordertopdesc', 'theme_caixa');
    $radchoices = $from0to6px;
    $setting = new admin_setting_configselect($name, $title, $description, '1px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/blockheaderborderleft';
    $title = get_string('blockheaderborderleft', 'theme_caixa');
    $description = get_string('blockheaderborderleftdesc', 'theme_caixa');
    $radchoices = $from0to6px;
    $setting = new admin_setting_configselect($name, $title, $description, '0px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/blockheaderborderright';
    $title = get_string('blockheaderborderright', 'theme_caixa');
    $description = get_string('blockheaderborderrightdesc', 'theme_caixa');
    $radchoices = $from0to6px;
    $setting = new admin_setting_configselect($name, $title, $description, '0px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/blockheaderborderbottom';
    $title = get_string('blockheaderborderbottom', 'theme_caixa');
    $description = get_string('blockheaderborderbottomdesc', 'theme_caixa');
    $radchoices = $from0to6px;
    $setting = new admin_setting_configselect($name, $title, $description, '0px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/blockmainbordertopstyle';
    $title = get_string('blockmainbordertopstyle', 'theme_caixa');
    $description = get_string('blockmainbordertopstyledesc', 'theme_caixa');
    $radchoices = $borderstyles;
    $setting = new admin_setting_configselect($name, $title, $description, 'none', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/blockmaintopradius';
    $title = get_string('blockmaintopradius', 'theme_caixa');
    $description = get_string('blockmaintopradiusdesc', 'theme_caixa');
    $radchoices = $from0to20px;
    $setting = new admin_setting_configselect($name, $title, $description, '0px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/blockmainbottomradius';
    $title = get_string('blockmainbottomradius', 'theme_caixa');
    $description = get_string('blockmainbottomradiusdesc', 'theme_caixa');
    $radchoices = $from0to20px;
    $setting = new admin_setting_configselect($name, $title, $description, '0px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/blockmainbordertop';
    $title = get_string('blockmainbordertop', 'theme_caixa');
    $description = get_string('blockmainbordertopdesc', 'theme_caixa');
    $radchoices = $from0to6px;
    $setting = new admin_setting_configselect($name, $title, $description, '0px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/blockmainborderleft';
    $title = get_string('blockmainborderleft', 'theme_caixa');
    $description = get_string('blockmainborderleftdesc', 'theme_caixa');
    $radchoices = $from0to6px;
    $setting = new admin_setting_configselect($name, $title, $description, '0px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/blockmainborderright';
    $title = get_string('blockmainborderright', 'theme_caixa');
    $description = get_string('blockmainborderrightdesc', 'theme_caixa');
    $radchoices = $from0to6px;
    $setting = new admin_setting_configselect($name, $title, $description, '0px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/blockmainborderbottom';
    $title = get_string('blockmainborderbottom', 'theme_caixa');
    $description = get_string('blockmainborderbottomdesc', 'theme_caixa');
    $radchoices = $from0to6px;
    $setting = new admin_setting_configselect($name, $title, $description, '0px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_caixa', $temp);
