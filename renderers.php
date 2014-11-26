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

require_once($CFG->dirroot.'/blocks/course_overview/locallib.php');
require_once($CFG->dirroot . "/course/renderer.php");

class theme_bcu_core_renderer extends core_renderer {
    /** @var custom_menu_item language The language menu if created */
    protected $language = null;

    public function user_menu() {
        global $CFG;
        $usermenu = new custom_menu('', current_language());
        return $this->render_user_menu($usermenu);
    }

    /**
     * Returns HTML to display a "Turn editing on/off" button in a form.
     *
     * @param moodle_url $url The URL + params to send through when clicking the button
     * @return string HTML the button
     * Written by G J Barnard
     */

    public function edit_button(moodle_url $url) {
        $url->param('sesskey', sesskey());
        if ($this->page->user_is_editing()) {
            $url->param('edit', 'off');
            $btn = 'btn-danger';
            $title = get_string('turneditingoff');
            $icon = 'fa-power-off';
        } else {
            $url->param('edit', 'on');
            $btn = 'btn-success';
            $title = get_string('turneditingon');
            $icon = 'fa-edit';
        }
        return html_writer::tag('a', html_writer::start_tag('i', array('class' => $icon . ' fa fa-fw')) .
            html_writer::end_tag('i') . $title, array('href' => $url, 'class' => 'btn ' . $btn, 'title' => $title));
    }

    protected function render_user_menu(custom_menu $menu) {
        global $CFG, $USER, $DB, $PAGE;

        $addusermenu = true;
        $addlangmenu = true;
        $addmessagemenu = true;

        if (!isloggedin() || isguestuser()) {
            $addmessagemenu = false;
        }
        if (!$CFG->messaging) {
            $addmessagemenu = false;
        } else {
            // Check whether or not the "popup" message output is enabled
            // This is after we check if messaging is enabled to possibly save a DB query.
            $popup = $DB->get_record('message_processors', array('name' => 'popup'));
            if (!$popup) {
                $addmessagemenu = false;
            }
        }

        if ($addmessagemenu) {
            $messages = $this->get_user_messages();
            $messagecount = count($messages);
            if ($messagecount == 0) {
                $messagemenu = $menu->add('<i class="fa fa-comments"> </i>' . get_string('messages', 'message') . '',
                        new moodle_url('/message/'), get_string('messages', 'message'), 9999);
            } else {
                $messagemenu = $menu->add('<i class="fa fa-comments"> </i>' . get_string('messages', 'message') .
                        '<span id="messagebubble">' . $messagecount . '</span>', new moodle_url('#'),
                        get_string('messages', 'message'), 9999);
            }
            foreach ($messages as $message) {

                $senderpicture = new user_picture($message->from);
                $senderpicture->link = false;
                $senderpicture = $this->render($senderpicture);

                $messagecontent = $senderpicture;
                $messagecontent .= html_writer::start_tag('span', array('class' => 'msg-body'));
                $messagecontent .= html_writer::start_tag('span', array('class' => 'msg-title'));
                $messagecontent .= html_writer::tag('span', $message->from->firstname . ': ', array('class' => 'msg-sender'));
                $messagecontent .= $message->text;
                $messagecontent .= html_writer::end_tag('span');
                $messagecontent .= html_writer::start_tag('span', array('class' => 'msg-time'));
                $messagecontent .= html_writer::tag('i', '', array('class' => 'icon-time'));
                $messagecontent .= html_writer::tag('span', $message->date);
                $messagecontent .= html_writer::end_tag('span');

                $messagemenu->add($messagecontent, new moodle_url('/message/index.php', array('user1' => $USER->id,
                        'user2' => $message->from->id)));
            }
        }

        $langs = get_string_manager()->get_list_of_translations();
        if (count($langs) < 2 || empty($CFG->langmenu) || ($this->page->course != SITEID and !empty($this->page->course->lang))) {
            $addlangmenu = false;
        }

        $content = '<ul class="usermenu2 nav navbar-nav navbar-right">';
        foreach ($menu->get_children() as $item) {
            $content .= $this->render_custom_menu_item($item, 1);
        }

        return $content.'</ul>';
    }

