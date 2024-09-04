<?php 
/*

* Plugin Name: Blood Donation
* Plugin URL: 
* Description: Simple Blood Donation System
* Version: 1.0.0
* Requires at least: 5.2
* Requires PHP: 7.2
* Author: Hadi Jaman
* Author URI: https://www.facebook.com/md.doulot.3

*/

if(!function_exists('mblooddonatonlist')){
function mblooddonatonlist($atts = array(),$content=null,$tag){

    array_change_key_case((array)$atts,CASE_LOWER);
    $selfcontent="<div class='primary'>";
    $selfcontent.=apply_filters('the_content',$content);

    $selfcontent.="</div>";
   return $selfcontent;
}
}

if(!shortcode_exists('mbinfolist')){
    add_shortcode( 'mbinfolist','mblooddonatonlist');  
}


?>