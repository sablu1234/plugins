<?php


if(!function_exists('my_other_setting')){
    function my_other_setting($post_id){
       if(array_key_exists('cellnumber',$_POST)){
        update_post_meta(
            $post_id,
            'mbcell_unique',
            $_POST['cellnumber']
        );
       }
       if(array_key_exists('mbemail',$_POST)){
        update_post_meta(
            $post_id,
            'mbemail_unique',
            $_POST['mbemail']
        );
       }
    }
}
add_action('save_post','my_other_setting');

if(!function_exists('mbmycellfield')){
    function mbmycellfield($post){
        ?>
        <label for="cellnumber"> Cell Number</label>
        <input type="tel" value="<?php echo get_post_meta($post->ID,'mbcell_unique',true)?>" name="cellnumber" id="cellnumber">
        <label for="cellnumber"> Email</label>
        <input type="tel" value="<?php echo get_post_meta($post->ID,'mbemail_unique',true)?>" name="mbemail" id="cellnumber">
        <?php
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
?>