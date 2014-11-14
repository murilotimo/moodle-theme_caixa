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
 * @package    theme
 * @subpackage bcu
 * @copyright  2014 Birmingham City University <michael.grant@bcu.ac.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */

$settings = null;

defined('MOODLE_INTERNAL') || die;
if (is_siteadmin()) {
    
    $ADMIN->add('themes', new admin_category('theme_bcu', 'BCU'));

    $temp = new admin_settingpage('theme_bcu_generic', get_string('customcssjssettings', 'theme_bcu'));
    $temp->add(new admin_setting_heading('theme_bcu_generic', get_string('genericsettingsheading', 'theme_bcu'),
        format_text(get_string('genericsettingsdescription', 'theme_bcu'), FORMAT_MARKDOWN)));
    // Invert Navbar to dark background.
        
    
    // Custom CSS file.
    $name = 'theme_bcu/customcss';
    $title = get_string('customcss', 'theme_bcu');
    $description = get_string('customcssdesc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Section for javascript to be added e.g. Google Analytics.
    $name = 'theme_bcu/jssection';
    $title = get_string('jssection', 'theme_bcu');
    $description = get_string('jssectiondesc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $temp->add($setting);
    
    $ADMIN->add('theme_bcu', $temp);
    
    // footerline setting
    $name = 'theme_bcu/fsize';
    $title = get_string('fsize', 'theme_bcu');
    $description = get_string('fsizedesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $temp->add($setting);
    
    // Slideshow settings page.
    $temp = new admin_settingpage('theme_bcu_slideshow', get_string('slideshowsettings', 'theme_bcu'));
    $temp->add(new admin_setting_heading('theme_bcu_slideshow', get_string('colorheadingsub', 'theme_essential'),
        format_text(get_string('colordesc', 'theme_essential'), FORMAT_MARKDOWN)));
    
    $name = 'theme_bcu/p1';
    $title = get_string('p1', 'theme_bcu');
    $description = get_string('p1desc', 'theme_bcu');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p1');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_bcu/p1url';
    $title = get_string('p1url', 'theme_bcu');
    $description = get_string('p1urldesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);
    
    $name = 'theme_bcu/p1cap';
    $title = get_string('p1cap', 'theme_bcu');
    $description = get_string('p1capdesc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);

    $temp->add($setting);
    
    $name = 'theme_bcu/p2';
    $title = get_string('p2','theme_bcu');
    $description = get_string('p2desc', 'theme_bcu');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p2');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_bcu/p2url';
    $title = get_string('p2url','theme_bcu');
    $description = get_string('p2urldesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);
    
    $name = 'theme_bcu/p2cap';
    $title = get_string('p2cap', 'theme_bcu');
    $description = get_string('p2capdesc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);
    
    $name = 'theme_bcu/p3';
    $title = get_string('p3','theme_bcu');
    $description = get_string('p3desc', 'theme_bcu');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p3');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_bcu/p3url';
    $title = get_string('p3url','theme_bcu');
    $description = get_string('p3urldesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);
    
    $name = 'theme_bcu/p3cap';
    $title = get_string('p3cap', 'theme_bcu');
    $description = get_string('p3capdesc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);
    
    $name = 'theme_bcu/p4';
    $title = get_string('p4','theme_bcu');
    $description = get_string('p4desc', 'theme_bcu');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p4');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_bcu/p4url';
    $title = get_string('p4url','theme_bcu');
    $description = get_string('p4urldesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);
    
    $name = 'theme_bcu/p4cap';
    $title = get_string('p4cap', 'theme_bcu');
    $description = get_string('p4capdesc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);
    
    $name = 'theme_bcu/p5';
    $title = get_string('p5','theme_bcu');
    $description = get_string('p5desc', 'theme_bcu');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p5');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_bcu/p5url';
    $title = get_string('p5url','theme_bcu');
    $description = get_string('p5urldesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);
    
    $name = 'theme_bcu/p5cap';
    $title = get_string('p5cap', 'theme_bcu');
    $description = get_string('p5capdesc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);
    
    $ADMIN->add('theme_bcu', $temp);
    
    $temp = new admin_settingpage('theme_bcu_marketting', get_string('markettingsettings', 'theme_bcu'));
    $temp->add(new admin_setting_heading('theme_bcu_marketting', get_string('colorheadingsub', 'theme_essential'),
        format_text(get_string('colordesc', 'theme_essential'), FORMAT_MARKDOWN)));
    
    //marketing spots
    $name = 'theme_bcu/market1';
    $title = get_string('market1', 'theme_bcu');
    $description = get_string('market1desc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);
    
    $name = 'theme_bcu/market2';
    $title = get_string('market2', 'theme_bcu');
    $description = get_string('market2desc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);
    
    $name = 'theme_bcu/market3';
    $title = get_string('market3', 'theme_bcu');
    $description = get_string('market3desc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);
    
    $name = 'theme_bcu/market4';
    $title = get_string('market4', 'theme_bcu');
    $description = get_string('market4desc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);
    
    $ADMIN->add('theme_bcu', $temp);
    
    $temp = new admin_settingpage('theme_bcu_footer', get_string('footersettings', 'theme_bcu'));
    $temp->add(new admin_setting_heading('theme_bcu_footer', get_string('colorheadingsub', 'theme_essential'),
        format_text(get_string('colordesc', 'theme_essential'), FORMAT_MARKDOWN)));
        
        $name = 'theme_bcu/footer1header';
    $title = get_string('footer1header', 'theme_bcu');
    $description = get_string('footer1desc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);
    
    $name = 'theme_bcu/footer1content';
    $title = get_string('footer1content', 'theme_bcu');
    $description = get_string('footer1contentdesc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);
    
    $name = 'theme_bcu/footer2header';
    $title = get_string('footer2header', 'theme_bcu');
    $description = get_string('footer2desc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);
    
    $name = 'theme_bcu/footer2content';
    $title = get_string('footer2content', 'theme_bcu');
    $description = get_string('footer2contentdesc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);
    
    $name = 'theme_bcu/footer3header';
    $title = get_string('footer3header', 'theme_bcu');
    $description = get_string('footer3desc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);
    
    $name = 'theme_bcu/footer3content';
    $title = get_string('footer3content', 'theme_bcu');
    $description = get_string('footer3contentdesc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);
    
    $name = 'theme_bcu/footer4header';
    $title = get_string('footer4header', 'theme_bcu');
    $description = get_string('footer4desc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);
    
    $name = 'theme_bcu/footer4content';
    $title = get_string('footer4content', 'theme_bcu');
    $description = get_string('footer4contentdesc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);
    
    $ADMIN->add('theme_bcu', $temp);
    
    $temp = new admin_settingpage('theme_bcu_navbar', get_string('navbarsettings', 'theme_bcu'));
    $temp->add(new admin_setting_heading('theme_bcu_navbar', get_string('colorheadingsub', 'theme_essential'),
        format_text(get_string('colordesc', 'theme_essential'), FORMAT_MARKDOWN)));
        
    // Enable My.
    $name = 'theme_bcu/enablemy';
    $title = get_string('enablemy', 'theme_bcu');
    $description = get_string('enablemydesc', 'theme_bcu');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable View Profile.
    $name = 'theme_bcu/enableprofile';
    $title = get_string('enableprofile', 'theme_bcu');
    $description = get_string('enableprofiledesc', 'theme_bcu');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Edit Profile.
    $name = 'theme_bcu/enableeditprofile';
    $title = get_string('enableeditprofile', 'theme_bcu');
    $description = get_string('enableeditprofiledesc', 'theme_bcu');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Calendar.
    $name = 'theme_bcu/enablecalendar';
    $title = get_string('enablecalendar', 'theme_bcu');
    $description = get_string('enablecalendardesc', 'theme_bcu');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Private Files.
    $name = 'theme_bcu/enableprivatefiles';
    $title = get_string('enableprivatefiles', 'theme_bcu');
    $description = get_string('enableprivatefilesdesc', 'theme_bcu');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Badges.
    $name = 'theme_bcu/enablebadges';
    $title = get_string('enablebadges', 'theme_bcu');
    $description = get_string('enablebadgesdesc', 'theme_bcu');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Enable help link
    $name = 'theme_bcu/enablehelp';
    $title = get_string('enablehelp', 'theme_bcu');
    $description = get_string('enablehelpdesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);
    
    $ADMIN->add('theme_bcu', $temp);
    
    
    
    
    //logo
    $name = 'theme_bcu/logo';
	$title = get_string('logo','theme_bcu');
	$description = get_string('logodesc', 'theme_bcu');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$temp->add($setting);
    
    
    //info box spots
    $name = 'theme_bcu/alertbox';
    $title = get_string('alertbox','theme_bcu');
    $description = get_string('alertboxdesc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);
    
    //info box spots
    $name = 'theme_bcu/infobox';
    $title = get_string('infobox','theme_bcu');
    $description = get_string('infoboxdesc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);
    
    $name = 'theme_bcu/infobox2';
    $title = get_string('infobox2','theme_bcu');
    $description = get_string('infobox2desc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);
    
    
    
    
    
    // Footer sections editor
    
    
    // End of footer sections
        
    // link color setting
	$name = 'theme_bcu/linkcolor';
	$title = get_string('linkcolor','theme_bcu');
	$description = get_string('linkcolordesc', 'theme_bcu');
	$default = '#001E3C';
	$previewconfig = NULL;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$temp->add($setting);

	// link hover color setting
	$name = 'theme_bcu/linkhover';
	$title = get_string('linkhover','theme_bcu');
	$description = get_string('linkhoverdesc', 'theme_bcu');
	$default = '#001E3C';
	$previewconfig = NULL;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$temp->add($setting);

	// main color setting
	$name = 'theme_bcu/maincolor';
	$title = get_string('maincolor','theme_bcu');
	$description = get_string('maincolordesc', 'theme_bcu');
	$default = '#001e3c';
	$previewconfig = NULL;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$temp->add($setting);
	
	// heading color setting
	$name = 'theme_bcu/backcolor';
	$title = get_string('backcolor','theme_bcu');
	$description = get_string('backcolordesc', 'theme_bcu');
	$default = '#F1EEE7';
	$previewconfig = NULL;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$temp->add($setting);

	// Foot note setting
	// footerline setting
    $name = 'theme_bcu/footnote';
    $title = get_string('footnote', 'theme_bcu');
    $description = get_string('footnotedesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $temp->add($setting);
}
