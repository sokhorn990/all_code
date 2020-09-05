<?php 
 function featureImag(){
     add_theme_support('post-thumbnails');
     set_post_thumbnail_size(400,400);
 }

 add_action('after_setup_theme','featureImag');

 function nav_menu(){
     register_nav_menus(array(
         'primary'=>__('primary Menu'),
         'footer'=>__('Footer Menu')
     ));
 }
 
 add_action('after_setup_theme','nav_menu');
?>