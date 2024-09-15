<?php

/*
 * Plugin Name:       Mamun Theme Option.
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Hasan
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

function mamun_settings_section(){
    // register a new section in the general page
    add_settings_section(
        'mamun_settings_section_id', //section id
        'Demo Options', //section title
        'demo_settings_action_callback', //callback
        'general'//page
    );
/*=========================================================================================
* Registered a new field in the "mamun_settings_section_id" section, inside the general page
=============================================================================================*/ 
add_settings_field(
    'mamun_settings_field_id', //id
    'Menu', //title
    'menu_display_callback', //callback
    'general', //page
    'mamun_settings_section_id',//section id
    array(
        'please Check it for show menu'
    )
);
/*=========================================================================================
* Registered a new setting in for general page
=============================================================================================*/ 
register_setting('general','display_menu');


}
/*============================================================
*register mamun_settings_section to the admin_init action hook  
===============================================================*/  
add_action('admin_init','mamun_settings_section');

/*============================================================
*Call back functon
===============================================================*/ 


function demo_settings_action_callback(){
    echo "Demo Option Description";
}


function menu_display_callback($args){
    ?>
    <p>
        <label for="display_menu"><?php echo $args[0];?></label>
    </p>
    <p>
        <input type="checkbox" name="display_menu" value="1" <?php echo checked(1 , get_option('display_menu') ,false);?>>
       
    </p>
    <?php
}






?>