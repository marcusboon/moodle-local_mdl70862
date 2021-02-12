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
 * Edit the grade options for an individual grade item
 *
 * @package   local_mdl70862
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('../../config.php');
require_once($CFG->dirroot . '/grade/lib.php');

$courseid = required_param('courseid', PARAM_INT);

$url = new moodle_url('/local/mdl70862/index.php', array('courseid' => $courseid));
$PAGE->set_url($url);

if (!$course = $DB->get_record('course', array('id' => $courseid))) {
    print_error('invalidcourseid');
}

require_login($course);
$context = context_course::instance($course->id);

$heading = get_string('mdl70862', 'local_mdl70862');

$PAGE->navbar->add($heading);
print_grade_page_head($courseid, 'mdl70862', 'mdl70862', get_string('mdl70862', 'local_mdl70862'));
echo $OUTPUT->footer();
