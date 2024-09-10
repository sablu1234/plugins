<?php

if(!function_exists('mb_group')){
    function mb_group(){
        $labels=array(
            'name'=>__('Blood Groups','mbdomain'),
            'singular_name'=>__('Blood Group','mbdomain'),
            'add_new_item'=>__('Add New Blood Group','mbdomain'),
            'menu_name'=>__('Add Blood Group','mbdomain'),
            'update_item'=>__('update Blood Group','mbdomain'),
            'edit_item'=>__('Edit Blood Group','mbdomain'),
            'all_items'=>__('All Blood Groups','mbdomain'),
            'parent_item'=>__('Parent Blood Groups','mbdomain'),
        );
        register_taxonomy('bloodGroup',['mb_personinfo'],array(
            'hieraarchical'=>true,
            'labels'=>$labels,
        ));
    }
}
add_action('init','mb_group');

?>