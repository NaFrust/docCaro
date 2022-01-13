<?php

function doc_enqueue(){
    $uri = get_theme_file_uri();

    wp_register_style('doc_google_fonts', 'https://fonts.googleapis.com/css2?family=Outfit&display=swap');
    wp_register_style('doc_bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    wp_register_style('doc_style',$uri.'/assets/style.css');

    wp_enqueue_style('doc_google_fonts');
    wp_enqueue_style('doc_bootstrap');
    wp_enqueue_style('doc_style');

    wp_register_script( 'doc_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js',[],false,true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('doc_bootstrap');
}