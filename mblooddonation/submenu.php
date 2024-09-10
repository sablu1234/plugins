<?php

include(plugin_dir_path(__FILE__).'globalsetting.php');

if(!function_exists('mythemesettinginfo')){
    function mythemesettinginfo(){
        ?>
        <h1><?php echo esc_html(get_admin_page_title());?></h1>
        <form action="" method="post">
            <?php 
            submit_button(__('User Save',$GLOBALS['text_domain']));
            ?>
        </form>
        <?php
    }
}

if(!function_exists('myoptionmenu')){
    function myoptionmenu(){
        add_submenu_page(
            'edit.php?post_type=mb_personinfo',
            'Page Title',
            'Menu Title',
            'manage_options',
            'mytheme_options',
            'mythemesettinginfo'
        );
    }
}
add_action('admin_menu','myoptionmenu');


?>