<?php


//Meta BOxes
if(!function_exists('mbmycellfield')){
    function mbmycellfield(){ 
        ?>
        <label for="cellnumber"> Cell Number </label>
        <input type="tel" name="" id="cellnumber" value="<?php echo get_post_meta($post-ID,'mbmycellfield',)?>">
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