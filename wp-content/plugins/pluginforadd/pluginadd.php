
<?php

/**
 * @package 
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

add_shortcode( 'add_form', 'input_fields' ); 
function input_fields() {
    include_once("contactform.php");
}
?>