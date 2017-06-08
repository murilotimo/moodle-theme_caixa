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


// Frontpage Ticker heading.
$temp = new admin_settingpage('theme_caixa_frontpage_ticker', get_string('frontpagetickersettings', 'theme_caixa'));
$temp->add(new admin_setting_heading('theme_caixa_ticker', get_string('tickersettingsheading', 'theme_caixa'),
    format_text(get_string('tickerdesc', 'theme_caixa'), FORMAT_MARKDOWN)));

$name = 'theme_caixa/enableticker';
$title = get_string('enableticker', 'theme_caixa');
$description = get_string('enabletickerdesc', 'theme_caixa');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$name = 'theme_caixa/enabletickermy';
$title = get_string('enabletickermy', 'theme_caixa');
$description = get_string('enabletickermydesc', 'theme_caixa');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Ticker Width (fullscreen / fixed width).
$name = 'theme_caixa/tickerwidth';
$title = get_string('tickerwidth', 'theme_caixa');
$description = get_string('tickerwidthdesc', 'theme_caixa');
$options = array(
  '' => 'Fixed Width',
  'width: 100%;' => 'Full Screen'
);
$setting = new admin_setting_configselect($name, $title, $description, '', $options);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

  // Number of news ticker sectons.
$name = 'theme_caixa/newstickercount';
$title = get_string('newstickercount', 'theme_caixa');
$description = get_string('newstickercountdesc', 'theme_caixa');
$default = THEME_caixa_DEFAULT_TOOLSMENUSCOUNT;
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices1to12);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// If we don't have a menuscount yet, default to the preset.
$newstickercount = get_config('theme_caixa', 'newstickercount');

if (!$newstickercount) {
    $newstickercount = THEME_caixa_DEFAULT_NEWSTICKERCOUNT;
}

for ($newstickerindex = 1; $newstickerindex <= $newstickercount; $newstickerindex ++) {
    $name = 'theme_caixa/tickertext' . $newstickerindex;
    $title = get_string('tickertext', 'theme_caixa') . ' ' . $newstickerindex;
    $description = get_string('tickertextdesc', 'theme_caixa');
    $default = '';
    $setting = new caixa_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_caixa/tickertext' . $newstickerindex . 'profilefield';
    $title = get_string('tickertextprofilefield', 'theme_caixa');
    $description = get_string('tickertextprofilefielddesc', 'theme_caixa');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);
}

$ADMIN->add('theme_caixa', $temp);
