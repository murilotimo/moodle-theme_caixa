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


// Frontpage Slider.
$temp = new admin_settingpage('theme_caixa_frontpage_slider', get_string('frontpageslidersettings', 'theme_caixa'));

$temp->add(new admin_setting_heading('theme_caixa_slideshow', get_string('slideshowsettingsheading', 'theme_caixa'),
    format_text(get_string('slideshowdesc', 'theme_caixa') .
        get_string('slideroption2snippet', 'theme_caixa'), FORMAT_MARKDOWN)));

$name = 'theme_caixa/sliderenabled';
$title = get_string('sliderenabled', 'theme_caixa');
$description = get_string('sliderenableddesc', 'theme_caixa');
$setting = new admin_setting_configcheckbox($name, $title, $description, 0);
$temp->add($setting);

$name = 'theme_caixa/sliderfullscreen';
$title = get_string('sliderfullscreen', 'theme_caixa');
$description = get_string('sliderfullscreendesc', 'theme_caixa');
$setting = new admin_setting_configcheckbox($name, $title, $description, 0);
$temp->add($setting);

$name = 'theme_caixa/slidermargintop';
$title = get_string('slidermargintop', 'theme_caixa');
$description = get_string('slidermargintopdesc', 'theme_caixa');
$radchoices = $from0to20px;
$setting = new admin_setting_configselect($name, $title, $description, '20px', $radchoices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$name = 'theme_caixa/slidermarginbottom';
$title = get_string('slidermarginbottom', 'theme_caixa');
$description = get_string('slidermarginbottomdesc', 'theme_caixa');
$radchoices = $from0to20px;
$setting = new admin_setting_configselect($name, $title, $description, '20px', $radchoices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$name = 'theme_caixa/slideroption2';
$title = get_string('slideroption2', 'theme_caixa');
$description = get_string('slideroption2desc', 'theme_caixa');
$radchoices = $sliderstyles;
$setting = new admin_setting_configselect($name, $title, $description, 'nocaptions', $radchoices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

if (!isset($PAGE->theme->settings->slideroption2)) {
    $PAGE->theme->settings->slideroption2 = 'slider1';
}

if ($PAGE->theme->settings->slideroption2 == 'slider1') {
    $name = 'theme_caixa/sliderh3color';
    $title = get_string('sliderh3color', 'theme_caixa');
    $description = get_string('sliderh3colordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/sliderh4color';
    $title = get_string('sliderh4color', 'theme_caixa');
    $description = get_string('sliderh4colordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/slidersubmitcolor';
    $title = get_string('slidersubmitcolor', 'theme_caixa');
    $description = get_string('slidersubmitcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/slidersubmitbgcolor';
    $title = get_string('slidersubmitbgcolor', 'theme_caixa');
    $description = get_string('slidersubmitbgcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#009688', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
}

if ($PAGE->theme->settings->slideroption2 == 'slider2') {
    $name = 'theme_caixa/slider2h3color';
    $title = get_string('slider2h3color', 'theme_caixa');
    $description = get_string('slider2h3colordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/slider2h3bgcolor';
    $title = get_string('slider2h3bgcolor', 'theme_caixa');
    $description = get_string('slider2h3bgcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#000000', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/slider2h4color';
    $title = get_string('slider2h4color', 'theme_caixa');
    $description = get_string('slider2h4colordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#000000', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/slider2h4bgcolor';
    $title = get_string('slider2h4bgcolor', 'theme_caixa');
    $description = get_string('slider2h4bgcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/slideroption2submitcolor';
    $title = get_string('slideroption2submitcolor', 'theme_caixa');
    $description = get_string('slideroption2submitcolordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/slideroption2color';
    $title = get_string('slideroption2color', 'theme_caixa');
    $description = get_string('slideroption2colordesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#009688', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/slideroption2a';
    $title = get_string('slideroption2a', 'theme_caixa');
    $description = get_string('slideroption2adesc', 'theme_caixa');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#009688', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
}

// Number of Sliders.
$name = 'theme_caixa/slidercount';
$title = get_string('slidercount', 'theme_caixa');
$description = get_string('slidercountdesc', 'theme_caixa');
$default = THEME_caixa_DEFAULT_SLIDERCOUNT;
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices1to12);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// If we don't have an slide yet, default to the preset.
$slidercount = get_config('theme_caixa', 'slidercount');

if (!$slidercount) {
    $slidercount = THEME_caixa_DEFAULT_SLIDERCOUNT;
}

for ($sliderindex = 1; $sliderindex <= $slidercount; $sliderindex++) {
    $fileid = 'p' . $sliderindex;
    $name = 'theme_caixa/p' . $sliderindex;
    $title = get_string('sliderimage', 'theme_caixa');
    $description = get_string('sliderimagedesc', 'theme_caixa');
    $setting = new admin_setting_configstoredfile($name, $title, $description, $fileid);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_caixa/p' . $sliderindex . 'url';
    $title = get_string('sliderurl', 'theme_caixa');
    $description = get_string('sliderurldesc', 'theme_caixa');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_caixa/p' . $sliderindex . 'cap';
    $title = get_string('slidercaption', 'theme_caixa');
    $description = get_string('slidercaptiondesc', 'theme_caixa');
    $default = '';
    $setting = new caixa_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);
}

$ADMIN->add('theme_caixa', $temp);
