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
<?php if (!empty($PAGE->theme->settings->alertbox)) { ?>
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
<li><a href="<?php p($CFG->wwwroot) ?>/my" title="My Dashboard"><i class="fa fa-briefcase"></i><?php echo get_string('mymoodledashboard') ?></a></li>
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
     <?php echo $PAGE->heading ?>
     </div>
     
<form role="form" class="pull-right headersearch" method="get" action="<?php p($CFG->wwwroot) ?>/course/search.php" id="coursesearch2">

<input type="text" placeholder="Search courses" value="" class="form-control" name="search"  id="coursesearchbox2" placeholder="Search Courses">

<button style="position: absolute; top: -3000px; left: 0px;" class="btn btn-default" type="submit">Go</button>

</form>
                  
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
                <div class="pull-right"><?php echo $OUTPUT->page_heading_button(); ?></div>
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

			<div class="left-col size4of16 span3" id="contactdetails">

				<h3 title="Contact Us">Contact Us</h3>

				<address>
					<ul class="block-list mbm">

						<li class="fn org">Birmingham City University</li>
						<li class="street-address">City North Campus</li>
						<li class="locality">Birmingham</li>
						<li class="postal-code">B42 2SU</li>
						<li class="country-name">United Kingdom</li>
						<li class="pts tel">+44 (0)121 331 5000</li>
					</ul>
				</address>

			</div>

			<div class="left-col size6of16 span4" id="footer-faculties">

				<h3 title="Our Faculties">Our Faculties</h3>

				<ul class="block-list white">

					<li><a href="http://bcu.ac.uk/biad"><span class="fa fa-chevron-right icon-right-open-mini"></span><span>Birmingham Institute of Art &amp; Design</span></a></li>
					<li><a href="http://bcu.ac.uk/bcbs"><span class="fa fa-chevron-right icon-right-open-mini"></span><span>Birmingham City Business School</span></a></li>
					<li><a href="http://bcu.ac.uk/elss"><span class="fa fa-chevron-right icon-right-open-mini"></span><span>Education, Law &amp; Social Sciences</span></a></li>
					<li><a href="http://bcu.ac.uk/health"><span class="fa fa-chevron-right icon-right-open-mini"></span><span>Faculty of Health</span></a></li>
					<li><a href="http://bcu.ac.uk/pme"><span class="fa fa-chevron-right icon-right-open-mini"></span><span>Performance, Media &amp; English</span></a></li>
					<li><a href="http://bcu.ac.uk/tee"><span class="fa fa-chevron-right icon-right-open-mini"></span><span>Technology, Engineering &amp; the Environment</span></a></li>
				</ul>

			</div>

			<div class="left-col size4of16 span3" id="social-connect">

				<div class="mll">

					<h3 title="Connect">Connect</h3>

					<ul class="block-list white">
						<li><a title="Facebook" href="http://www.facebook.com/birminghamcityuniversity"><span class="icon-facebook-squared fa fa-facebook-square"></span><span class="screen-reader-text">Facebook</span></a></li>
						<li><a title="Twitter" href="http://twitter.com/MyBCU"><span class="icon-twitter fa fa-twitter"></span><span class="screen-reader-text">Twitter</span></a></li>
						<li><a title="YouTube" href="http://www.youtube.com/birminghamcityuni"><span class="icon-youtube fa fa-youtube"></span><span class="screen-reader-text">You Tube</span></a></li>
						<li class="clear"><a title="LinkedIn" href="http://www.linkedin.com/company/birmingham-city-university"><span class="icon-linkedin fa fa-linkedin"></span><span class="screen-reader-text">LinkedIn</span></a></li>
						<li><a title="Blogs" href="http://blogs.bcu.ac.uk/views/"><span class="icon-bloggs fa fa-rss"></span><span class="screen-reader-text">Blogs</span></a></li>
						<li><a title="Google Plus" href="http://plus.google.com/110110307949560307646/about"><span class="icon-gplus fa fa-google-plus"></span><span class="screen-reader-text">Goggle Plus</span></a></li>
						<li class="clear"><a title="Weibo" href="http://www.weibo.com/bcuchina"><span class="icon-weibo fa fa-weibo"></span><span class="screen-reader-text">Weibo</span></a></li>
						<li><a title="WeChat - our WeChat ID is 'BCUOfficial'" href="http://www.wechat.com/"><span class="icon-wechat fa fa-wechat"></span><span class="screen-reader-text">WeChat</span></a></li>
						<li><a title="Apple" href="http://itunes.apple.com/app/ibcu/id375319801?mt=8"><span class="icon-apple fa fa-apple"></span><span class="screen-reader-text">Apple</span></a></li>
						<li class="clear"><a title="Android" href="https://market.android.com/details?id=com.bcu.ibcu.activities&amp;feature=search_result"><span class="icon-android fa fa-android"></span><span class="screen-reader-text">Android</span></a></li>
						<li><a title="Windows" href="http://www.windowsphone.com/en-US/apps/d17c3d1f-2b56-4ad7-ae9a-339520b9f0e7"><span class="icon-windows fa fa-windows"></span><span class="screen-reader-text">Windows</span></a></li>
					</ul>

				</div>

			</div>

			<div class="left-col size2of16 span2">

				<h3>Quick Links</h3>

				<ul class="block-list white">
					<li><a href="https://icity.bcu.ac.uk/"><span class="fa fa-chevron-right icon-right-open-mini"></span><span>iCity</span></a></li>
					<li><a href="http://moodle.bcu.ac.uk/"><span class="fa fa-chevron-right icon-right-open-mini"></span><span>Moodle</span></a></li>
					<li><a href="https://owa.bcu.ac.uk/"><span class="fa fa-chevron-right icon-right-open-mini"></span><span>Staff Email</span></a></li>
					<li><a href="https://icity.bcu.ac.uk/Account/LiveEduLogin"><span class="fa fa-chevron-right icon-right-open-mini"></span><span>Student Email</span></a></li>
					<li><a href="http://www.birminghamcitysu.com/"><span class="fa fa-chevron-right icon-right-open-mini"></span><span>Student Union</span></a></li>
					<li><a href="https://store.bcu.ac.uk/"><span class="fa fa-chevron-right icon-right-open-mini"></span><span>Online Store</span></a></li>
				</ul>

			</div>

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


</body>
</html>
