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
require_once(dirname(__FILE__) . '/includes/header.php');

$hasfootnote = (!empty($PAGE->theme->settings->footnote));
$haslogo = (!empty($PAGE->theme->settings->logo));
$hasp1 = (!empty($PAGE->theme->settings->p1));
$hasp2 = (!empty($PAGE->theme->settings->p2));
$hasp3 = (!empty($PAGE->theme->settings->p3));
$hasp4 = (!empty($PAGE->theme->settings->p4));
$hasp5 = (!empty($PAGE->theme->settings->p5));

$haspcap1 = (!empty($PAGE->theme->settings->p1cap));
$haspcap2 = (!empty($PAGE->theme->settings->p2cap));
$haspcap3 = (!empty($PAGE->theme->settings->p3cap));
$haspcap4 = (!empty($PAGE->theme->settings->p4cap));
$haspcap5 = (!empty($PAGE->theme->settings->p5cap));

$hasmarket1 = (!empty($PAGE->theme->settings->market1));
$hasmarket2 = (!empty($PAGE->theme->settings->market2));
$hasmarket3 = (!empty($PAGE->theme->settings->market3));
$hasmarket4 = (!empty($PAGE->theme->settings->market4));
?>
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
            </div>
        </div>
    </nav>
</div>
</div>
</div>

<?php if ($hasp1 || $hasp2 || $hasp3 || $hasp4 || $hasp5) { ?>
<div class="container slidewrap">
<div id="main-slider" class="flexslider">
<ul class="slides">

<?php if ($hasp1) { ?>
<li>
<a href="<?php if (!empty($PAGE->theme->settings->p1url)) {echo $PAGE->theme->settings->p1url; } else { echo "#";} ?>"><?php echo "<img src='".$PAGE->theme->settings->p1."' alt='p2' />";?></a>
<?php if ($haspcap1) { ?>
<div class="flex-caption">
<?php echo $PAGE->theme->settings->p1cap;?>
</div>
<?php } ?>
</li>
<?php } ?>

<?php if ($hasp2) { ?>
<li>
<a href="<?php if (!empty($PAGE->theme->settings->p2url)) {echo $PAGE->theme->settings->p2url; } else { echo "#";} ?>"><?php echo "<img src='".$PAGE->theme->settings->p2."' alt='p2' />";?></a>
<?php if ($haspcap2) { ?>
<div class="flex-caption">
<?php echo $PAGE->theme->settings->p2cap;?>
</div>
<?php } ?>
</li>
<?php } ?>


<?php if ($hasp3) { ?>
<li>
<a href="<?php if (!empty($PAGE->theme->settings->p3url)) {echo $PAGE->theme->settings->p3url; } else { echo "#";} ?>"><?php echo "<img src='".$PAGE->theme->settings->p3."' alt='p2' />";?></a>
<?php if ($haspcap3) { ?>
<div class="flex-caption">
<?php echo $PAGE->theme->settings->p3cap;?>
</div>
<?php } ?>
</li>
<?php } ?>

<?php if ($hasp4) { ?>
<li>
<a href="<?php if (!empty($PAGE->theme->settings->p4url)) {echo $PAGE->theme->settings->p4url; } else { echo "#";} ?>"><?php echo "<img src='".$PAGE->theme->settings->p4."' alt='p2' />";?></a>
<?php if ($haspcap4) { ?>
<div class="flex-caption">
<?php echo $PAGE->theme->settings->p4cap;?>
</div>
<?php } ?>
</li>
<?php } ?>

<?php if ($hasp5) { ?>
<li>
<a href="<?php if (!empty($PAGE->theme->settings->p5url)) {echo $PAGE->theme->settings->p5url; } else { echo "#";} ?>"><?php echo "<img src='".$PAGE->theme->settings->p5."' alt='p2' />";?></a>
<?php if ($haspcap5) { ?>
<div class="flex-caption">
<?php echo $PAGE->theme->settings->p5cap;?>
</div>
<?php } ?>
</li>
<?php } ?>
	</ul>
</div>
</div>

<?php } ?>

<?php if (!empty($PAGE->theme->settings->infobox)) { ?>
<div id="theinfo" class="container">
	<div id="theinfo-internal"><div class="row-fluid">

	<?php echo $PAGE->theme->settings->infobox; ?>
	
	</div></div>
</div>
<?php } ?>

<div id="marketblocks" class="container">
<div class="row-fluid"> 
<?php
$marketclass = " ";
if ($hasmarket1 && !$hasmarket2 && !$hasmarket3 && !$hasmarket4) {
	$marketclass = "span12";
}

if ($hasmarket1 && $hasmarket2 && !$hasmarket3 && !$hasmarket4) {
	$marketclass = "span6";
}

if ($hasmarket1 && $hasmarket2 && $hasmarket3 && !$hasmarket4) {
	$marketclass = "span4";
}

if ($hasmarket1 && $hasmarket2 && $hasmarket3 && $hasmarket4) {
	$marketclass = "span3";
}
?>  
    <?php if ($hasmarket1) { ?> 
    <div class="<?php echo "$marketclass";?> first">
   
	<?php echo $PAGE->theme->settings->market1;?>
    
    </div>
    <?php } ?>
    
     
     <?php if ($hasmarket2) { ?> 
    <div class="<?php echo "$marketclass";?> first">

	<?php echo $PAGE->theme->settings->market2;?>

    </div>
     <?php } ?>
  
     
    <?php if ($hasmarket3) { ?> 
    <div class="<?php echo "$marketclass";?> first">

	<?php echo $PAGE->theme->settings->market3;?>
 
    </div>
    <?php } ?>

    
    <?php if ($hasmarket4) { ?> 
    <div class="<?php echo "$marketclass";?> first">

	<?php echo $PAGE->theme->settings->market4;?>

    </div>
     <?php } ?>
 
    
 </div>      
 </div>
 
 <?php if (!empty($PAGE->theme->settings->infobox2)) { ?>
 <div id="themessage" class="container">
	<div id="themessage-internal"><div class="row-fluid">
	
		<?php echo $PAGE->theme->settings->infobox2; ?>
		
	</div></div>
</div>
<?php } ?>


<div class="container outercont">
    <div id="page-content" class="row-fluid">
     <div id="page-navbar" class="span12">
            <nav class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></nav>
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
    <?php require_once(dirname(__FILE__) . '/includes/footer.php'); ?>