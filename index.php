<?php
// This file is part of Moodle - http://moodle.org/.
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
 * Confetti index page
 *
 * @package    tool_confetti
 */

require(__DIR__ . '/../../../config.php');
require_login();

// Ensure user has the capability.
$context = context_system::instance();
require_capability('tool/confetti:use', $context);

$PAGE->set_url(new moodle_url('/admin/tool/confetti/index.php'));
$PAGE->set_context($context);
$PAGE->set_title(get_string('pluginname', 'tool_confetti'));
$PAGE->set_heading(get_string('pluginname', 'tool_confetti'));

// Require our JS module.
$PAGE->requires->js_call_amd('tool_confetti/confetti', 'init');

echo $OUTPUT->header();

echo html_writer::link(
    '#',
    get_string('throwconfetti', 'tool_confetti'),
    ['class' => 'btn btn-primary confetti']
);

echo $OUTPUT->footer();