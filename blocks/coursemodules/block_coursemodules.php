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

 * @package    block_coursemodules
 * @copyright  2022 https://lingellearning.com/
 * @author      Veeranki Nagesh <veeranki.nagesh@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();
/**
 * Displays the current user's profile information.
 *
 * @copyright  2022 https://lingellearning.com/
 * @author     Veeranki Nagesh <veeranki.nagesh@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_coursemodules extends block_base {
    /**
     * block initializations
     */
    public function init() {
        $this->title = get_string('pluginname', 'block_coursemodules');
    }

    /**
     * block contents
     *
     * @return object
     */
    public function get_content() {
        global $CFG, $COURSE, $USER;
        $record = new stdClass();
        $coursemodules = array();
        $modinfo = get_fast_modinfo($COURSE);
        $completion = new completion_info($COURSE);
        foreach ($modinfo->cms as $key => $cm) {
            $current = $completion->get_data($cm, false, $USER->id);
            if (!$cm->deletioninprogress && $cm->get_user_visible()) {
                $record->id         = $cm->id;
                $record->name       = $cm->name;
                $record->module     = $cm->modname;
                $record->completion = $current->completionstate;
                $record->added      = date('d-M-Y', $cm->added);
                $record->viewurl    = $CFG->wwwroot.'/mod/'.$cm->modname.'/view.php?id='.$cm->id;
                $coursemodules[]    = $record;
                unset($record);
            }
        }
        if ($this->content !== null) {
            return $this->content;
        }
        if (!isloggedin() or isguestuser()) {
            return;
        }
        $renderable = new \block_coursemodules\output\coursemodules($coursemodules);
        $renderer = $this->page->get_renderer('block_coursemodules');
        $this->content = new stdClass();
        $this->content->text = $renderer->render($renderable);
        $this->content->footer = '';
        return $this->content;
    }

    /**
     * allow the block to have a configuration page
     *
     * @return boolean
     */
    public function has_config() {
        return false;
    }

    /**
     * allow more than one instance of the block on a page
     * allow more than one instance on a page ?
     * @return boolean
     */
    public function instance_allow_multiple() {
        return true;
    }

    /**
     * allow instances to have their own configuration
     * allow instances to have their own configuration
     * @return boolean
     */
    public function instance_allow_config() {
        return false;
    }

    /**
     * instance specialisations (must have instance allow config true)
     *
     */
    public function specialization() {
    }

    /**
     * locations where block can be displayed
     *
     * @return array
     */
    public function applicable_formats() {
        return array('course-view' => true);
    }

    /**
     * post install configurations
     *
     */
    public function after_install() {
    }

    /**
     * post delete configurations
     *
     */
    public function before_delete() {
    }


}
