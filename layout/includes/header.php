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
// Fixed header is determined by the individual layouts.
if(!ISSET($fixedheader)) {
    $fixedheader = false;
}
theme_bcu_initialise_zoom($PAGE);
$setzoom = theme_bcu_get_zoom();

theme_bcu_initialise_full($PAGE);
$setfull = theme_bcu_get_full();

$left = (!right_to_left());  // To know if to add 'pull-right' and 'desktop-first-column' classes in the layout for LTR.

$hasmiddle = $PAGE->blocks->region_has_content('middle', $OUTPUT);
$hasfootnote = (!empty($PAGE->theme->settings->footnote));
$haslogo = (!empty($PAGE->theme->settings->logo));

// Get the fonts.
$fontname = str_replace(" ", "+", $PAGE->theme->settings->fontname);
$fontheadername = str_replace(" ", "+", $PAGE->theme->settings->fontheadername);
$fonttitlename = str_replace(" ", "+", $PAGE->theme->settings->fonttitlename);

// Get the HTML for the settings bits.
$html = theme_bcu_get_html_for_settings($OUTPUT, $PAGE);

if (right_to_left()) {
    $regionbsid = 'region-bs-main-and-post';
} else {
    $regionbsid = 'region-bs-main-and-pre';
}

$showicons = "";
$showicons = $PAGE->theme->settings->blockicons;
if ($showicons == 1) {
	$showiconsclass = "showblockicons";
} else {
	$showiconsclass = " ";
}
//setting for default screen view. does not override user's preference
$defaultview = "";
$defaultview = $PAGE->theme->settings->viewselect;
if ($defaultview == 1 && $setfull == "") {
	$setfull = "fullin";
}

echo $OUTPUT->doctype();
?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <?php if (!empty($fontname)) { ?>
        <link href='http://fonts.googleapis.com/css?family=<?php echo $fontname; ?>' rel='stylesheet' type='text/css'><?php
} ?>

    <?php if (!empty($fontheadername)) { ?>
        <link href='http://fonts.googleapis.com/css?family=<?php echo $fontheadername; ?>' rel='stylesheet' type='text/css'><?php
} ?>

    <?php if (!empty($fonttitlename)) { ?>
        <link href='http://fonts.googleapis.com/css?family=<?php echo $fonttitlename; ?>' rel='stylesheet' type='text/css'><?php
} ?>

    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php echo $OUTPUT->body_attributes(array('two-column', $setzoom)); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>
<div id="page" class="container-fluid <?php echo "$setfull $showiconsclass"; ?>">

<?php if (core\session\manager::is_loggedinas()) { ?>
<div class="customalert">
<div class="container">
<?php echo $OUTPUT->login_info(); ?>
</div>
</div>

<?php
} else if (!empty($PAGE->theme->settings->alertbox)) {
?>
<div class="customalert">
<div class="container">
<?php echo $OUTPUT->get_setting('alertbox', 'format_html');; ?>
</div>
</div>
<?php
}
?>

