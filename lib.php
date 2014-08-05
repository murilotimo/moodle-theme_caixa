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
 * Moodle's bcu theme, an example of how to make a Bootstrap theme
 *
 * DO NOT MODIFY THIS THEME!
 * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * @package   theme_bcu
 * @copyright 2013 Moodle, moodle.org
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Parses CSS before it is cached.
 *
 * This function can make alterations and replace patterns within the CSS.
 *
 * @param string $css The CSS
 * @param theme_config $theme The theme config object.
 * @return string The parsed CSS The parsed CSS.
 */
function theme_bcu_process_css($css, $theme) {

    // Set the font size
    if (!empty($theme->settings->fsize)) {
        $fsize = $theme->settings->fsize;
    } else {
        $fsize = null;
    }
    $css = theme_bcu_set_fsize($css, $fsize);
	
    // Set the link color
    if (!empty($theme->settings->linkcolor)) {
        $linkcolor = $theme->settings->linkcolor;
    } else {
        $linkcolor = null;
    }
    $css = theme_bcu_set_linkcolor($css, $linkcolor);

	// Set the link hover color
    if (!empty($theme->settings->linkhover)) {
        $linkhover = $theme->settings->linkhover;
    } else {
        $linkhover = null;
    }
    $css = theme_bcu_set_linkhover($css, $linkhover);
    
    // Set the main color
    if (!empty($theme->settings->maincolor)) {
        $maincolor = $theme->settings->maincolor;
    } else {
        $maincolor = null;
    }
    $css = theme_bcu_set_maincolor($css, $maincolor);

   // Set the main headings color
    if (!empty($theme->settings->backcolor)) {
        $backcolor = $theme->settings->backcolor;
    } else {
        $backcolor = null;
    }
    $css = theme_bcu_set_backcolor($css, $backcolor);
    

    // Set custom CSS.
    if (!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    } else {
        $customcss = null;
    }
    $css = theme_bcu_set_customcss($css, $customcss);
	
    return $css;
}


/**
 * Adds any custom CSS to the CSS before it is cached.
 *
 * @param string $css The original CSS.
 * @param string $customcss The custom CSS to add.
 * @return string The CSS which now contains our custom CSS.
 */
function theme_bcu_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $replacement = $customcss;
    if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_bcu_set_fsize($css, $fsize) {
    $tag = '[[setting:fsize]]';
    $replacement = $fsize;
    if (is_null($replacement)) {
        $replacement = '90';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
 
function theme_bcu_set_linkcolor($css, $linkcolor) {
    $tag = '[[setting:linkcolor]]';
    $replacement = $linkcolor;
    if (is_null($replacement)) {
        $replacement = '#326B8B';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_bcu_set_linkhover($css, $linkhover) {
    $tag = '[[setting:linkhover]]';
    $replacement = $linkhover;
    if (is_null($replacement)) {
        $replacement = '#326B8B';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_bcu_set_maincolor($css, $maincolor) {
    $tag = '[[setting:maincolor]]';
    $replacement = $maincolor;
    if (is_null($replacement)) {
        $replacement = '#001e3c';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_bcu_set_backcolor($css, $backcolor) {
    $tag = '[[setting:backcolor]]';
    $replacement = $backcolor;
    if (is_null($replacement)) {
        $replacement = '#F1EEE7';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Deprecated: Please call theme_bcu_process_css instead.
 * @deprecated since 2.5.1
 */
function bcu_process_css($css, $theme) {
    debugging('Please call theme_'.__FUNCTION__.' instead of '.__FUNCTION__, DEBUG_DEVELOPER);
    return theme_bcu_process_css($css, $theme);
}

/**
 * Deprecated: Please call theme_bcu_set_customcss instead.
 * @deprecated since 2.5.1
 */
function bcu_set_customcss($css, $customcss) {
    debugging('Please call theme_'.__FUNCTION__.' instead of '.__FUNCTION__, DEBUG_DEVELOPER);
    return theme_bcu_set_customcss($css, $customcss);
}



function theme_bcu_initialise_zoom(moodle_page $page) {
    user_preference_allow_ajax_update('theme_bcu_zoom', PARAM_TEXT);
    $page->requires->yui_module('moodle-theme_bcu-zoom', 'M.theme_bcu.zoom.init', array());
}

/**
 * Get the user preference for the zoom function.
 */
function theme_bcu_get_zoom() {
    return get_user_preferences('theme_bcu_zoom', '');
}

//full width funcs

function theme_bcu_initialise_full(moodle_page $page) {
    user_preference_allow_ajax_update('theme_bcu_full', PARAM_TEXT);
    $page->requires->yui_module('moodle-theme_bcu-full', 'M.theme_bcu.full.init', array());
}

/**
 * Get the user preference for the zoom function.
 */
function theme_bcu_get_full() {
    return get_user_preferences('theme_bcu_full', '');
}