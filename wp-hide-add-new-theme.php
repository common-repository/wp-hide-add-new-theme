<?php
/*
* Plugin Name:      WP Hide Add New Theme
* Plugin URI: 		https://www.it-paths.com/wp-hide-add-new-theme/
* Author: 			Ismail Ashraf
* Author URI: 		https://it-paths.com
* Description: 		This plugin will hide option of add new theme,plugin and editor. So that no one can install new themes or add new plugins or code in your WordPress website by using your dashboard
* Version: 1.0
* License:   		GPL-2.0+
* License URI: 		http://www.gnu.org/licenses/gpl-2.0.txt 
*/
//If someone try to access this plugin directly, this function take back to him
if(!defined('ABSPATH')){
	return;
}
//If will disable add new themes, plugins and editor
if( !defined('DISALLOW_FILE_MODS') ){
	define( 'DISALLOW_FILE_MODS', true );
}
//function for reaching directly on setting page
function wp_hide_add_new_theme_support($link){
	$support_link = '<a href="https://www.it-paths.com/wp-hide-add-new-theme/" target="_blank">Support</a>';
	array_push($link, $setting_link , $support_link);
	return $link;
}
$filtername = "plugin_action_links_" . plugin_basename( __FILE__ );
add_filter( $filtername, 'wp_hide_add_new_theme_support' );