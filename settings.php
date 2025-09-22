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
 * Settings for tool_confetti.
 *
 * @package    tool_confetti
 * @copyright  2025 Your Name
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) { // Needs this condition or upgrade will break.
    $settings = new admin_settingpage(
        'tool_confetti_settings',
        get_string('pluginname', 'tool_confetti')
    );

    // Enable/disable confetti system-wide.
    $settings->add(new admin_setting_configcheckbox(
        'tool_confetti/enabled',
        get_string('enabled', 'tool_confetti'),
        get_string('enabled_desc', 'tool_confetti'),
        1 // Default: enabled.
    ));

    // Add the page to the "Tools" section in admin menu.
    $ADMIN->add('tools', $settings);
}
