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