    protected function process_user_messages() {
        $messagelist = array();
        foreach ($usermessages as $message) {
            $cleanmsg = new stdClass();
            $cleanmsg->from = fullname($message);
            $cleanmsg->msguserid = $message->id;

            $userpicture = new user_picture($message);
            $userpicture->link = false;
            $picture = $this->render($userpicture);

            $cleanmsg->text = $picture . ' ' . $cleanmsg->text;

            $messagelist[] = $cleanmsg;
        }

        return $messagelist;
    }

    protected function get_user_messages() {
        global $USER, $DB;
        $messagelist = array();

        $newmessagesql = "SELECT id, smallmessage, useridfrom, useridto, timecreated, fullmessageformat, notification
                            FROM {message}
                           WHERE useridto = :userid";

        $newmessages = $DB->get_records_sql($newmessagesql, array('userid' => $USER->id));

        foreach ($newmessages as $message) {
            $messagelist[] = $this->bootstrap_process_message($message);
        }

        $showoldmessages = (empty($this->page->theme->settings->showoldmessages)) ? 0 :
                $this->page->theme->settings->showoldmessages;
        if ($showoldmessages) {
            $maxmessages = 5;
            $readmessagesql = "SELECT id, smallmessage, useridfrom, useridto, timecreated, fullmessageformat, notification
                                 FROM {message_read}
                                WHERE useridto = :userid
                             ORDER BY timecreated DESC
                                LIMIT $maxmessages";

            $readmessages = $DB->get_records_sql($readmessagesql, array('userid' => $USER->id));

            foreach ($readmessages as $message) {
                $messagelist[] = $this->bootstrap_process_message($message);
            }
        }

        return $messagelist;
    }

    protected function bcu_process_message($message, $state) {
        global $DB;
        $messagecontent = new stdClass();

        if ($message->notification) {
            $messagecontent->text = get_string('unreadnewnotification', 'message');
        } else {
            if ($message->fullmessageformat == FORMAT_HTML) {
                $message->smallmessage = html_to_text($message->smallmessage);
            }
            $messagecontent->text = $message->smallmessage;
        }

        if ((time() - $message->timecreated ) <= (3600 * 3)) {
            $messagecontent->date = format_time(time() - $message->timecreated);
        } else {
            $messagecontent->date = userdate($message->timecreated, get_string('strftimetime', 'langconfig'));
        }

        $messagecontent->from = $DB->get_record('user', array('id' => $message->useridfrom));
        $messagecontent->state = $state;
        return $messagecontent;
    }

    protected function bootstrap_process_message($message) {
        global $DB;
        $messagecontent = new stdClass();

        if ($message->notification) {
            $messagecontent->text = get_string('unreadnewnotification', 'message');
        } else {
            if ($message->fullmessageformat == FORMAT_HTML) {
                $message->smallmessage = html_to_text($message->smallmessage);
            }
            if (core_text::strlen($message->smallmessage) > 15) {
                $messagecontent->text = core_text::substr($message->smallmessage, 0, 15).'...';
            } else {
                $messagecontent->text = $message->smallmessage;
            }
        }

        if ((time() - $message->timecreated ) <= (3600 * 3)) {
            $messagecontent->date = format_time(time() - $message->timecreated);
        } else {
            $messagecontent->date = userdate($message->timecreated, get_string('strftimetime', 'langconfig'));
        }

        $messagecontent->from = $DB->get_record('user', array('id' => $message->useridfrom));
        return $messagecontent;
    }
    // End usermenu.

    /*
     * This renders a notification message.
     * Uses bootstrap compatible html.
     */
    public function notification($message, $classes = 'notifyproblem') {
        $message = clean_text($message);
        $type = '';

        if ($classes == 'notifyproblem') {
            $type = 'alert alert-error';
        }
        if ($classes == 'notifysuccess') {
            $type = 'alert alert-success';
        }
        if ($classes == 'notifymessage') {
            $type = 'alert alert-info';
        }
        if ($classes == 'redirectmessage') {
            $type = 'alert alert-block alert-info';
        }
        return "<div class=\"$type\">$message</div>";
    }

