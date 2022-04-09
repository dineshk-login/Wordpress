<?php
/**
 * @package Akismet
 */
/*
Plugin Name: Plugin for add
Plugin URI: 
Description:Used for adding
Version: 4.2.2
Author: Automattic
Author URI: https://automattic.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: akismet
*/

add_shortcode('hello_world','hello_world_function');
function  hello_world_function ()
{
	return  "Hello world";
}
?>