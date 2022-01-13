<?php

//setup

//Includes
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/front/features.php'));

// Hooks
add_action('wp_enqueue_scripts', 'doc_enqueue');
add_action('after_setup_theme','doc_features');



//Shortcodes

// add classes to wp_list_pages
/*function wp_list_pages_filter($output) {
    $output = str_replace('page_item', 'page_item dropdown-item ', $output);
    return $output;
  }
  add_filter('wp_list_pages', 'wp_list_pages_filter');*/

?>