<header id="page-header-wrapper" <?php if($fixedheader) { ?> style="position: fixed;" <?php } ?>>
    <div id="above-header">
        <div class="clearfix container userhead">
            <div class="pull-left">
                <?php echo $OUTPUT->user_menu(); ?>
            </div>

            <div class="headermenu row">
                <?php if (!isloggedin() || isguestuser()) { ?>
                  <?php echo $OUTPUT->page_heading_menu(); ?>
                    <?php if (!empty($PAGE->theme->settings->frontpagelogin)) { ?>
                        <form action="<?php p($CFG->wwwroot) ?>/login/index.php" method="post">
		                    <input style="height:12px; padding-bottom:4px;" type="text" name="username" placeholder="Username" size="10">
		                    <input style="height:12px; padding-bottom:4px;" type="password" name="password" placeholder="Password"  size="10">                     
		                    <button class="btn-login" type="submit">Login</button>
	                    </form>
                    <?php }	else { ?>                    	
                    	  <div class="loginbutton">
                          	<a class="btn-login" href="<?php p($CFG->wwwroot) ?>/login/index.php">Log in</a>
                      	  </div>
                    <?php } ?>
                  
<?php
} else {
?>
                    <div class="dropdown secondone">
                        <a class="dropdown-toggle usermendrop" data-toggle="dropdown" href="#"><span class="fa fa-user"></span><?php echo fullname($USER) ?> <span class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu usermen" role="menu" aria-labelledby="dLabel">
                            <?php if (!empty($PAGE->theme->settings->enablemy)) { ?>
                                <li><a href="<?php p($CFG->wwwroot) ?>/my" title="<?php echo get_string('myhome') ?>"><i class="fa fa-dashboard"></i><?php echo get_string('myhome') ?></a></li>
                            <?php } ?>
                            <?php if (!empty($PAGE->theme->settings->enableprofile)) { ?>
                                <li><a href="<?php p($CFG->wwwroot) ?>/user/profile.php" title="<?php echo get_string('viewprofile') ?>"><i class="fa fa-user"></i><?php echo get_string('viewprofile') ?></a></li>
                            <?php } ?>
                            <?php if (!empty($PAGE->theme->settings->enableeditprofile)) { ?>
                                <li><a href="<?php p($CFG->wwwroot) ?>/user/edit.php" title="<?php echo get_string('editmyprofile') ?>"><i class="fa fa-cog"></i><?php echo get_string('editmyprofile') ?></a></li>
                            <?php } ?>
                            <?php if (!empty($PAGE->theme->settings->enableprivatefiles)) { ?>
                                <li><a href="<?php p($CFG->wwwroot) ?>/user/files.php" title="<?php echo get_string('privatefiles', 'block_private_files') ?>"><i class="fa fa-file"></i><?php echo get_string('privatefiles', 'block_private_files') ?></a></li>
                            <?php } ?>
                            <?php  if (!empty($PAGE->theme->settings->enablebadges)) { ?>
                                <li><a href="<?php p($CFG->wwwroot) ?>/badges/mybadges.php" title="<?php echo get_string('badges') ?>"><i class="fa fa-certificate"></i><?php echo get_string('badges') ?></a></li>
                            <?php } ?>

                            <?php
                                if ($CFG->version > 2015051100) { ?>
                                <li>
                                  <a href="<?php p($CFG->wwwroot) ?>/user/preferences.php" title="<?php echo get_string('preferences') ?>">
                                    <i class="fa fa-cog"></i><?php echo get_string('preferences') ?>
                                  </a>
                                </li>
                            <?php
                                }
                            ?>

                             <?php  if (!empty($PAGE->theme->settings->enablenote)) { ?>
                                <li><a href="<?php p($CFG->wwwroot) ?>/message/edit.php?id=<?php echo "$userid"; ?>" title="<?php echo get_string('notifications') ?>"><i class="fa fa-paper-plane"></i><?php echo get_string('notifications') ?></a></li>
                            <?php } ?>

                            <?php  if (!empty($PAGE->theme->settings->enableblog)) { ?>
                                <li><a href="<?php p($CFG->wwwroot) ?>/blog/index.php?userid=<?php echo "$userid"; ?>" title="<?php echo get_string('myblogs','theme_bcu') ?>"><i class="fa fa-rss"></i><?php echo get_string('myblogs','theme_bcu') ?></a></li>
                            <?php } ?>

                            <?php  if (!empty($PAGE->theme->settings->enableposts)) { ?>
                                <li><a href="<?php p($CFG->wwwroot) ?>/mod/forum/user.php?id=<?php echo "$userid"; ?>" title="<?php echo get_string('posts') ?>"><i class="fa fa-commenting"></i><?php echo get_string('posts') ?></a></li>
                            <?php } ?>

                             <?php  if (!empty($PAGE->theme->settings->enablefeed)) { ?>
                                <li><a href="<?php p($CFG->wwwroot) ?>/mod/forum/user.php?id=<?php echo "$userid"; ?>" title="<?php echo get_string('feedback') ?>"><i class="fa fa-bullhorn"></i><?php echo get_string('feedback') ?></a></li>
                            <?php } ?>

                            <?php if (!empty($PAGE->theme->settings->enablecalendar)) { ?>
                                <li><a href="<?php p($CFG->wwwroot) ?>/calendar/view.php" title="<?php echo get_string('pluginname', 'block_calendar_month') ?>"><i class="fa fa-calendar"></i><?php echo get_string('pluginname', 'block_calendar_month') ?></a></li>
                            <?php } ?>
                            <li><a href="<?php p($CFG->wwwroot) ?>/login/logout.php" title="<?php echo get_string('logout') ?>"><i class="fa fa-lock"></i><?php echo get_string('logout') ?></a></li>
                        </ul>
                    </div>
                <?php } ?>
            </div>

            <div style="float: right; position: relative; display: inline; margin-left: 15px;">
                <?php
                 if (empty($PAGE->layout_options['langmenu']) || $PAGE->layout_options['langmenu']) {
                    echo $OUTPUT->lang_menu();
                 } ?>
            </div>

