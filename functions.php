<?php
add_action('wp_print_scripts', 'fudge2_child_custom_js');

function fudge2_child_custom_js(){
  wp_dequeue_script('fudge-jquery-map');
  wp_dequeue_script('fudge-jquery-map');
  wp_enqueue_script( 'fudge-child-map', get_stylesheet_directory_uri() . '/js/jquery.map.js', array( 'jquery' ), false, false );
}