    /*
     * This renders the navbar.
     * Uses bootstrap compatible html.
     */
    public function navbar() {
        $items = $this->page->navbar->get_items();
        $breadcrumbs = array();
        foreach ($items as $item) {
            $item->hideicon = true;
            $breadcrumbs[] = $this->render($item);
        }
        $divider = '<span class="divider">/</span>';
        $listitems = '<li>'.join(" $divider</li><li>", $breadcrumbs).'</li>';
        $title = '<span class="accesshide">'.get_string('pagepath').'</span>';
        return $title . "<ul class=\"breadcrumb\">$listitems</ul>";
    }

    /*
     * Overriding the custom_menu function ensures the custom menu is
     * always shown, even if no menu items are configured in the global
     * theme settings page.
     */
    public function custom_menu($custommenuitems = '') {
        global $CFG;

        if (!empty($CFG->custommenuitems)) {
            $custommenuitems .= $CFG->custommenuitems;
        }
        $custommenu = new custom_menu($custommenuitems, current_language());
        return $this->render_custom_menu($custommenu);
    }

    /*
     * This renders the bootstrap top menu.
     *
     * This renderer is needed to enable the Bootstrap style navigation.
     */
    protected function render_custom_menu(custom_menu $menu) {
        global $CFG, $PAGE, $OUTPUT, $COURSE;

        if (isloggedin() && !isguestuser()) {
            $mycoursetitle = "Home";
            $branchtitle = "Home";
            $branchlabel = '<i class="fa fa-home"></i> '.$branchtitle;
            $branchurl   = new moodle_url('/');
            $branchsort  = 9998;
            $branch = $menu->add($branchlabel, $branchurl, $branchtitle, $branchsort);

            $mycoursetitle = "My Home";
            $branchtitle = "My Home";
            $branchlabel = '<i class="fa fa-dashboard"></i> '.$branchtitle;
            $branchurl   = new moodle_url('/my/index.php');
            $branchsort  = 9999;
            $branch = $menu->add($branchlabel, $branchurl, $branchtitle, $branchsort);

            $mycoursetitle = "Events";
            $branchtitle = "Events";
            $branchlabel = '<i class="fa fa-calendar"></i> '.$branchtitle;
            $branchurl   = new moodle_url('/calendar/view.php?view=month&course=1');
            $branchsort  = 10000;
            $branch = $menu->add($branchlabel, $branchurl, $branchtitle, $branchsort);

            $mycoursetitle = "My Sites";
            $branchtitle = "My Sites";
            $branchlabel = '<i class="fa fa-briefcase"></i>'.$branchtitle;
            $branchurl   = new moodle_url('/my/index.php');
            $branchsort  = 10001;

            $branch = $menu->add($branchlabel, $branchurl, $branchtitle, $branchsort);           
            list($sortedcourses, $sitecourses, $totalcourses) = block_course_overview_get_sorted_courses();
            
 			if ($sortedcourses) {
    			foreach ($sortedcourses as $course) {
    				if ($course->visible){
    					$branch->add(format_string($course->fullname), new moodle_url('/course/view.php?id='.$course->id), format_string($course->shortname));
    				}
    			}
 			} else {
                $noenrolments = get_string('noenrolments', 'theme_bcu');
                $branch->add('<em>'.$noenrolments.'</em>', new moodle_url('/'), $noenrolments);
            }

            if(ISSET($COURSE->id) && $COURSE->id > 1) {
                    
                $branchtitle = get_string('thiscourse', 'theme_bcu');
                $branchlabel = '<i class="fa fa-sitemap"></i>'.$branchtitle;
                $branchurl = new moodle_url('#');
                
                $branch = $menu->add($branchlabel, $branchurl, $branchtitle, 10002);
                
                $branchtitle = "People";
                $branchlabel = '<i class="fa fa-users"></i>'.$branchtitle;
                $branchurl = new moodle_url('/user/index.php', array('id'=>$PAGE->course->id));
                
                $branch->add($branchlabel, $branchurl, $branchtitle, 100003);
                
                $branchtitle = "Grades";
                $branchlabel = $OUTPUT->pix_icon('i/grades', '', '', array('class' => 'icon')).$branchtitle;
                $branchurl = new moodle_url('/grade/report/index.php', array('id'=>$PAGE->course->id));
                
                $branch->add($branchlabel, $branchurl, $branchtitle, 100004);
                
                $data = theme_bcu_get_course_activities();
                
                foreach ($data as $modname => $modfullname) {
                    if ($modname === 'resources') {
                        $icon = $OUTPUT->pix_icon('icon', '', 'mod_page', array('class' => 'icon'));
                        $branch->add($icon.$modfullname, new moodle_url('/course/resources.php', array('id'=>$PAGE->course->id)));
                    } else {
                        $icon = '<img src="'.$OUTPUT->pix_url('icon', $modname) . '" class="icon" alt="" />';
                        $branch->add($icon.$modfullname, new moodle_url('/mod/'.$modname.'/index.php', array('id'=>$PAGE->course->id)));
                    }
                }
            }
            
            
            
            if (!empty($PAGE->theme->settings->enablehelp)) {
                $mycoursetitle = "Help";
                $branchtitle = "Help";
                $branchlabel = '<i class="fa fa-life-ring"></i>'.$branchtitle;
                $branchurl   = new moodle_url($PAGE->theme->settings->enablehelp);
                $branchsort  = 10001;
                $branch = $menu->add($branchlabel, $branchurl, $branchtitle, $branchsort);
            }
        }

        // TODO: eliminate this duplicated logic, it belongs in core, not
        // here. See MDL-39565.
        $addlangmenu = true;
        $langs = get_string_manager()->get_list_of_translations();
        if (count($langs) < 2
            or empty($CFG->langmenu)
            or ($this->page->course != SITEID and !empty($this->page->course->lang))) {
            $addlangmenu = false;
        }

        if (!$menu->has_children() && $addlangmenu === false) {
            return '';
        }

        $content = '<ul class="nav">';
        foreach ($menu->get_children() as $item) {
            $content .= $this->render_custom_menu_item($item, 1);
        }

        return $content.'</ul>';
    }

