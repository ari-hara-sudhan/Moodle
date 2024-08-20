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
 * Plugin administration pages are defined here.
 *
 * @package     local_levitate
 * @copyright   2023, Human Logic Software LLC
 * @author     Sreenu Malae <sreenivas@human-logic.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('../../config.php');
global $CFG, $DB, $PAGE;
require_once($CFG->dirroot . '/local/levitate/lib.php');
require_login();

if (!has_capability('local/levitate:view_levitate_analytics', context_system::instance())) {
         \core\notification::add(
               get_string('analytics_capability', 'local_levitate'),
                \core\notification::ERROR
            );
    redirect(new moodle_url('/my/') );
}

$response = local_levitate_curlcall('mod_levitateserver_get_analytics');
echo $response;
exit;
