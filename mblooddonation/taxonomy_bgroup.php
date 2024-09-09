<?php

if(!function_exists('mb_group')){
    function mb_group(){
        $labels = array(
            'name'              => _x( 'Blood groups', 'taxonomy general name', 'custom_type_personinfo' ),
            'singular_name'     => _x( 'Blood group', 'taxonomy singular name', 'custom_type_personinfo' ),
            'search_items'      => __( 'Search Blood group', 'custom_type_personinfo' ),
            'all_items'         => __( 'All Blood group', 'custom_type_personinfo' ),
            'parent_item'       => __( 'Parent Blood group', 'custom_type_personinfo' ),
            'parent_item_colon' => __( 'Parent Blood group:', 'custom_type_personinfo' ),
            'edit_item'         => __( 'Edit Blood group', 'custom_type_personinfo' ),
            'update_item'       => __( 'Update Blood group', 'custom_type_personinfo' ),
            'add_new_item'      => __( 'Add New Blood group', 'custom_type_personinfo' ),
            'new_item_name'     => __( 'New Blood group Name', 'custom_type_personinfo' ),
            'menu_name'         => __( 'Blood group', 'custom_type_personinfo' ),
        );
register_taxonomy('bloodGroup',['mb_personinfo'],array(
    'hieraachical'=>true,
    'labels'=>$labels,
));
    }
}
add_action('init','mb_group');

?>