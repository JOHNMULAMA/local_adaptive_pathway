<?php
/**
 * Settings for local_adaptive_pathway
 *
 * @package    local_adaptive_pathway
 * @copyright  2026 John Mulama <johnmulama001@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     John Mulama - Senior Software Engineer (johnmulama001@gmail.com)
 */

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    $settings = new admin_settingpage('local_adaptive_pathway_settings', get_string('pluginname', 'local_adaptive_pathway'));

    // General settings heading.
    $settings->add(new admin_setting_heading(
        'local_adaptive_pathway/general',
        get_string('generalsettings', 'local_adaptive_pathway'),
        ''
    ));

    // Enable/disable setting.
    $settings->add(new admin_setting_configcheckbox(
        'local_adaptive_pathway/enabled',
        get_string('enabled', 'local_adaptive_pathway'),
        get_string('enabled', 'local_adaptive_pathway'),
        1
    ));

    $ADMIN->add('localplugins', $settings);
}
