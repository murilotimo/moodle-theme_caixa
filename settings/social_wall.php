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
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */

 
     // Custom CSS and JS section.
    $temp = new admin_settingpage('theme_adaptable_socialwall', get_string('socialwall', 'theme_adaptable'));
    $temp->add(new admin_setting_heading('theme_adaptable_socialwall', get_string('socialwallheading', 'theme_adaptable'),
        format_text(get_string('socialwalldesc', 'theme_adaptable'), FORMAT_MARKDOWN)));
        
    $ADMIN->add('theme_adaptable', $temp);
        