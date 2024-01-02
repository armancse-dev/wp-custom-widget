<?php
/**
 * Plugin Name: OWT WP Widget
 * Description: This is widget plugin which creates wp widget while active the plugin.
 * Author: Arman
 * Version: 1.0
 */

 //Custom Widget class
 class My_Widget extends WP_Widget{
   public function __construct(){
      parent:: __construct();

      add_action("widgets_init", function(){
        register_widget("My_Widget");
      });
   }

   // form method - this method is able to create admin panel layout for backed

   // update method -  this method is used to save / udpate data while we save data from widget to database

   // widget method -  this will provide a layout for frontend

   
 }

 $my_widget = new My_Widget();