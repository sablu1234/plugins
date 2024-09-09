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





if(!function_exists('Mamurjor_blood_personinfo')){
    function Mamurjor_blood_personinfo(){

        $labels = array(
            'name'                  => _x( 'PersonInfos', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'PersonInfo', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'PersonInfos', 'text_domain' ),
            'name_admin_bar'        => __( 'PersonInfo', 'text_domain' ),
            'archives'              => __( 'PersonInfo Archives', 'text_domain' ),
            'attributes'            => __( 'Item Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent PersonInfo:', 'text_domain' ),
            'all_items'             => __( 'All PersonInfo', 'text_domain' ),
            'add_new_item'          => __( 'Add New PersonInfo', 'text_domain' ),
            'add_new'               => __( 'Add PersonInfo', 'text_domain' ),
            'new_item'              => __( 'New PersonInfo', 'text_domain' ),
            'edit_item'             => __( 'Add new PersonInfo', 'text_domain' ),
            'update_item'           => __( 'Update PersonInfo', 'text_domain' ),
            'view_item'             => __( 'View PersonInfo', 'text_domain' ),
            'view_items'            => __( 'View PersonInfos', 'text_domain' ),
            'search_items'          => __( 'Search PersonInfo', 'text_domain' ),
            'not_found'             => __( 'PersonInfo', 'text_domain' ),
            'not_found_in_trash'    => __( 'PersonInfo Not found in Trash', 'text_domain' ),
            'featured_image'        => __( 'Featured Image', 'text_domain' ),
            'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
            'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
            'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this PersonInfo', 'text_domain' ),
            'items_list'            => __( 'PersonInfo list', 'text_domain' ),
            'items_list_navigation' => __( 'PersonInfo list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter PersonInfo list', 'text_domain' ),
        );
        register_post_type('mb_personinfo',array(
            'labels'=>  $labels,
            'public'=>true,
            'has_archive'=>true,
            'rewrite'=>array('slug'=>'mb_personinfo'),
            'taxonomies'=>array('bloodGroup'),
        ));
    }
}
add_action( 'init','Mamurjor_blood_personinfo');

//Meta BOxes
if(!function_exists('mbmycellfield')){
    function mbmycellfield(){
        
    }
}
if(!function_exists('mb_mymetapersoninfo')){
    function mb_mymetapersoninfo(){
        add_meta_box(
            'mb_box_id',
            'Cell Number',
            'mbmycellfield',
            'mb_personinfo'
        );
    }
}

add_action('add_meta_boxes','mb_mymetapersoninfo');

    
    if(!function_exists('get_mb_personinfos')){
        function get_mb_personinfos($atts=array(),$content=null,$tag=''){
            ob_start();
           
            
            $the_personinfo = new WP_Query(array(
                'post_type'=>'mb_personinfo',
                'posts_per_page'=> 8, 
            ));
            while($the_personinfo->have_posts(  )){
                $the_personinfo->the_post();
                ?>
                <div class="mama">
                    <h2><?php esc_html(the_title());?></h2>
                    <?php esc_html(the_content());?>
                </div>
                <?php
            }
            
          
            $content=ob_get_clean();
            return $content;
        }
    }
    if(!shortcode_exists('mb_personinfos')){
        add_shortcode( 'mb_personinfos','get_mb_personinfos');  
    }









    
?>