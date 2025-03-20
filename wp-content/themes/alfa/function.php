<?php 

function alfa_bootstrapping(){
    load_theme_textdomain("alfa");
    add_theme_support( "post-thumbnails" );
    add_theme_support("title-tag");
}


add_action("after_setup_theme","alfa_bootstrapping");


function my_theme_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
