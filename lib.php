<?php
/**
 * Library functions for local_adaptive_pathway
 *
 * @package    local_adaptive_pathway
 * @copyright  2026 John Mulama <johnmulama001@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     John Mulama - Senior Software Engineer (johnmulama001@gmail.com)
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Extend global navigation.
 *
 * @param global_navigation $navigation
 */
function local_adaptive_pathway_extend_navigation(global_navigation $navigation) {
    global $CFG, $PAGE;
    
    // Add navigation items if needed.
    if (isloggedin() && !isguestuser()) {
        $node = $navigation->add(
            get_string('pluginname', 'local_adaptive_pathway'),
            new moodle_url('/local/adaptive_pathway/index.php'),
            navigation_node::TYPE_CUSTOM,
            null,
            'local_adaptive_pathway',
            new pix_icon('i/settings', '')
        );
    }
}

/**
 * Extend settings navigation.
 *
 * @param settings_navigation $settingsnav
 * @param context $context
 */
function local_adaptive_pathway_extend_settings_navigation(settings_navigation $settingsnav, context $context) {
    // Add settings navigation if needed.
}