    /*
     * This code renders the custom menu items for the
     * bootstrap dropdown menu.
     */
    protected function render_custom_menu_item(custom_menu_item $menunode, $level = 0 ) {
        static $submenucount = 0;

        if ($menunode->has_children()) {

            if ($level == 1) {
                $class = 'dropdown';
            } else {
                $class = 'dropdown-submenu';
            }

            if ($menunode === $this->language) {
                $class .= ' langmenu';
            }
            $content = html_writer::start_tag('li', array('class' => $class));
            // If the child has menus render it as a sub menu.
            $submenucount++;
            if ($menunode->get_url() !== null) {
                $url = $menunode->get_url();
            } else {
                $url = '#cm_submenu_'.$submenucount;
            }
            $content .= html_writer::start_tag('a', array('href' => $url, 'class' => 'dropdown-toggle',
                    'data-toggle' => 'dropdown', 'title' => $menunode->get_title()));
            $content .= $menunode->get_text();
            if ($level == 1) {
                $content .= '<b class="caret"></b>';
            }
            $content .= '</a>';
            $content .= '<ul class="dropdown-menu">';
            foreach ($menunode->get_children() as $menunode) {
                $content .= $this->render_custom_menu_item($menunode, 0);
            }
            $content .= '</ul>';
        } else {
            $content = '<li>';
            // The node doesn't have children so produce a final menuitem.
            if ($menunode->get_url() !== null) {
                $url = $menunode->get_url();
            } else {
                $url = '#';
            }
            $content .= html_writer::link($url, $menunode->get_text(), array('title' => $menunode->get_title()));
        }
        return $content;
    }

