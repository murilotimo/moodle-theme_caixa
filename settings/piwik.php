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
 * @package    theme_adaptable
 * @copyright 2015 Jeremy Hopkins (Coventry University)
 * @copyright 2015 Fernando Acedo (3-bits.com)
 * @copyright 2015 David Bezemer <info@davidbezemer.nl>, www.davidbezemer.nl
 * @copyright 2016 COMETE (Paris Ouest University)
 * @author     David Bezemer <info@davidbezemer.nl>, Bas Brands <bmbrands@gmail.com>, Gavin Henrick <gavin@lts.ie>, COMETE
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */


// Analytics Section.
$temp = new admin_settingpage('theme_adaptable_piwik', get_string('piwiksettings', 'theme_adaptable'));
$temp->add(new admin_setting_heading('theme_adaptable_piwik', get_string('piwiksettingsheading', 'theme_adaptable'),
format_text(get_string('piwiksettingsdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

$name = 'theme_adaptable/piwikenabled';
$title = get_string('piwikenabled', 'theme_adaptable');
$description = get_string('piwikenableddesc', 'theme_adaptable');
$default = false;
$temp->add(new admin_setting_configcheckbox($name, $title, $description, $default, true, false));

$name = 'theme_adaptable/piwiksiteid';
$title = get_string('piwiksiteid', 'theme_adaptable');
$description = get_string('piwiksiteiddesc', 'theme_adaptable');
$default = '1';
$temp->add(new admin_setting_configtext($name, $title, $description, $default));

$name = 'theme_adaptable/piwikimagetrack';
$title = get_string('piwikimagetrack', 'theme_adaptable');
$description = get_string('piwikimagetrackdesc', 'theme_adaptable');
$default = true;
$temp->add(new admin_setting_configcheckbox($name, $title, $description, $default, true, false));

$name = 'theme_adaptable/piwiksiteurl';
$title = get_string('piwiksiteurl', 'theme_adaptable');
$description = get_string('piwiksiteurldesc', 'theme_adaptable');
$default = '';
$temp->add(new admin_setting_configtext($name, $title, $description, $default));

$name = 'theme_adaptable/piwiktrackadmin';
$title = get_string('piwiktrackadmin', 'theme_adaptable');
$description = get_string('piwiktrackadmindesc', 'theme_adaptable');
$default = false;
$temp->add(new admin_setting_configcheckbox($name, $title, $description, $default, true, false));

$ADMIN->add('theme_adaptable', $temp);
