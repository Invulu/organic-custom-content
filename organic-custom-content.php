<?php
/**
 * Plugin Name: Organic Custom Content
 * Plugin URI: http://organicthemes.com
 * Description: Registers Custom Post Types for Organic Themes
 * Version: 1.0
 * GitHub Plugin URI: https://github.com/Invulu/organic-custom-content
 * Author: Organic Themes
 * Author URI: http://organicthemes.com
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: organic-custom-content
 *
 * @package Organic Custom Content
 * @since Organic Custom Content 1.0
 */
// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) { exit; }

// Initialize Plugin
if ( ! function_exists( 'organic_cc_init' ) ) {
	function organic_cc_init() {

		// Include Custom Content Functions.
		include_once plugin_dir_path( __FILE__ ) . 'organic-custom-content-functions.php';

    // Find out which parent theme is currently Active
    $organic_cc_current_theme = organic_cc_which_theme_is_active();


    // Run functions for active theme
    switch ($organic_cc_current_theme) {
      case 'organic-entertainer':
				
        // Tour Date CPT
        organic_cc_register_cpt_tour_date();

        break;

      default:

    }

  }
}
add_action( 'init', 'organic_cc_init', 20 );
