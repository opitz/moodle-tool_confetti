<?php
defined('MOODLE_INTERNAL') || die();

return [
    \core\hook\output\before_standard_head_html_generation::class => [
        [\tool_confetti\hooks::class, 'before_standard_head_html_generation'],
    ],
];
