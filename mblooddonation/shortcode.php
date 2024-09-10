<?php
//Shortcode
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
                <span>Cell Number<?php echo esc_html(get_post_meta(get_the_id(),'mbcell_unique',true));?></span>
                <span>Email Address<?php echo esc_html(get_post_meta(get_the_id(),'mbemail_unique',true));?></span>
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