    /**
     * Renders tabtree
     *
     * @param tabtree $tabtree
     * @return string
     */
    protected function render_tabtree(tabtree $tabtree) {
        if (empty($tabtree->subtree)) {
            return '';
        }
        $firstrow = $secondrow = '';
        foreach ($tabtree->subtree as $tab) {
            $firstrow .= $this->render($tab);
            if (($tab->selected || $tab->activated) && !empty($tab->subtree) && $tab->subtree !== array()) {
                $secondrow = $this->tabtree($tab->subtree);
            }
        }
        return html_writer::tag('ul', $firstrow, array('class' => 'nav nav-tabs')) . $secondrow;
    }

    /**
     * Renders tabobject (part of tabtree)
     *
     * This function is called from {@link core_renderer::render_tabtree()}
     * and also it calls itself when printing the $tabobject subtree recursively.
     *
     * @param tabobject $tabobject
     * @return string HTML fragment
     */
    protected function render_tabobject(tabobject $tab) {
        if ($tab->selected or $tab->activated) {
            return html_writer::tag('li', html_writer::tag('a', $tab->text), array('class' => 'active'));
        } else if ($tab->inactive) {
            return html_writer::tag('li', html_writer::tag('a', $tab->text), array('class' => 'disabled'));
        } else {
            if (!($tab->link instanceof moodle_url)) {
                // Backward compartibility when link was passed as quoted string.
                $link = "<a href=\"$tab->link\" title=\"$tab->title\">$tab->text</a>";
            } else {
                $link = html_writer::link($tab->link, $tab->text, array('title' => $tab->title));
            }
            return html_writer::tag('li', $link);
        }
    }

    public function bcublocks($region, $classes = array(), $tag = 'aside') {
        $classes = (array)$classes;
        $classes[] = 'block-region';
        $attributes = array(
            'id' => 'block-region-'.preg_replace('#[^a-zA-Z0-9_\-]+#', '-', $region),
            'class' => join(' ', $classes),
            'data-blockregion' => $region,
            'data-droptarget' => '1'
        );
        return html_writer::tag($tag, $this->blocks_for_region($region), $attributes);
    }
}

