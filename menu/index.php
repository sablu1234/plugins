<?php
/*
*plugin name: menu
*/


if(!function_exists('menu_area')){
    function menu_area(){
        add_menu_page(
            'The Menu',
            'Menu MY',
            'manage_options',
            'my_menu',
            'menu_callback',
            'dashicons-phone',
            50
        );
        add_submenu_page(
            'my_menu',                // Parent menu slug
            'Sub Menu Title',          // Page title
            'Sub Menu',                // Submenu title
            'manage_options',          // Capability
            'my_sub_menu',             // Submenu slug
            'submenu_callback'         // Callback function for submenu
        );
        
    }
}
//TOp menu Callback Funciton
function menu_callback(){
    echo "<h1> welcome to menu</h1>";
}
//Submenu Callback Function
function submenu_callback(){
    ?>
    <h1><?php echo get_admin_page_title();?></h1>
    
    <?php
}

add_action('admin_menu','menu_area');
//setting api
include plugin_dir_path(__FILE__).'setting_api.php';

include plugin_dir_path(__FILE__).'shortcode.php';



//menu by nazmul vai

/**
 * Register a custom menu page.
 * 
 */

 if(!function_exists('custom_add_menu_page')){

    function custom_add_menu_page() {
    // Create the top-level menu
    add_menu_page(
        __( 'Admin Menu', 'textdomain' ),
        'Admin Menu',
        'manage_options',
        'admin-menu',  // Correct slug
        'my_custom_menu_page',
        'dashicons-admin-users',
        3
    );

    // Create the submenu under the top-level menu
    add_submenu_page(
        'admin-menu',  // Correct slug
        __( 'Sub Menu', 'textdomain' ),
        __( 'Sub Menu', 'textdomain' ),
        'manage_options',
        'books-shortcode-ref',
        'books_ref_page_callback'
    );

 }

}
add_action( 'admin_menu', 'custom_add_menu_page' );


// Display the custom admin menu page
 
if(!function_exists('my_custom_menu_page')){

    function my_custom_menu_page() {
    ?>

    <div class='admin_header_menu'>

 <ul>
        <li><a href="">home</a></li>
        <li><a href="">about</a></li>
        <li><a href="">contact</a></li>
        <li><a href="">faq</a></li>
        <li><a href="">product</a></li>
        <li><a href="">clients</a></li>
        <li><a href="">buyers</a></li>
    </ul>
</div>
    <?php
}
}



/**
 * Display the submenu page content
 */


 if(!function_exists('books_ref_page_callback')){
    function books_ref_page_callback() {
 
    // Output HTML directly
    ?>
    <div class='header_menu'>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Service</a>
                <ul>
                    <li><a href="">Dropdown</a></li>
                    <li><a href="">Dropdown</a></li>
                    <li><a href="">Dropdown</a></li>
                    <li><a href="">Dropdown</a>
                        <ul>
                            <li><a href="">Sub Dropdown</a></li>
                            <li><a href="">Sub Dropdown</a></li>
                            <li><a href="">Sub Dropdown</a></li>
                            <li><a href="">Sub Dropdown</a></li>
                        </ul>
                    </li>
                    <li><a href="">Dropdown</a></li>
                    <li><a href="">Dropdown</a></li>
                    <li><a href="">Dropdown</a></li>
                </ul>
            </li>
            <li><a href="">Contact</a></li>
            <li><a href="">FAQ</a></li>
            <li><a href="">Product</a></li>
            <li><a href="">Clients</a></li>
            <li><a href="">Buyers</a></li>
        </ul>
    </div>
    <?php

 }
}


add_action('admin_enqueue_scripts','all_custom_css_link');
function all_custom_css_link(){
    $plugin_dir_url = plugin_dir_url(__FILE__);
    wp_enqueue_style('custom-css', $plugin_dir_url . 'assets/css/custom.css');
}


?>