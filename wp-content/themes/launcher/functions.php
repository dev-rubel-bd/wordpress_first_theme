<?php

function launcher_theme_setup(){
    load_theme_textdomain("launcher");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");

}
add_action("after_setup_theme","launcher_theme_setup");


function launcher_assets(){
    wp_enqueue_style("animate-css", get_template_directory_uri()."/assets/css/animate.css");
    wp_enqueue_style("icomoon-css", get_template_directory_uri()."/assets/css/icomoon.css");
    wp_enqueue_style("bootstrap-css", get_template_directory_uri()."/assets/css/bootstrap.css");
    wp_enqueue_style("style-css", get_template_directory_uri()."/assets/css/style.css");
    wp_enqueue_style("launcher", get_stylesheet_uri());

    wp_enqueue_script('jquery');
    wp_enqueue_script("easing-jquery", get_template_directory_uri()."/assets/js/jquery.easing.1.3.js", array("jquery"), null, true);
    wp_enqueue_script("bootstrap-min-js", get_template_directory_uri()."/assets/js/bootstrap.min.js", array("jquery"), null, true);
    wp_enqueue_script("waypoints-min-js", get_template_directory_uri()."/assets/js/jquery.waypoints.min.js", array("jquery"), null, true);
    wp_enqueue_script("simply-countdown", get_template_directory_uri()."/assets/js/simplyCountdown.js", array("jquery"), null, true);
    wp_enqueue_script("main-js", get_template_directory_uri()."/assets/js/main.js", array("jquery"), null,true);



    $launcher_year=get_post_meta(get_the_ID(),"year",true);
    $launcher_month=get_post_meta(get_the_ID(),"month",true);
    $launcher_days=get_post_meta(get_the_ID(),"days",true);
    wp_localize_script("main-js","datedata", array(
        "year"=>$launcher_year,
        "month"=>$launcher_month,
        "days"=>$launcher_days

    ));


}
add_action("wp_enqueue_scripts", "launcher_assets");


function launcher_sidebars(){
    register_sidebar(
        array(
        'name'          => __('Footer left', 'launcher'),
        'id'            => 'footer-left',
        'description'   => __('Footer left', 'launcher'),
        'before_widget' => '<section id="%1$s" class="widgets %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));



    register_sidebar(
        array(
        'name'          => __('Footer right', 'launcher'),
        'id'            => 'footer-right',
        'description'   => __('Footer right', 'launcher'),
        'before_widget' => '<section id="%1$s" class="text-right widgets %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action("widgets_init","launcher_sidebars");



function launcher_styles(){
    if(is_page()){
        $thumbnail_url=get_the_post_thumbnail_url(null,"large");

        ?>
        <style>
            .home-side{
                background-image: url(<?php echo $thumbnail_url; ?>);
            }
        </style>

        <?php
    }

}
add_action("wp_head","launcher_styles");











?>
