<?php

function launch_theme_setup(){
    load_theme_textdomain("launch");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");



}
add_action("after_setup_theme","launch_theme_setup");


function launch_assets(){

    wp_enqueue_style("animate-css",get_template_directory_uri()."/assets/css/animate.css");
    wp_enqueue_style("icomoon-css", get_template_directory_uri()."/assets/css/icomoon.css");
    wp_enqueue_style("bootstrap-css", get_template_directory_uri()."/assets/css/bootstrap.css");
    wp_enqueue_style("style-css", get_template_directory_uri()."/assets/css/style.css");
    wp_enqueue_style("launch", get_stylesheet_uri());



    wp_enqueue_script('jquery');
    wp_enqueue_script("easing-jquery", get_template_directory_uri()."/assets/js/jquery.easing.1.3.js", array("jquery"), null, true);
    wp_enqueue_script("bootstrap-min-js", get_template_directory_uri()."/assets/js/bootstrap.min.js", array("jquery"), null, true);
    wp_enqueue_script("waypoints-min-js", get_template_directory_uri()."/assets/js/jquery.waypoints.min.js", array("jquery"), null, true);
    wp_enqueue_script("simply-countdown", get_template_directory_uri()."/assets/js/simplyCountdown.js", array("jquery"), null, true);
    wp_enqueue_script("main-js", get_template_directory_uri()."/assets/js/main.js", array("jquery"), null,true);
    wp_enqueue_script("ejquery.min", get_template_directory_uri()."/assets/js/jquery.min.js", array("jquery"), null, true);
    wp_enqueue_script("jquery-stellar", get_template_directory_uri()."/assets/js/jquery.stellar.min.js", array("jquery"), null, true);
    wp_enqueue_script("modernizr", get_template_directory_uri()."/assets/js/modernizr-2.6.2.min.js", array("jquery"), null, true);


}
add_action("wp_enqueue_scripts", "launch_assets");






?>