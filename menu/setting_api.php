<?php
add_action('admin_init','code4wbs_theme_options');
function code4wbs_theme_options(){
    //Registered a section under setting general
    add_settings_section('social_icons','Here all Icons','all_icons_callback_functions','general');
    //Registered a field under setting general
    add_settings_field('twitter_social','Enter Your Twiter Link', 'twitter_callback','general', 'social_icons');
    add_settings_field('facebook_social','Enter Your facebook Link', 'facebook_callback','general', 'social_icons');
    add_settings_field('github_social','Enter Your github Link', 'github_callback','general', 'social_icons');
    //Registered setting to mysql
    register_setting('general','twitter_social',);
    register_setting('general','facebook_social',);
    register_setting('general','github_social',);
}



//Callback function of Section
function all_icons_callback_functions(){
    echo "please enter your social account data";
}
//Callback Function of Field
function twitter_callback(){
    ?>
    <input type="text" name="twitter_social" id="twiter_url" value="<?php echo get_option('twitter_social');?>" class="regular-text ltr">
    <?php
}
function facebook_callback(){
    ?>
    <input type="text" name="facebook_social" id="fb_url" value="<?php echo get_option('facebook_social');?>" class="regular-text ltr">
    <?php
}
function github_callback(){
    ?>
    <input type="text" name="github_social" id="github_url" value="<?php echo get_option('github_social');?>" class="regular-text ltr">
    <?php
}











?>