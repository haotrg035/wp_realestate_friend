<?php

/**
 * Plugin Name: Realestate Friend
 * Plugin URI: https://example.com/plugins/the-basics/
 * Description: Implement realestate manager for wordpress.
 * Version: 1.0.0
 * Requires at least: 5.2
 * Requires PHP: 7.2
 * Author: Truong Nhut Hao
 * Author URI: https://author.example.com/
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: my-basics-plugin
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

// Primary plugin prefix
define('RF_PREFIX', '_rstfrd');

/**
 * Register activating and deactivating handles
 */
function active_Realestate_Friend()
{
    require_once plugin_dir_path(__FILE__) . 'includes/realestate_friend_activator.php';
    Realestate_Friend_Activator::activate();
}

function deactivevate_Realestate_Friend()
{
    require_once plugin_dir_path(__FILE__) . 'includes/realestate_friend_deactivator.php';
    Realestate_Friend_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'active_Realestate_Friend');
register_deactivation_hook(__FILE__, 'deactivevate_Realestate_Friend');

/**
 * Core plugin class
 */
require_once plugin_dir_path(__FILE__) . 'includes/realestate_friend.php';

function run_Realestate_Friend()
{
    $realestate_friend = new Realestate_Friend();
    $realestate_friend->run();
}
