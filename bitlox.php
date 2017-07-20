<?php

/**
 * Plugin Name: BitLox Custom Plugin
 * Plugin URI: http://bitlox.com
 * Description: This plugin adds custom functionality.
 * Version: 1.0.0
 * Author: William Oney
 * Author URI: https://www.facebook.com/william.oney
 * License: GPL2
 */

add_action( 'wp_enqueue_scripts', 'bitlox_enqueued_assets' );

function bitlox_enqueued_assets() {
	wp_enqueue_style( 'bitlox', plugin_dir_url( __FILE__ ) . '/bitlox.css' );
	wp_enqueue_script( 'bitlox', plugin_dir_url( __FILE__ ) . '/bitlox.js', array( 'jquery' ), '1.0', true );
}

?>
