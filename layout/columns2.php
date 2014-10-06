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

// Get the HTML for the settings bits.
//$html = theme_bcu_get_html_for_settings($OUTPUT, $PAGE);

$left = (!right_to_left());  // To know if to add 'pull-right' and 'desktop-first-column' classes in the layout for LTR.
$hasmiddle = $PAGE->blocks->region_has_content('middle', $OUTPUT);
$hasfootnote = (!empty($PAGE->theme->settings->footnote));
$haslogo = (!empty($PAGE->theme->settings->logo));

theme_bcu_initialise_zoom($PAGE);
$setzoom = theme_bcu_get_zoom();

theme_bcu_initialise_full($PAGE);
$setfull = theme_bcu_get_full();

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
     <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    
</head>

<body <?php echo $OUTPUT->body_attributes($setzoom); ?>>

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
	
	<div class="pull-left">
	<?php echo $OUTPUT->user_menu(); ?> 
	</div>
	
	<div class="headermenu row">
   <?php if(!isloggedin() || isguestuser()) { ?>
   <?php echo $OUTPUT->page_heading_menu(); ?>
   <?php echo $OUTPUT->login_info() ?>
   <?php //echo $OUTPUT->lang_menu(); ?>
   <?php } else { ?>
    <div class="dropdown secondone">
    <a class="dropdown-toggle usermendrop" data-toggle="dropdown1" href="#"><span class="fa fa-user"></span><?php echo fullname($USER) ?> <span class="fa fa-angle-down"></span></a>
    <ul class="dropdown-menu usermen" role="menu" aria-labelledby="dropdownMenu">
<?php if (!empty($PAGE->theme->settings->enablemy)) { ?>
<li><a href="<?php p($CFG->wwwroot) ?>/my" title="My Dashboard"><i class="fa fa-dashboard"></i><?php echo get_string('myhome') ?></a></li>
<?php } ?>
<?php if (!empty($PAGE->theme->settings->enableprofile)) { ?>
<li><a href="<?php p($CFG->wwwroot) ?>/user/profile.php" title="View profile"><i class="fa fa-user"></i><?php echo get_string('viewprofile') ?></a></li>
<?php } ?>
<?php if (!empty($PAGE->theme->settings->enableeditprofile)) { ?>
<li><a href="<?php p($CFG->wwwroot) ?>/user/edit.php" title="Edit profile"><i class="fa fa-cog"></i><?php echo get_string('editmyprofile') ?></a></li>
<?php } ?>

<?php if (!empty($PAGE->theme->settings->enableprivatefiles)) { ?>
<li><a href="<?php p($CFG->wwwroot) ?>/user/files.php" title="private files"><i class="fa fa-file"></i><?php echo get_string('privatefiles', 'block_private_files') ?></a></li>
<?php } ?>

<?php  if (!empty($PAGE->theme->settings->enablebadges)) { ?>
<li><a href="<?php p($CFG->wwwroot) ?>/badges/mybadges.php" title="badges"><i class="fa fa-certificate"></i><?php echo get_string('badges') ?></a></li>
<?php } ?>

<?php if (!empty($PAGE->theme->settings->enablecalendar)) { ?>
<li><a href="<?php p($CFG->wwwroot) ?>/calendar/view.php" title="Calendar"><i class="fa fa-calendar"></i><?php echo get_string('pluginname', 'block_calendar_month') ?></a></li>
<?php } ?>
<li><a href="<?php p($CFG->wwwroot) ?>/login/logout.php" title="Log out"><i class="fa fa-lock"></i><?php echo get_string('logout') ?></a></li>
    </ul>
    </div>
   <?php } ?>
    </div>      
	
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



<div class="container outercont">
    <div id="page-content" class="row-fluid">
    <div id="page-navbar" class="span12">
        <?php echo $OUTPUT->navbar(); ?>
    </div>
        <section id="region-main" class="span9<?php if ($left) { echo ' '; } ?> desktop-first-column">
            <?php
            echo $OUTPUT->course_content_header();
            echo $OUTPUT->main_content();
            echo $OUTPUT->course_content_footer();
            ?>
        </section>
        <?php
        $classextra = '';
        if ($left) {
            //$classextra = ' desktop-first-column';
        }
        echo $OUTPUT->blocks('side-post', 'span3'.$classextra);
        ?>
    </div>
    </div>

    <footer id="page-footer">
        <div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
       
      	
      	<div class="container"><div class="row">
            <?php if (!empty($PAGE->theme->settings->footer1content)) { ?>
            <div class="left-col size4of16 span3" id="contactdetails">

                <h3 title="Contact Us"><?php echo $PAGE->theme->settings->footer1header; ?></h3>

                <?php echo $PAGE->theme->settings->footer1content; ?>

            </div>
            <?php } ?>
            <?php if (!empty($PAGE->theme->settings->footer2content)) { ?>
            <div class="left-col size6of16 span4" id="footer-faculties">

                <h3 title="Our Faculties"><?php echo $PAGE->theme->settings->footer2header; ?></h3>

                <?php echo $PAGE->theme->settings->footer2content; ?>

            </div>
            <?php } ?>
            <?php if (!empty($PAGE->theme->settings->footer3content)) { ?>
            <div class="left-col size4of16 span3" id="social-connect">
                
                <h3 title="Connect"><?php echo $PAGE->theme->settings->footer3header; ?></h3>

                <?php echo $PAGE->theme->settings->footer3content; ?>
                

            </div>
            <?php } ?>
            <?php if (!empty($PAGE->theme->settings->footer4content)) { ?>
            <div class="left-col size2of16 span2">

                <h3><?php echo $PAGE->theme->settings->footer4header; ?></h3>

                <?php echo $PAGE->theme->settings->footer4content; ?>

            </div>
            <?php } ?>
        </div></div>
      	
        
        
        <div class="info container2 clearfix">
      <div class="footer-inner page ptm pbl container">
			<nav>
				<ul class="base-tabs li-borders white sml">
					<li><span class="mtm mrl">&copy; 2013 Birmingham City University</span></li>
					<li><a href="http://bcu.ac.uk/about-us/policies-and-procedures/terms-of-use" class="phm">Terms of Use</a></li>
					<li><a href="http://bcu.ac.uk/about-us/corporate-information/governance-of-the-university" class="phm">Legal Information</a> </li>
					<li><a href="http://bcu.ac.uk/about-us/policies-and-procedures/cookies" class="phm">How we use cookies</a></li>
					<li><a href="http://bcu.ac.uk/account/login" class="phm no-border">Sign in</a></li>
				</ul>
			</nav>
		</div>
 		<div class="pull-right">
        <?php
        //echo $html->footnote;
        //echo $OUTPUT->login_info();
       // echo $OUTPUT->home_link();
        echo $OUTPUT->standard_footer_html();
        ?>
        </div>

        </div>
        
        
    </footer>
<a class="back-to-top" href="#top" ><i class="fa fa-angle-up "></i></a>
    <?php echo $OUTPUT->standard_end_of_body_html() ?>
</div>
<script type="text/javascript">
    <?php echo $PAGE->theme->settings->jssection;?>
</script>

</body>
</html>
