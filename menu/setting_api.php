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


/*==============================
*Custom top menu with custom api
=============================*/
//Top label menu
if (!function_exists('sh_top_menu')) {
    function sh_top_menu() {
        add_menu_page(
            'Submit your Page Title', // page title
            'Submit your data', // menu title
            'manage_options', // capability
            'top_menu_slug', // slug
            'sh_top_callback', // callback function
            'dashicons-games', // dashicon
            20
        );
    }

	function sh_top_callback(){
		?>
		<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
		<form action="options.php" method="post">
			<?php 
			settings_fields('option_group');
			do_settings_sections('custome_sections_name');
			submit_button(__('save data','textdomain'));
			?>
		</form>
		<?php
	}
}

add_action('admin_menu', 'sh_top_menu');


function option_group_function(){
	//Registration waith database
	register_setting('option_group','input_data');
	//Add sections
	add_settings_section(
		'section_id', //section id
		'Your all data', //section title
		'custom_setting_callback', //callback
		'custome_sections_name', //custom section page name
	);
	//add section field
	add_settings_field(
		'add_field_id', //field id
		'Enter Your sell Number', //field title
		'sh_field_callback', //callcack
		'custome_sections_name', //page
		'section_id',
	);

}
add_action('admin_init','option_group_function');

function custom_setting_callback(){
	echo "Enter your all data";
}

function sh_field_callback(){
	?>
	<input type="text" name="input_data" value="<?php echo get_option('input_data');?>">
	<?php
}






?>