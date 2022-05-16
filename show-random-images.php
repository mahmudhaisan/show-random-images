<?php

/**
 * Plugin Name: Show Random Images
 * Plugin URI: http://mahmudhaisan.com/
 * Description: Random imgages on click
 * Version: 1.0
 * Author: Mahmud haisan
 * Author URI: https://github.com/mahmudhaisan
 * Developer: Mahmud Haisan
 * Developer URI: https://github.com/mahmudhaisan
 * Text Domain: random493
 * Domain Path: /languages
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */


if (!defined('ABSPATH')) {
    die;
}

define("PLUGINS_PATH", plugin_dir_path(__FILE__));
define("PLUGINS_PATH_ASSETS", plugin_dir_url(__FILE__) . 'assets/');




require_once(plugin_dir_path(__FILE__) . 'includes/enqueue-files.php');
require_once(plugin_dir_path(__FILE__) . 'includes/backend-options.php');
require_once(plugin_dir_path(__FILE__) . 'includes/frontend-parts.php');