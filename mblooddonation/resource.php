if(!function_exists('mblooddonatonlist')){
function mblooddonatonlist($atts = array(),$content=null){
   $content="ami to vlo na valo loi thako or aso blood dite";
   return $content;
}
}

if(!shortcode_exists('mbinfolist')){
    add_shortcode( 'mbinfolist','mblooddonatonlist');  
}