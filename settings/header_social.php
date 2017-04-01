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


    // Social links.
    $temp = new admin_settingpage('theme_caixa_social', get_string('socialsettings', 'theme_caixa'));

    $temp->add(new admin_setting_heading('theme_caixa_social', get_string('socialheading', 'theme_caixa'),
    format_text(get_string('socialtitledesc', 'theme_caixa'), FORMAT_MARKDOWN)));

    $name = 'theme_caixa/socialsize';
    $title = get_string('socialsize', 'theme_caixa');
    $description = get_string('socialsize', 'theme_caixa');
    $setting = new admin_setting_configselect($name, $title, $description, '32px', $from14to42px);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/socialsizemobile';
    $title = get_string('socialsizemobile', 'theme_caixa');
    $description = get_string('socialsizemobile', 'theme_caixa');
    $setting = new admin_setting_configselect($name, $title, $description, '22px', $from14to42px);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/socialpaddingtop';
    $title = get_string('socialpaddingtop', 'theme_caixa');
    $description = get_string('socialpaddingtop', 'theme_caixa');
    $setting = new admin_setting_configselect($name, $title, $description, '1.8%', $from0to2point5percent);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/socialtarget';
    $title = get_string('socialtarget', 'theme_caixa');
    $description = get_string('socialtargetdesc', 'theme_caixa');
    $setting = new admin_setting_configselect($name, $title, $description, '_self', $htmltarget);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/socialiconlist';
    $title = get_string('socialiconlist', 'theme_caixa');
    $default = '';
    $description = get_string('socialiconlistdesc', 'theme_caixa');
    $setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '50', '10');
    $temp->add($setting);

    $ADMIN->add('theme_caixa', $temp);
