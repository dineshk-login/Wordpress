
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

function my_form_shortcode() {
    ob_start();
    include_once("contactform.php");
    return ob_get_clean();   
} 
add_shortcode( 'my_form_shortcode', 'my_form_shortcode' );

//include_once("plugintable.php");
//register_activation_hook(__FILE__,"plugin_table");
?>
