<?php

/*
 * Plugin Name:       DB info
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            John Smith
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

 global $wpdb;
 $table_name= $wpdb->prefix."customer";
// $wpdb->insert($table_name,
// array(
//     'name'=>'mamurjorit',
//     'cell'=>'01320704726',
//     'salary'=>50000.00,
// ),
// array(
//     '%s',
//     '%s',
//     '%f'
// ));


// $wpdb->update(
//     $table_name,
//     array(
//         'name'=>'hadiuzzaman',
//         'cell'=>'01320704726',
//         'salary'=>70000,
//     ),
//     array(
//         'id'=>1,
//         'id'=>2,
//     ),
//     array(
//         '%s',
//         '%s',
//         '%d',
//     ),
//     array(
//         '%d', 
//         '%d'
//     ),
// );


// $wpdb->delete(
//     $table_name,
//     array(
//         'id'=>2,
//     ),
//     array(
//         '%d'
//     ),
// );


// $query=" select * from $table_name";
// $getalldata=$wpdb->get_var($query);
// $getalldata=$wpdb->get_row($query,ARRAY_A);
// foreach($getalldata as $singledata){
//    echo  $singledata->name; 
// }

// echo $getalldata['name'];
// echo $getalldata['cell'];


$fivesdrafts = $wpdb->get_results(
    "
    SELECT *
    FROM $table_name

    "
    );
    ?>
    <table>
  <tr>
    <th>Customer name</th>
    <th>Contact</th>
    <th>Salary</th>
    <th>Action</th>
  </tr>
    <?php
    foreach ( $fivesdrafts as $fivesdraft ) {
    // echo $fivesdraft->name."<br>";
    ?>
    

  <tr>
    <td><?php echo $fivesdraft->name;?></td>
    <td><?php echo $fivesdraft->cell;?></td>
    <td><?php echo $fivesdraft->salary;?></td>
    <td><a href="delete.php?id=<?php echo $fivesdraft->id;?>">delete</a>
    <a href="edit.php?id=<?php echo $fivesdraft->id;?>">Edit</a>
</td>
  </tr>


    <?php
    }
    ?>
</table>
    <?php

?>