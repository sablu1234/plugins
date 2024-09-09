<?php

if(!function_exists('mblooddonationlist')){
    function mblooddonationlist(){
        $content='ami to vlao na vala loyai thaiko';
        return $content;
    }
}

if(!shortcode_exists('mbinfolist')){
    add_shortcode( 'mbinfolist', 'mblooddonationlist' );
}







if(!function_exists('mblooddonationlist')){
    function mblooddonationlist($atts=array(),$content=null,$tag=''){
     $attlist= array_change_key_case((array)$atts,CASE_LOWER);
        $getallatt=shortcode_atts(
            array(
                'class'=>'hadijaman',
                'id'=>'badboy',
            ),$attlist,$tag
        );
       $selfcontent="<div id='".esc_html($getallatt['id'])."' class='".esc_html($getallatt['class'])."'>";
       $selfcontent.=apply_filters('the_content',$content);
       $selfcontent.="</div>";
        return $selfcontent;
    }
}

if(!shortcode_exists('mbinfolist')){
    add_shortcode( 'mbinfolist', 'mblooddonationlist' );
}

?>