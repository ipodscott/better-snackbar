<?php

/*
Plugin Name: Better Snack Bar
Plugin URI: https://scottsaunders.design
Description: Moves the snack bar to the top right vs. the bottom left.
Version: 1.0
Author: Scott Saunders
Author URI: https://scottsaunders.design
License: GPLv2 or later
Text Domain: scottsaunders.design
*/

function snackbar_stuff()
{ 
  wp_enqueue_style( 'admin', plugin_dir_url( __FILE__ ) . 'snackbar.css',true,'1.1','all');
}
add_action('admin_footer', 'snackbar_stuff');

if( strpos( $_SERVER['REQUEST_URI'], 'action=edit') ) {

	function add_view_page_layer()
	{
		require_once( plugin_dir_path( __FILE__ ) . '/view_page_link.php');
	}
	
	add_action('admin_footer', 'add_view_page_layer');
	}
	
	