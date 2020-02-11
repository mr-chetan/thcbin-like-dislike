<?php
/**
 * @package           thcbin-like-dislike
 * @author            Chetan Bhalothia
 * @copyright         2020 Chetan or THCBin
 * @license           GPL-3.0-or-later
 * @version			  1.0.0
 * @wordpress-plugin
 * Plugin Name:       THCBin Like & Dislike
 * Plugin URI:        http://thcb.in/thcbin-plugin
 * Description:       This plugin use for like dislike in post.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Chetan Bhalothia
 * Author URI:        http://thcb.in
 * Text Domain:       thcbin-like-dislike
 * License:           GPL v3 or later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 */
// For Devlopment Docmuntes
// IF this file is Called Directly, abort.
if(!defined('WPINC')){die;}
// Define Constent
if(!defined('THCBIN_PLUGIN_VERSION')){
	define('THCBIN_PLUGIN_VERSION', '1.0.0');
}
if(!defined('PLUGIN_DIR_THCBIN')){
	define('PLUGIN_DIR_THCBIN', plugin_dir_url( __FILE__ ));
}
//https://developer.wordpress.org/plugins/
require (plugin_dir_path( __FILE__ ) .'inc/frontend.php');
require (plugin_dir_path( __FILE__ ) .'frontend.php');
require (plugin_dir_path( __FILE__ ) .'admin_menu.php');
require (plugin_dir_path( __FILE__ ) .'inc/settings.php');
require (plugin_dir_path( __FILE__ ) .'inc/count_like_dislike.php');
// Ajax
require (plugin_dir_path( __FILE__ ) .'inc/ajax.php');
// Database
require (plugin_dir_path( __FILE__ ) .'inc/wpdp.php');
register_activation_hook(__FILE__,'thcbin_like_dislike_db');
?>