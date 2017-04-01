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
 * @copyright  2015 David Bezemer <info@davidbezemer.nl>, www.davidbezemer.nl
 * @copyright  2016 COMETE (Paris Ouest University)
 * @author     David Bezemer <info@davidbezemer.nl>, Bas Brands <bmbrands@gmail.com>, Gavin Henrick <gavin@lts.ie>, COMETE
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */


// Analytics section.
$temp = new admin_settingpage('theme_caixa_analytics', get_string('analyticssettings', 'theme_caixa'));
$temp->add(new admin_setting_heading('theme_caixa_analytics', get_string('analyticssettingsheading', 'theme_caixa'),
           format_text(get_string('analyticssettingsdesc', 'theme_caixa'), FORMAT_MARKDOWN)));


// Google Analytics Section.
$name = 'theme_caixa/googleanalyticssettings';
$heading = get_string('googleanalyticssettings', 'theme_caixa');
$setting = new admin_setting_heading($name, $heading, '');
$temp->add($setting);

// Enable Google analytics.
$name = 'theme_caixa/enableanalytics';
$title = get_string('enableanalytics', 'theme_caixa');
$description = get_string('enableanalyticsdesc', 'theme_caixa');
$default = false;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Number of Analytics entries.
$name = 'theme_caixa/analyticscount';
$title = get_string('analyticscount', 'theme_caixa');
$description = get_string('analyticscountdesc', 'theme_caixa');
$default = THEME_caixa_DEFAULT_ANALYTICSCOUNT;
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices1to12);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// If we don't have an analyticscount yet, default to the preset.
$analyticscount = get_config('theme_caixa', 'analyticscount');
if (!$analyticscount) {
    $alertcount = THEME_caixa_DEFAULT_ANALYTICSCOUNT;
}

for ($analyticsindex = 1; $analyticsindex <= $analyticscount; $analyticsindex ++) {
    // Alert Text 1.
    $name = 'theme_caixa/analyticstext' . $analyticsindex;
    $title = get_string('analyticstext', 'theme_caixa');
    $description = get_string('analyticstextdesc', 'theme_caixa');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_RAW);
    $temp->add($setting);

    $name = 'theme_caixa/analyticsprofilefield' . $analyticsindex;
    $title = get_string('analyticsprofilefield', 'theme_caixa');
    $description = get_string('analyticsprofilefielddesc', 'theme_caixa');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);
}


// Piwik Analytics Section.
$name = 'theme_caixa/piwiksettings';
$heading = get_string('piwiksettings', 'theme_caixa');
$setting = new admin_setting_heading($name, $heading, '');
$temp->add($setting);


// Enable Piwik analytics.
$name = 'theme_caixa/piwikenabled';
$title = get_string('piwikenabled', 'theme_caixa');
$description = get_string('piwikenableddesc', 'theme_caixa');
$default = false;
$temp->add(new admin_setting_configcheckbox($name, $title, $description, $default, true, false));

// Piwik site ID.
$name = 'theme_caixa/piwiksiteid';
$title = get_string('piwiksiteid', 'theme_caixa');
$description = get_string('piwiksiteiddesc', 'theme_caixa');
$default = '1';
$temp->add(new admin_setting_configtext($name, $title, $description, $default));

// Piwik image track.
$name = 'theme_caixa/piwikimagetrack';
$title = get_string('piwikimagetrack', 'theme_caixa');
$description = get_string('piwikimagetrackdesc', 'theme_caixa');
$default = true;
$temp->add(new admin_setting_configcheckbox($name, $title, $description, $default, true, false));

// Piwik site URL.
$name = 'theme_caixa/piwiksiteurl';
$title = get_string('piwiksiteurl', 'theme_caixa');
$description = get_string('piwiksiteurldesc', 'theme_caixa');
$default = '';
$temp->add(new admin_setting_configtext($name, $title, $description, $default));

// Enable Piwik admins tracking.
$name = 'theme_caixa/piwiktrackadmin';
$title = get_string('piwiktrackadmin', 'theme_caixa');
$description = get_string('piwiktrackadmindesc', 'theme_caixa');
$default = false;
$temp->add(new admin_setting_configcheckbox($name, $title, $description, $default, true, false));


$ADMIN->add('theme_caixa', $temp);
