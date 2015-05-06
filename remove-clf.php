<?php 
/*
Plugin Name: Remove CLF
Plugin URI: 
Description: 
Author: Enej
Version: 0.1
*/

add_action( 'after_setup_theme', 'remove_clf', 13 );

function remove_clf(){
	
	remove_theme_support( 'clf' );
}
