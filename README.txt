======================================
HTML code for settings and block areas
======================================

In this document you will find some code snippets to help you to customize the Info Box and the Marketing Blocks 

You can insert any HTML tag to customize the frontpage blocks. Use a <div> as container and add the height to keep
the same value in all the blocks.

The Font Awesome icons set is available in http://fortawesome.github.io/Font-Awesome/icons/. You can insert any
of them and following the examples http://fortawesome.github.io/Font-Awesome/examples/
 


Front page Info Block
---------------------
There are two Info blocks in the frontpage located above and below the Marketing Blocks. See pix/layout.png


Simple box with solid background and using a default heading

<div style="text-align:center; background: #f0f0f0;">
    <h3 style="text-align: center;">Add your text here</h3>
</div>


Simple box with solid background colour, default heading h3 and white text colour.

<div style="text-align:center; background: #009688; color: #ffffff;">
    <h3 style="text-align: center;">Add your text here</h3>
</div>





Frontpage Marketing Block HTML
------------------------------
You can add up to 12 Marketing Blocks in the frontpage. The blocks are located automatically in rows with a maximum of 4 blocks per row. The full width is divided equally between the blocks. 


Simple Block with white background and Font Awesome icon. Using the default text colour and h3 heading.

<div style="text-align:center; background: #ffffff; height: 240px; padding: 7px;">
    <i class="fa fa-font fa-5x"></i>
    <h3 style="color: #333333;">TITLE</h3>
    <div style="text-align:center;">Add your text here</div>
</div>


Block with solid background colour, white text colour and Font Awesome icon.

<div style="text-align:center; background: #4b4b4b; color: #ffffff; height: 240px; padding: 7px;">
    <i class="fa fa-th fa-5x"></i>
    <h3 style="color: #ffffff;">TITLE</h3>
    <div style="text-align:center; padding: 5px;">Add your text here</div>
</div>


Block with solid background, white text colour and text aligned vertically (useful for blocks 100% wide)

<div style="background: #c2185b; height: 120px;">
    <h1 style="line-height: 120px; color: #ffffff; text-align: center; "><b>moodle 3.0 ready !!!</b></h1>
</div>



Footer Blocks
----------------------------

Contact information

<i class="fa fa-building"></i>  High St. 100<br>
<span style="margin-left: 20px;">123456 City</span><br><br>
<i class="fa fa-phone"></i> +12 (3)456 78 90<br>
<i class="fa fa-envelope"></i> info@mail.com<br>
<i class="fa fa-globe"></i> www.example.com


List with Chevron

<ul class="block-list white">
    <li><a href="http://moodle.org/"><span class="icon-right-open-mini"></span><span>Accessibility</span></a></li>
    <li><a href="http://moodle.org/"><span class="icon-right-open-mini"></span><span>Moodle Help</span></a></li>
    <li><a href="http://moodle.org/"><span class="icon-right-open-mini"></span><span>Moodle Feedback</span></a></li>
    <li><a href="http://moodle.org/"><span class="icon-right-open-mini"></span><span>IT Help</span></a></li>
    <li><a href="http://moodle.org/"><span class="icon-right-open-mini"></span><span>IT Feedback</span></a></li>
</ul>