<?php  if ($PAGE->theme->settings->enablemenus) { 

	 echo $OUTPUT->tools_menu3();
	 echo $OUTPUT->tools_menu4();
	 echo $OUTPUT->tools_menu5();
	 echo $OUTPUT->tools_menu6();
	 echo $OUTPUT->tools_menu7();
	 echo $OUTPUT->tools_menu8();
	 echo $OUTPUT->tools_menu9();
	 echo $OUTPUT->tools_menu10();
	 echo $OUTPUT->tools_menu11();
	 echo $OUTPUT->tools_menu12();

} ?>

        </div>
    </div>
    <div id="page-header" class="clearfix container">
        <?php if ($haslogo) { ?>
            <div id="logocontainer"><a href="<?php p($CFG->wwwroot) ?>"><?php echo "<img src='".$PAGE->theme->setting_file_url('logo', 'logo')."' alt='logo' id='logo' />"; echo "</a></div>";
        } 

    if (isset($PAGE) && !$PAGE->theme->settings->sitetitle) {
        $header = theme_bcu_remove_site_fullname($PAGE->heading);
        $PAGE->set_heading($header);
    }
    ?>
     <div id="coursetitle" class="pull-left">
     <span title='<?php echo $PAGE->heading ?>'><?php echo $PAGE->heading ?></span>
     </div>


		<?php if (!empty($PAGE->theme->settings->socialset)) { ?>
		<div class="socialbox pull-right">
		<?php if (isset($PAGE->theme->settings->socialsearchicon)) { ?>
		<a alt="Search Moodle" title="Search Moodle" href="<?php echo $CFG->wwwroot . '/course/search.php ' ?>"><i class="fa fa-search"></i></a>
		<?php } ?>	
		<?php if (!empty($PAGE->theme->settings->social1)) { ?>
		<a alt="facebook" title="facebook" href="<?php echo $PAGE->theme->settings->social1 ?>"><i class="fa fa-facebook-square"></i></a>
		<?php } ?>
		<?php if (!empty($PAGE->theme->settings->social2)) { ?>
		<a alt="twitter" title="twitter" href="<?php echo $PAGE->theme->settings->social2 ?>"><i class="fa fa-twitter-square"></i></a>
		<?php } ?>
		<?php if (!empty($PAGE->theme->settings->social3)) { ?>
		<a alt="google plus" title="google plus" href="<?php echo $PAGE->theme->settings->social3 ?>"><i class="fa fa-google-plus"></i></a>
		<?php } ?>
		<?php if (!empty($PAGE->theme->settings->social4)) { ?>
		<a alt="instagram" title="instagram" href="<?php echo $PAGE->theme->settings->social4 ?>"><i class="fa fa-instagram"></i></a>
		<?php } ?>
		<?php if (!empty($PAGE->theme->settings->social5)) { ?>
		<a alt="tumblr" title="tumblr" href="<?php echo $PAGE->theme->settings->social5 ?>"><i class="fa fa-tumblr-square"></i></a>
		<?php } ?>
		<?php if (!empty($PAGE->theme->settings->social6)) { ?>
		<a alt="linkedin" title="linkedin" href="<?php echo $PAGE->theme->settings->social6 ?>"><i class="fa fa-linkedin"></i></a>
		<?php } ?>
		<?php if (!empty($PAGE->theme->settings->social7)) { ?>
		<a alt="youtube" title="youtube" href="<?php echo $PAGE->theme->settings->social7 ?>"><i class="fa fa-youtube-square"></i></a>
		<?php } ?>
		<?php if (!empty($PAGE->theme->settings->social8)) { ?>
		<a alt="flickr" title="flickr" href="<?php echo $PAGE->theme->settings->social8 ?>"><i class="fa fa-flickr"></i></a>
		<?php } ?>
		<?php if (!empty($PAGE->theme->settings->social9)) { ?>
		<a alt="pinterest" title="pinterest" href="<?php echo $PAGE->theme->settings->social9 ?>"><i class="fa fa-pinterest-p"></i></a>
		<?php } ?>
		<?php if (!empty($PAGE->theme->settings->social10)) { ?>
		<a alt="web" title="web" href="<?php echo $PAGE->theme->settings->social10 ?>"><i class="fa fa-globe"></i></a>
		<?php } ?>
		<?php if (!empty($PAGE->theme->settings->social11)) { ?>
		<a alt="blog" title="blog" href="<?php echo $PAGE->theme->settings->social11 ?>"><i class="fa fa-rss"></i></a>
		<?php } ?>
		</div>
		<?php } ?>

		<?php if (empty($PAGE->theme->settings->socialset)) { ?>
        <div class="searchbox">
            <form action="<?php p($CFG->wwwroot) ?>/course/search.php">
                <label class="hidden" for="search-1" style="display: none;">Search iCity</label>
                <div class="search-box grey-box bg-white clear-fix">
                    <input placeholder="<?php echo get_string("searchcourses")?>" accesskey="6" class="search_tour bg-white no-border left search-box__input ui-autocomplete-input" type="text" name="search" id="search-1" autocomplete="off">
                    <button type="submit" class="no-border bg-white pas search-box__button"><abbr class="fa fa-search"></abbr></button>
                </div>
            </form>
        </div>
        <?php } ?>

        <div id="course-header">
            <?php echo $OUTPUT->course_header(); ?>
        </div>
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
                            <?php echo $OUTPUT->navigation_menu(); ?>
                            <?php if (!EMPTY($PAGE->theme->settings->disablecustommenu)) {echo $OUTPUT->custom_menu(); } ?>
                            <?php  if ($PAGE->theme->settings->enabletoolsmenus) { ?>
		                        <?php echo $OUTPUT->tools_menu(); ?>
		                        <?php echo $OUTPUT->tools_menu2(); ?>
                            <?php } ?>

                            <ul class="nav pull-right">
                                <?php if (isloggedin()) { ?>
	                                <?php if ($PAGE->theme->settings->enableshowhideblocks) { ?>
	                                	
	                                <li class="hbl">
	                                    <a href="#" class="moodlezoom" title="<?php echo get_string('hideblocks', 'theme_bcu') ?>">
	                                        <i class="fa fa-indent fa-lg"></i>
	                                        <span class="zoomdesc"><?php echo get_string('hideblocks', 'theme_bcu') ?></span>
	                                    </a>
	                                </li>
	                                <li class="sbl">
	                                    <a href="#" class="moodlezoom" title="<?php echo get_string('showblocks', 'theme_bcu') ?>">
	                                        <i class="fa fa-outdent fa-lg"></i>
	                                        <span class="zoomdesc"><?php echo get_string('showblocks', 'theme_bcu') ?></span>
	                                    </a>
	                                </li>
	                                <?php } ?>
	                                <?php if ($PAGE->theme->settings->enablezoom) { ?>
	                                <li class="hbll">
	                                    <a href="#" class="moodlewidth" title="<?php echo get_string('fullscreen', 'theme_bcu') ?>">
	                                        <i class="fa fa-expand fa-lg"></i>
	                                        <span class="zoomdesc"><?php echo get_string('fullscreen', 'theme_bcu') ?></span>
	                                    </a>
	                                </li>
	                                <li class="sbll">
	                                    <a href="#" class="moodlewidth" title="<?php echo get_string('standardview', 'theme_bcu') ?>">
	                                        <i class="fa fa-compress fa-lg"></i>
	                                        <span class="zoomdesc"><?php echo get_string('standardview', 'theme_bcu') ?></span>
	                                    </a>
	                                </li>
	      			                <?php } ?>
      			                <?php } ?>
                            </ul>
                            <div id="edittingbutton" class="pull-right breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>


<?php if (!empty($PAGE->theme->settings->enableticker)) { ?>
<div id="ticker-wrap" class="clearfix container">
<div class="pull-left" id="ticker-announce">
<?php echo get_string('ticker', 'theme_bcu'); ?>
</div>
<ul id="ticker">
<?php if (empty($PAGE->theme->settings->tickertext)) { ?>
			<li>Set the ticker text from the settings page!</li>
			<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, molestiae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, molestiae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, molestiae.</li>
			<li>A short Headline is here</li>
			<li>A long headline is not here either. <a href="#">A link is here!</a></li>
<?php } else { echo $PAGE->theme->settings->tickertext; } ?>

</ul>
</div>
<?php } ?>