class theme_bcu_core_course_renderer extends core_course_renderer {
    protected function coursecat_coursebox(coursecat_helper $chelper, $course, $additionalclasses = '') {
        global $CFG, $OUTPUT;

        if ($OUTPUT->body_id() != 'page-site-index') {
            return parent::coursecat_coursebox($chelper, $course, $additionalclasses = '');
        }

        if (!isset($this->strings->summary)) {
            $this->strings->summary = get_string('summary');
        }
        if ($chelper->get_show_courses() <= self::COURSECAT_SHOW_COURSES_COUNT) {
            return '';
        }
        if ($course instanceof stdClass) {
            require_once($CFG->libdir. '/coursecatlib.php');
            $course = new course_in_list($course);
        }
        $content = '';
        $classes = trim($additionalclasses);

        if ($chelper->get_show_courses() < self::COURSECAT_SHOW_COURSES_EXPANDED) {
            $classes .= ' collapsed';
        }

        $content .= html_writer::start_tag('div', array('class' => 'span4 panel panel-default coursebox'));

        $content .= html_writer::start_tag('div', array('class' => 'panel-heading'));

        // Course name.
        $coursename = $chelper->get_course_formatted_name($course);
        $content .= html_writer::link(new moodle_url('/course/view.php', array('id' => $course->id)),
            $coursename, array('class' => $course->visible ? '' : 'dimmed', 'title' => $coursename));

        // If we display course in collapsed form but the course has summary or course contacts, display the link to the info page.
        if ($chelper->get_show_courses() < self::COURSECAT_SHOW_COURSES_EXPANDED) {
            if ($course->has_summary() || $course->has_course_contacts() || $course->has_course_overviewfiles()) {
                $url = new moodle_url('/course/info.php', array('id' => $course->id));
                $arrow = html_writer::tag('span', '', array('class' => 'glyphicon glyphicon-info-sign'));
                $content .= html_writer::link('#coursecollapse' . $course->id , '&nbsp;' . $arrow,
                        array('data-toggle' => 'collapse', 'data-parent' => '#frontpage-category-combo'));
            }
        }

        // Print enrolmenticons.
        if ($icons = enrol_get_course_info_icons($course)) {
            $content .= html_writer::start_tag('div', array('class' => 'enrolmenticons'));
            foreach ($icons as $pixicon) {
                $content .= $this->render($pixicon);
            }
            $content .= html_writer::end_tag('div'); // Enrolmenticons.
        }

        $content .= html_writer::end_tag('div'); // End .panel-heading.

        if ($chelper->get_show_courses() < self::COURSECAT_SHOW_COURSES_EXPANDED) {
            $content .= html_writer::start_tag('div', array('id' => 'coursecollapse' . $course->id,
                    'class' => 'panel-collapse collapse'));
        }

        $content .= html_writer::start_tag('div', array('class' => 'panel-body'));

        // This gets the course image or files.
        $content .= $this->coursecat_coursebox_content($chelper, $course);

        if ($chelper->get_show_courses() >= self::COURSECAT_SHOW_COURSES_EXPANDED) {
            $icondirection = 'left';
            if ('ltr' === get_string('thisdirection', 'langconfig')) {
                $icondirection = 'right';
            }
            $arrow = html_writer::tag('span', '', array('class' => ' fa-chevron-right fa glyphicon glyphicon-arrow-'
                    .$icondirection));
            $btn = html_writer::tag('span', get_string('course') . ' ' . $arrow, array('class' => 'coursequicklink'));
            $content .= html_writer::link(new moodle_url('/course/view.php',
                array('id' => $course->id)), $btn, array('class' => 'coursebtn btn btn-info btn-sm pull-right'));
        }

        $content .= html_writer::end_tag('div'); // End .panel-body.

        if ($chelper->get_show_courses() < self::COURSECAT_SHOW_COURSES_EXPANDED) {
            $content .= html_writer::end_tag('div'); // End .collapse.
        }

        $content .= html_writer::end_tag('div'); // End .panel.

        return $content;
    }

    protected function coursecat_coursebox_content(coursecat_helper $chelper, $course) {
        global $CFG;
        if ($chelper->get_show_courses() < self::COURSECAT_SHOW_COURSES_EXPANDED) {
            return '';
        }
        if ($course instanceof stdClass) {
            require_once($CFG->libdir. '/coursecatlib.php');
            $course = new course_in_list($course);
        }
        $content = '';

        // Display course overview files.
        $contentimages = $contentfiles = '';
        foreach ($course->get_course_overviewfiles() as $file) {
            $isimage = $file->is_valid_image();
            $url = file_encode_url("$CFG->wwwroot/pluginfile.php",
                    '/'. $file->get_contextid(). '/'. $file->get_component(). '/'.
                    $file->get_filearea(). $file->get_filepath(). $file->get_filename(), !$isimage);
            if ($isimage) {
                $contentimages .= html_writer::start_tag('div', array('class' => 'courseimage'));
                $link = new moodle_url('/course/view.php', array('id' => $course->id));
                $contentimages .= html_writer::link($link, html_writer::empty_tag('img', array('src' => $url)));
                $contentimages .= html_writer::end_tag('div');
            } else {
                $image = $this->output->pix_icon(file_file_icon($file, 24), $file->get_filename(), 'moodle');
                $filename = html_writer::tag('span', $image, array('class' => 'fp-icon')).
                        html_writer::tag('span', $file->get_filename(), array('class' => 'fp-filename'));
                $contentfiles .= html_writer::tag('span',
                        html_writer::link($url, $filename),
                        array('class' => 'coursefile fp-filename-icon'));
            }
        }
        $content .= $contentimages. $contentfiles;

        // Display course summary.
        if ($course->has_summary()) {
            $content .= html_writer::start_tag('div', array('class' => 'summary'));
            $summs = $chelper->get_course_formatted_summary($course, array('overflowdiv' => false, 'noclean' => true,
                    'para' => false));
            $summs = strip_tags($summs);
            $truncsum = strlen($summs) > 70 ? substr($summs, 0, 70)."..." : $summs;
            $content .= html_writer::tag('span', $truncsum, array('title' => $summs));
            $content .= html_writer::end_tag('div'); // Summary.
        }

        // Display course contacts. See course_in_list::get_course_contacts().
        if ($course->has_course_contacts()) {
            $content .= html_writer::start_tag('ul', array('class' => 'teachers'));
            foreach ($course->get_course_contacts() as $userid => $coursecontact) {
                $name = $coursecontact['rolename'].': '.
                        html_writer::link(new moodle_url('/user/view.php',
                                array('id' => $userid, 'course' => SITEID)),
                            $coursecontact['username']);
                $content .= html_writer::tag('li', $name);
            }
            $content .= html_writer::end_tag('ul'); // Teachers.
        }

        // Display course category if necessary (for example in search results).
        if ($chelper->get_show_courses() == self::COURSECAT_SHOW_COURSES_EXPANDED_WITH_CAT) {
            require_once($CFG->libdir. '/coursecatlib.php');
            if ($cat = coursecat::get($course->category, IGNORE_MISSING)) {
                $content .= html_writer::start_tag('div', array('class' => 'coursecat'));
                $content .= get_string('category').': '.
                        html_writer::link(new moodle_url('/course/index.php', array('categoryid' => $cat->id)),
                                $cat->get_formatted_name(), array('class' => $cat->visible ? '' : 'dimmed'));
                $content .= html_writer::end_tag('div'); // Coursecat.
            }
        }

        $content .= html_writer::tag('div', '', array('class' => 'boxfooter')); // Coursecat.

        return $content;
    }

