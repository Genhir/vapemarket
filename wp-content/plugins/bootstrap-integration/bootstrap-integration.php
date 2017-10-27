<?php
/**
 * Plugin Name: Bootstrap Integration
 * Plugin URI: http://www.jumptoweb.com
 * Description: For those templates which don't came with bootstrap libraries, this plugin integrate the style and the script (version 3.3.6) with your wordpress installation. 
 * Version: 2.1
 * Author: Manuel Costales
 * Author URI: http://www.manuelcostales.com
 */
defined( 'ABSPATH' ) or die( 'Plugin file cannot be accessed directly.' );
/*add javascripts to the header*/
add_action('wp_head', 'add_bootstrap_mc');
function add_bootstrap_mc() {
	wp_enqueue_style( 'bootstrap_style',  plugins_url( 'css/bootstrap.min.css', __FILE__ ) );
	wp_enqueue_script( 'bootstrap_script', plugins_url( 'js/bootstrap.min.js', __FILE__ ) );
}
