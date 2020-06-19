<?php 

function advokat_scripts() {

    
    // подключение стилей
    wp_enqueue_style( 'advokat-style-normalize', "https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" );
    wp_enqueue_style( 'advokat-style-slickslider', "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" );
    wp_enqueue_style( 'advokat-style-animate', get_template_directory_uri() . '/css/animate.css' );
    wp_enqueue_style( 'advokat-style-roboto', "https://fonts.googleapis.com/css?family=Roboto&display=swap" );
    wp_enqueue_style( 'advokat-style-oswald', "https://fonts.googleapis.com/css?family=Oswald&display=swap" );
    wp_enqueue_style( 'advokat-style-main', get_stylesheet_uri());
    
    // подключение скриптов
    wp_enqueue_script( 
        'mask', 
        'https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js', 
        array('jquery'), 
        '', 
    true );
    wp_enqueue_script( 
        'slick', 
        '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', 
        array('jquery'), 
        '', 
    true );
    wp_enqueue_script( 
        'wow', 
        get_template_directory_uri() . '/js/wow.js', 
        array('jquery'), 
        '', 
    true );
    wp_enqueue_script( 
        'script', 
        get_template_directory_uri() . '/js/script.js', 
        array('jquery', 'slick', 'mask', 'wow'), 
        '', 
    true );
    wp_enqueue_script( 
        'ajax', 
        get_template_directory_uri() . '/js/ajax.js', 
        array('jquery'), 
        '', 
    true );
   
}
add_action( 'wp_enqueue_scripts', 'advokat_scripts' );