    public function course_search_form($value = '', $format = 'plain') {
        static $count = 0;
        $formid = 'coursesearch';
        if ((++$count) > 1) {
            $formid .= $count;
        }
        $inputid = 'coursesearchbox';
        $inputsize = 30;

        if ($format === 'navbar') {
            $formid = 'coursesearchnavbar';
            $inputid = 'navsearchbox';
        }

        $strsearchcourses = get_string("searchcourses");
        $searchurl = new moodle_url('/course/search.php');

        $form = array('id' => $formid, 'action' => $searchurl, 'method' => 'get', 'class' => "form-inline", 'role' => 'form');
        $output = html_writer::start_tag('form', $form);
        $output .= html_writer::start_div('form-group');
        $output .= html_writer::tag('label', $strsearchcourses, array('for' => $inputid, 'class' => 'sr-only'));
        $search = array('type' => 'text', 'id' => $inputid, 'size' => $inputsize, 'name' => 'search',
                        'class' => 'form-control', 'value' => s($value), 'placeholder' => $strsearchcourses);
        $output .= html_writer::empty_tag('input', $search);
        $output .= html_writer::end_div(); // Close form-group.
        $button = array('type' => 'submit', 'class' => 'btn btn-default');
        $output .= html_writer::tag('button', get_string('go'), $button);
        $output .= html_writer::end_tag('form');

        return $output;
    }
    
