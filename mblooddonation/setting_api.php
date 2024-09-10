<?php
// add_korar jono
// register_setting();
// unregister_setting();
// add_settings_section();
// add_settings_field();

// Display korar jonno
// settings_fields();
// do_settings_sections();
// do_settings_fields();

//Error check
// add_settings_error();
// get_setting_errors();
// settings_errors();



if(!function_exists('mythemeoptions')){
    function mythemeoptions(){
        register_setting(
            'reading',
            'webaddress',
        );

        add_settings_section(

            'sectionid',
            'My theme extra settting',
            'mysectionshow',
            'reading',
            // 'webaddress'
        );

        add_settings_field(
            'fieldid',
            'Field label',
            'inputcallback',
            'reading',
            'sectionid',
        );
    }
}
add_action('admin_init','mythemeoptions');


if(!function_exists('mysectionshow')){
    function mysectionshow(){
        echo "this is setting api example";
    }
}



if(!function_exists('inputcallback')){
    function inputcallback(){
        ?>
        <input type="url" name="webaddress" id="" value="<?php echo get_option('webaddress');?>">
        <?php
    }
}
?>