<?php



if(!function_exists('topmythemesettinginfo')){
    function topmythemesettinginfo(){
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

function submenu_page_callback(){
    ?>
    <h1><?php echo get_admin_page_title();?></h1>
    
    <?php
}


if(!function_exists('mytopmenuoption')){
    function mytopmenuoption(){
      add_menu_page(
        'Top Page Title',
        'Top Menu TItle',
        'manage_options',
        'top_menu_slug',
        'topmythemesettinginfo',
        '',
        50
      );



      // Add a submenu under the top-level menu
      add_submenu_page(
        'top_menu_slug',          // Parent menu slug (same as top menu slug)
        'Submenu Page Title',     // Page title for the submenu
        'Submenu Title',          // Menu title for the submenu
        'manage_options',         // Capability required
        'submenu_slug',           // Submenu slug
        'submenu_page_callback'   // Function to display the submenu content
    );

    }
}


add_action('admin_menu','mytopmenuoption');

?>