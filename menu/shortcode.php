<?php
add_shortcode('social_link','sh_social_link');
function sh_social_link($atts=[],$content=null){
?>
<p><?php echo get_option('twitter_social');?></p>
<?php
}

?>