    public function frontpage_my_courses() {
        global $USER, $CFG, $DB;
        $output = '';
        if (!isloggedin() or isguestuser()) {
            return '';
        }
    
        $courses = block_course_overview_get_sorted_courses();
        list($sortedcourses, $sitecourses, $totalcourses) = block_course_overview_get_sorted_courses();
        if (!empty($sortedcourses) || !empty($rcourses) || !empty($rhosts)) {

            $chelper = new coursecat_helper();
            if (count($courses) > $CFG->frontpagecourselimit) {
                // There are more enrolled courses than we can display, display link to 'My courses'.
                $totalcount = count($sortedcourses);
                $courses = array_slice($sortedcourses, 0, $CFG->frontpagecourselimit, true);
                $chelper->set_courses_display_options(array(
                        'viewmoreurl' => new moodle_url('/my/'),
                        'viewmoretext' => new lang_string('mycourses')
                    ));
            } else {
                // All enrolled courses are displayed, display link to 'All courses' if there are more courses in system.
                $chelper->set_courses_display_options(array(
                        'viewmoreurl' => new moodle_url('/course/index.php'),
                        'viewmoretext' => new lang_string('fulllistofcourses')
                    ));
                $totalcount = $DB->count_records('course') - 1;
            }
            $chelper->set_show_courses(self::COURSECAT_SHOW_COURSES_EXPANDED)->
                    set_attributes(array('class' => 'frontpage-course-list-enrolled'));
            $output .= $this->coursecat_courses($chelper, $sortedcourses, $totalcount);

            // MNET
            if (!empty($rcourses)) {
                // at the IDP, we know of all the remote courses
                $output .= html_writer::start_tag('div', array('class' => 'courses'));
                foreach ($rcourses as $course) {
                    $output .= $this->frontpage_remote_course($course);
                }
                $output .= html_writer::end_tag('div'); // .courses
            } elseif (!empty($rhosts)) {
                // non-IDP, we know of all the remote servers, but not courses
                $output .= html_writer::start_tag('div', array('class' => 'courses'));
                foreach ($rhosts as $host) {
                    $output .= $this->frontpage_remote_host($host);
                }
                $output .= html_writer::end_tag('div'); // .courses
            }
        }
        return $output;
    }
    
      /**
       * Return the navbar content so that it can be echoed out by the layout
       *
       * @return string XHTML navbar
       */
    public function navbar() {
        $items = $this->page->navbar->get_items();
        $itemcount = count($items);
        if ($itemcount === 0) {
            return '';
        }

        $htmlblocks = array();
        // Iterate the navarray and display each node.
        $separator = get_separator();
        for ($i = 0; $i < $itemcount; $i++) {
            $item = $items[$i];
            $item->hideicon = true;
            if ($i === 0) {
                $content = html_writer::tag('li', $this->render($item));
            } else {
                $content = html_writer::tag('li', $separator.$this->render($item));
            }
            $htmlblocks[] = $content;
        }

        // Accessibility: heading for navbar list  (MDL-20446).
        $navbarcontent = html_writer::tag('span', get_string('pagepath'), array('class' => 'accesshide'));
        $navbarcontent .= html_writer::tag('ul', join('', $htmlblocks), array('role' => 'navigation'));
        return $navbarcontent;
    }

    /**
     * Renders a navigation node object.
     *
     * @param navigation_node $item The navigation node to render.
     * @return string HTML fragment
     */
    protected function render_navigation_node(navigation_node $item) {
        $content = $item->get_content();
        $title = $item->get_title();
        if ($item->icon instanceof renderable && !$item->hideicon) {
            $icon = $this->render($item->icon);
            $content = $icon.$content; // Use CSS for spacing of icons.
        }
        if ($item->helpbutton !== null) {
            $content = trim($item->helpbutton).html_writer::tag('span', $content, array('class' => 'clearhelpbutton',
                    'tabindex' => '0'));
        }
        if ($content === '') {
            return '';
        }
        if ($item->action instanceof action_link) {
            $link = $item->action;
            if ($item->hidden) {
                $link->add_class('dimmed');
            }
            if (!empty($content)) {
                // Providing there is content we will use that for the link content.
                $link->text = $content;
            }
            $content = $this->render($link);
        } else if ($item->action instanceof moodle_url) {
            $attributes = array();
            if ($title !== '') {
                $attributes['title'] = $title;
            }
            if ($item->hidden) {
                $attributes['class'] = 'dimmed_text';
            }
            $content = html_writer::link($item->action, $content, $attributes);

        } else if (is_string($item->action) || empty($item->action)) {
            $attributes = array('tabindex' => '0'); // Add tab support to span but still maintain character stream sequence.
            if ($title !== '') {
                $attributes['title'] = $title;
            }
            if ($item->hidden) {
                $attributes['class'] = 'dimmed_text';
            }
            $content = html_writer::tag('span', $content, $attributes);
        }
        return $content;
    }
}
