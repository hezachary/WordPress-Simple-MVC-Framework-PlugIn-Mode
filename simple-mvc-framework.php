<?php
/**
 * @package Simple MVC Framework
 */
/*
Plugin Name: Simple MVC Framework
Plugin URI: http://github.com/hezachary/WordPress-Simple-MVC-Framework
Description: A simple MVC framework for Wordpress, support static class methods, merged with Smarty Template.
Version: 0.92
Author: Zhehai He
Author URI: http://hezachary.wordpress.com/
License: MIT
*/

define('SIMPLE_MVC_FRAMEWORK', '2.5.3');
define('SIMPLE_MVC_FRAMEWORK_PLUGIN_URL', plugin_dir_url( __FILE__ ));

function simple_mvc_framework() {
	require_once(dirname(__FILE__).'/mvc.ini.php');
}
add_action( 'simple_mvc_framework', 'simple_mvc_framework' );
