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
 * Lib file for the local_mdl70862 plugin
 *
 * @package     local_mdl70862
 * @author      Marcus Boon<marcus@catalyst-au.net>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot.'/grade/lib.php');

/**
 * Plugin hook to inject new tabs in the gradebook header.
 *
 * @param array $plugininfo Contains the plugin info
 * @param int   $courseid   The ID of the course
 *
 * @return array
 */
function local_mdl70862_extend_gradebook_plugininfo($plugininfo, $courseid) {

    $plugininfo['strings']['mdl70862'] = get_string('mdl70862', 'local_mdl70862');

    $name = 'mdl70862';
    $url = new moodle_url(
        '/local/mdl70862/index.php',
        ['courseid' => $courseid]
    );
    $displayname = 'New tab from MDL-70862';

    $plugininfo['mdl70862'] = new grade_plugin_info($name, $url, $displayname);

    return $plugininfo;
}
