<?php
/**
 * Plugin Name: working-with-php - lesson 1
 * Plugin URI: 
 * Author:
 * Author URI
 * Description
 * Version
 * License
 * License URI
 * text-domain:
 */

 defined( 'ABSPATH' ) or die('Unauthorized access!');
 //This is a common php fuction used to stop things from continuing,
 //It adds basic security to the plugin
 //defined asks if we've defined the ABSPATH



 /**
 * Register a custom menu page.
 */
function wpdocs_register_my_custom_menu_page(){
    add_menu_page( 
        __( 'Custom Menu Title', 'textdomain' ), //page title
        'custom menu',
        'manage_options', // giving permisions to the plugin
        'custompage',
        'my_custom_menu_page',
        plugins_url( 'myplugin/images/icon.png' ),
        5.5 // It's position on the side links on the dashboard
    ); 
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );

/**
 * Display a custom menu page
 */
function my_custom_menu_page(){
    //Lets Add some html
    //But Always first close php if your to add html in php
    ?>
    <h1>Test Our PHP</h1>
    <hr> <!-- An Html horizontal rule-->
    <?php  
      
      //make variables
     //Start with a dollar sign for variables in php
     $first_name = 'Jerome'; //Always Add a semicolon to terminate
     $last_name  = 'Ssenyonga';

     //how to echo
     echo $first_name .' '. $last_name; //the dot is used to add space and concantinate

     //calculate valuables.
     $figureone = 7;
     $figuretwo = 10;

     //Add HTML inside PHP
     ?>
         <br>
    <?php

     //Add
     echo $figureone + $figuretwo;

     ?>
         <br>
    <?php

     //subtract
     echo $figureone - $figuretwo;

     ?>
         <br>
    <?php

     //Multiplication
     echo $figureone * $figuretwo;

     ?>
         <br>
    <?php

     //Division
     echo $figureone / $figuretwo;

     ?>

     <br>
     <?php

     //Funtions. They help do routine tasks
     function sums($figuretwo, $figureone) {
      return $figureone * $figuretwo;
     }

     echo sums(7,10);
}