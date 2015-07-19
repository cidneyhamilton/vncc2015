<?php

add_action( 'wp_enqueue_scripts', 'vncc_styles' );

function vncc_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );

    wp_enqueue_style( 'style', get_stylesheet_uri() );
  
    wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'));
}

?>