<?php


function my_pointsview_shortcode() {
    ob_start();
  
  include_once("admin/dashboard.php");
   //include_once("user/dashboard.php");
   //include_once("db/connection.php");
   //include_once("admin/dashboard.php");
    return ob_get_clean();   
} 
add_shortcode( 'my_pointsview_shortcode', 'my_pointsview_shortcode' );
//include_once("plugintable.php");
//register_activation_hook(__FILE__,"plugin_table");
?>