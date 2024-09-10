<?php

$person_info=array("hadi","jaman","rowza");
add_option('person_info',$person_info); 

$cell_number = 01320704726;
add_option('cell_number', $cell_number);  // Adds cell number to database

$fb_id = "fb/hadijaman";
add_option('fb_id', $fb_id);  // Adds Facebook ID to database

 echo get_option('fb_id');

$get_info=get_option('person_info');
for($i=0;$i<count($get_info);$i++){
    echo  $get_info[$i]."<br>";
}

?>