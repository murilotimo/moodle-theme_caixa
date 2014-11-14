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

theme_bcu_initialise_zoom($PAGE);
$setzoom = theme_bcu_get_zoom();

theme_bcu_initialise_full($PAGE);
$setfull = theme_bcu_get_full();

$left = (!right_to_left());  // To know if to add 'pull-right' and 'desktop-first-column' classes in the layout for LTR.

$hasmiddle = $PAGE->blocks->region_has_content('middle', $OUTPUT);
$hasfootnote = (!empty($PAGE->theme->settings->footnote));
$haslogo = (!empty($PAGE->theme->settings->logo));

// Get the HTML for the settings bits.
$html = theme_bcu_get_html_for_settings($OUTPUT, $PAGE);

if (right_to_left()) {
    $regionbsid = 'region-bs-main-and-post';
} else {
    $regionbsid = 'region-bs-main-and-pre';
}

echo $OUTPUT->doctype();
?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <!-- Global Nav Styles -->
    <link href="//cdn1.bcu.ac.uk/toolbar/v2.0/global-nav.css" rel="stylesheet">
    <!--[if lte IE 8]><link href="https://cdn1.bcu.ac.uk/toolbar/v2.0/global-nav-ie8.css" rel="stylesheet"><![endif]-->
    <!--[if lte IE 7]><link href="https://cdn1.bcu.ac.uk/toolbar/v2.0/global-nav-ie7.css" rel="stylesheet"><![endif]-->
    <!-- Global Nav Scripts -->
    <!--[if lte IE 7]><script src="https://cdn1.bcu.ac.uk/toolbar/v2.0/json2.js"></script><![endif]-->
    <link href="//cdn1.bcu.ac.uk/style-guide/toolkit/v1.1/css/bcu-icon-font.css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
</head>

<body <?php echo $OUTPUT->body_attributes(array('two-column', $setzoom)); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>
<div id="page" class="container-fluid <?php echo "$setfull"; ?>">
    
<?php if (core\session\manager::is_loggedinas()) { ?>
<div class="customalert">
<div class="container">
<?php echo $OUTPUT->login_info(); ?>
</div>
</div>

<?php } else if (!empty($PAGE->theme->settings->alertbox)) { ?>
<div class="customalert">
<div class="container">
<?php echo $PAGE->theme->settings->alertbox; ?>
</div>
</div>
<?php } ?>

<div id="page-header-wrapper">

<div id="above-header">
    <div class="clearfix container userhead">
        <div class="global-toolbar" id="bcutoolbar"></div>    
    </div>
</div>

    <header id="page-header" class="clearfix container">
    <?php if ($haslogo) {
                        echo "<img src='".$PAGE->theme->settings->logo."' alt='logo' id='logo' />";
                    } else { ?>
            <a href="<?php p($CFG->wwwroot) ?>"><img src="<?php echo $OUTPUT->pix_url('2xlogo', 'theme')?>" id="logo"></a>
            <?php } ?>
     
   
     
     <div id="coursetitle" class="pull-left">
     <span title='<?php echo $PAGE->heading ?>'><?php echo $PAGE->heading ?></span>
     </div>
     
        <div class="searchbox">
            <form action="<?php p($CFG->wwwroot) ?>/course/search.php">
                <label class="hidden" for="search-1" style="display: none;">Search iCity</label>
                <div class="search-box grey-box bg-white clear-fix">
                    <input placeholder="Search courses" accesskey="6" class="search_tour bg-white no-border left search-box__input ui-autocomplete-input" type="text" name="search" id="search-1" autocomplete="off">
                    <button type="submit" class="no-border bg-white pas search-box__button"><abbr class="fa fa-search"></abbr></button>
                </div>
            </form>
        </div>
                  
        <div id="course-header">
            <?php echo $OUTPUT->course_header(); ?>
        </div>
    </header>
</div>    

<div id="navwrap">
    <div class="container">
        <div class="navbar">
            <nav role="navigation" class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse ">
                        <?php echo $OUTPUT->custom_menu(); ?>
                        <ul class="nav pull-right">
                            <li class="hbl"><a href="#" class="moodlezoom"><i class="fa fa-toggle-down"></i> hide blocks</a></li>
                            <li class="sbl"><a href="#" class="moodlezoom"><i class="fa fa-toggle-up"></i> show blocks</a></li>
                            
                            <li class="hbll"><a href="#" class="moodlewidth"><i class="fa fa-square-o"></i> full screen</a></li>
                            <li class="sbll"><a href="#" class="moodlewidth"><i class="fa fa-minus-square-o"></i> standard view</a></li>
                        </ul>
                        <div class="pull-right breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>