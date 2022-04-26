<?php

/**
 * @package 
 */
/*
Plugin Name:points_socialmedia
Plugin URI: 
Description:Used for adding
Version: 4.2.2
Author: Automattic
Author URI: https://automattic.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: akismet
*/

function my_points_shortcode() {
    ob_start();
   include_once("user/login.php");
    return ob_get_clean();   
} 
add_shortcode( 'my_points_shortcode', 'my_points_shortcode' );
function my_pointsad_shortcode() {
    ob_start();
   include_once("admin/dashboard.php");
    return ob_get_clean();   
   
} 
add_shortcode( 'my_pointsad_shortcode', 'my_pointsad_shortcode' );
function my_pointsedit_shortcode() {
    ob_start();
   include_once("admin/edit.php");
    //return $X;
    return ob_get_clean(); 
} 
add_shortcode( 'my_pointsedit_shortcode', 'my_pointsedit_shortcode' );
function my_pointsuserdashboard_shortcode() {
    ob_start();
  include_once("user/dashboard.php");
    return  ob_get_clean(); 
} 
add_shortcode( 'my_pointsuserdashboard_shortcode', 'my_pointsuserdashboard_shortcode' );
function my_pointslogout_shortcode() {
    ob_start();
  include_once("user/logout.php");
    return ob_get_clean(); 
} 
add_shortcode( 'my_pointslogout_shortcode', 'my_pointslogout_shortcode' );
function my_pointsdelete_shortcode() {
    ob_start();
  include_once("admin/delete.php");
    return ob_get_clean(); 
} 
add_shortcode( 'my_pointsdelete_shortcode', 'my_pointsdelete_shortcode' );
function my_pointsview_shortcode() {
    ob_start();
  include_once("admin/view.php");
    return ob_get_clean(); 
} 
add_shortcode( 'my_pointsview_shortcode', 'my_pointsview_shortcode' );
function my_pointsacceptfriend_shortcode() {
    ob_start();
  include_once("user/acceptfriendrequest.php");
    return ob_get_clean(); 
} 
add_shortcode( 'my_pointsacceptfriend_shortcode', 'my_pointsacceptfriend_shortcode' );

function my_pointsupdate_shortcode() {
    ob_start();
  include_once("admin/pointsupdate.php");
    return ob_get_clean(); 
} 
add_shortcode( 'my_pointsupdate_shortcode', 'my_pointsupdate_shortcode' );
function my_pointsprofile_shortcode() {
    ob_start();
  include_once("user/profile.php");
    return ob_get_clean(); 
} 
add_shortcode( 'my_pointsprofile_shortcode', 'my_pointsprofile_shortcode' );
function my_pointsunfriend_shortcode() {
    ob_start();
  include_once("user/unfriend.php");
    return ob_get_clean(); 
} 
add_shortcode( 'my_pointsunfriend_shortcode', 'my_pointsunfriend_shortcode' );

function my_pointsfriendrequest_shortcode() {
    ob_start();
  include_once("user/friendrequest.php");
    return ob_get_clean(); 
} 
add_shortcode( 'my_pointsfriendrequest_shortcode', 'my_pointsfriendrequest_shortcode' );


?>