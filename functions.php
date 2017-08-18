<?php
add_action('wp_print_scripts', 'fudge2_child_custom_js');

/**
 * Enquey the correct jquery-map file
 *
 * @see https://showthemes.zendesk.com/hc/en-us/articles/115002214745--Fudge-2-Theme-How-to-adjust-the-zoom-of-the-map-
 */
function fudge2_child_custom_js(){
  // not sure why there are two of these...
  wp_dequeue_script('fudge-jquery-map');
  wp_enqueue_script( 'fudge-child-map', get_stylesheet_directory_uri() . '/assets/js/jquery.map.js', array( 'jquery' ), false, false );
  wp_enqueue_script( 'fudge-child-scroll', get_stylesheet_directory_uri() . '/assets/js/jquery.scroll.js', array( 'jquery' ), false, false );
}
