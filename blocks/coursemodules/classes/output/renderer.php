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
 * Coursemodules block rendrer
 *
 * @package    block_coursemodules
 * @copyright  2022 https://lingellearning.com/
 * @author     Veeranki Nagesh <veeranki.nagesh@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_coursemodules\output;

defined('MOODLE_INTERNAL') || die;

use plugin_renderer_base;

/**
 * coursemodules block renderer
 *
 * @package    block_coursemodules
 * @copyright  2018 Mihail Geshoski <mihail@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class renderer extends plugin_renderer_base {

    /**
     * Return the main content for the block coursemodules.
     *
     * @param coursemodules $coursemodules The coursemodules renderable
     * @return string HTML string
     */
    public function render_coursemodules(coursemodules $coursemodules) {
        return $this->render_from_template('block_coursemodules/coursemodules', $coursemodules->export_for_template($this));
    }
}
