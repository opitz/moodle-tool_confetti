<?php
namespace tool_confetti\hook;

use core\hook\output\before_standard_head_html_generation;

/**
 * Hooks for tool_confetti.
 *
 * @package    tool_confetti
 */
class hooks {

    /**
     * Add confetti JS to every page if enabled.
     *
     * @param before_standard_head_html_generation $hook
     */
    public static function before_standard_head_html_generation(
        before_standard_head_html_generation $hook
    ): void {
        global $PAGE;

        // Only run if enabled in settings.
        if (!get_config('tool_confetti', 'enabled')) {
            return;
        }

        // Require our AMD module.
        $PAGE->requires->js_call_amd('tool_confetti/confetti', 'init');
    }
}
