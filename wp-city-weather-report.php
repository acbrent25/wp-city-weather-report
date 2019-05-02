<?php 
/*
Plugin Name: WP City Weather Report 
Description: City weather report widget
Version: 1.0
Author: Adam Champagne
Auther URI: https://adamchampagne.com/
*/

 // Exit if Accessed Directly
 if(!defined('ABSPATH')){
     exit;
 }

 // Load Scripts
 require_once(plugin_dir_path(__FILE__) . '/includes/wp-city-weather-report-scripts.php');

  // Load Class
  require_once(plugin_dir_path(__FILE__) . '/includes/wp-city-weather-report-class.php');



