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
  <!-- Global scripts -->
<script src="https://cdn2.bcu.ac.uk/toolbar/v1.1/jquery.signalR-1.1.3.min.js"></script>
<script src="https://ssobeta.bcu.ac.uk/signalr/hubs"></script>
<script src="https://cdn2.bcu.ac.uk/toolbar/v1.1//jquery.hoverIntent.minified.js"></script>
<script src="https://cdn2.bcu.ac.uk/toolbar/v1.1/bcu.toolbar.js"></script>
<script type="text/javascript">
    var $ = jQuery.noConflict();
    CallBACUToolbar({
        signouturl: "http://moodle.bcu.ac.uk/login/logout.php?sesskey=<?php echo sesskey(); ?>",
        ToolbarLinks: [<?php echo theme_bcu_return_menu_items(); ?>]
    });
</script>
</body>
</html>
