<?php
/*
* Plugin Name: Blood Donetion
* Plugin URI:
* Description: Simple blood daonation system
* Version: 1.0.0
* Requires al least: 5.2
* Requires PHP: 7.2
* Authot: hasan
*Author URI:
*
*/ 

// do_shortcode($content);







if(!function_exists('mblooddonationlist')){
    function mblooddonationlist($atts=array(),$content=null,$tag=''){
     $attlist= array_change_key_case((array)$atts,CASE_LOWER);
        $getallatt=shortcode_atts(
            array(
                'class'=>'hadijaman',
                'id'=>'badboy',
            ),$attlist,$tag
        );
       $selfcontent="<div id='".esc_html($getallatt['id'])."' class='".esc_html($getallatt['class'])."'>";
       $selfcontent.=apply_filters('the_content',$content);
       $selfcontent.="</div>";
        return $selfcontent;
    }
}

if(!shortcode_exists('mbinfolist')){
    add_shortcode( 'mbinfolist', 'mblooddonationlist' );
}





if(!function_exists('formmethod')){
    function formmethod($atts=array(),$content=null,$tag=''){


        $atts = array_change_key_case((array)$atts, CASE_LOWER);

        // Set default attributes
        $atts = shortcode_atts(
            array(
                'class' => 'hasan', // Default class for the form
            ), 
            $atts, 
            $tag
        );

     ob_start();
     ?>
     <form action="" class='<?php echo esc_html($atts['class']); ?>'>
        <label for="username"> User Name </label>
        <input type="text" name="username" id="">

        <label for="username"> Blood Group</label>
        <input type="text" name="groupname" id="">
     </form>
     <?php
     $selfcontent=ob_get_clean();
        return $selfcontent;
    }
}

if(!shortcode_exists('form')){
    add_shortcode( 'form', 'formmethod' );
}



add_action( 'admin_menu', 'wporg_options_page' );
function wporg_options_page() {
    add_menu_page(
        'page title',
        'menu title Options',
        'manage_options',
        'menu slug',
        'htmloption',
        plugin_dir_url(__FILE__) . 'images/icon_wporg.png',
        20
    );
}


function htmloption() {
    ?>
    <div class="wrap">
      <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
      <form action="options.php" method="post">
        <?php
        // output security fields for the registered setting "wporg_options"
        settings_fields( 'wporg_options' );
        // output setting sections and their fields
        // (sections are registered for "wporg", each field is registered to a specific section)
        do_settings_sections( 'wporg' );
        // output save settings button
        submit_button( __( 'Save Settings', 'textdomain' ) );
        ?>
      </form>
    </div>
    <?php
}




?>