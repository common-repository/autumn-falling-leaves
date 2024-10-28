<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.wpmaniax.com
 * @since             1.0.0
 * @package           Autumn_Falling_Leaves
 *
 * @wordpress-plugin
 * Plugin Name:       Autumn Falling Leaves
 * Plugin URI:        http://www.wpmaniax.com
 * Description:       Add nice looking animation effect of falling leaves to your WP site
 * Version:           1.0.1
 * Author:            WP Maniax
 * Author URI:        http://www.wpmaniax.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       autumn-falling-leaves
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-autumn-falling-leaves-activator.php
 */
function activate_autumn_falling_leaves() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-autumn-falling-leaves-activator.php';
	Autumn_Falling_Leaves_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-autumn-falling-leaves-deactivator.php
 */
function deactivate_autumn_falling_leaves() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-autumn-falling-leaves-deactivator.php';
	Autumn_Falling_Leaves_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_autumn_falling_leaves' );
register_deactivation_hook( __FILE__, 'deactivate_autumn_falling_leaves' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-autumn-falling-leaves.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_autumn_falling_leaves() {

	$plugin = new Autumn_Falling_Leaves();
	$plugin->run();

}
run_autumn_falling_leaves();
