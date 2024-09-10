<?php 
/*

* Plugin Name: Blood Donation
* Plugin URL: 
* Description: Use this Shortcode [mb_personinfos] For get Person infos
* Version: 1.0.0
* Requires at least: 5.2
* Requires PHP: 7.2
* Author: Hadi Jaman
* Author URI: https://www.facebook.com/md.doulot.3

*/



include(plugin_dir_path(__FILE__).'globalsetting.php');

//Custom Post Register
include(plugin_dir_path(__FILE__).'custom_type_personinfo.php');


//Taxonomy Blood Group
include(plugin_dir_path(__FILE__).'taxonomy_bgroup.php');


//Meta BOxes
include(plugin_dir_path(__FILE__).'metabox.php');

//Shortcode
include(plugin_dir_path(__FILE__).'shortcode.php');
//Submenu
include(plugin_dir_path(__FILE__).'submenu.php');
//Topmenu
include(plugin_dir_path(__FILE__).'topmenu.php');
//Option APi
include(plugin_dir_path(__FILE__).'option_api.php');
//Setting API
include(plugin_dir_path(__FILE__).'setting_api.php');

    
?>