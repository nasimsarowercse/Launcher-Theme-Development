<?php 

function launcher_bootstraping(){
	load_theme_textdomain('launcher');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'launcher_bootstraping');

function launcher_assets(){
	wp_enqueue_style('animatecss', get_theme_file_uri('/assets/css/animate.css'));
	wp_enqueue_style('icomooncss', get_theme_file_uri('/assets/css/icomoon.css'));
	wp_enqueue_style('bootstrapcss', get_theme_file_uri('/assets/css/bootstrap.css'));
	wp_enqueue_style('stylecss', get_theme_file_uri('/assets/css/style.css'));
	wp_enqueue_style('maincss', get_stylesheet_uri());



	wp_enqueue_script('modernizrjs', get_theme_file_uri('/assets/js/modernizr-2.6.2.min.js'));
	wp_enqueue_script('easingjs', get_theme_file_uri('/assets/js/jquery.easing.1.3.js'), array('jquery'), null, true);
	wp_enqueue_script('bootstrapjs', get_theme_file_uri('/assets/js/bootstrap.min.js'), array('jquery'), null, true);
	wp_enqueue_script('waypointsjs', get_theme_file_uri('/assets/js/jquery.waypoints.min.js'), array('jquery'), null, true);
	wp_enqueue_script('simplyCountdownjs', get_theme_file_uri('/assets/js/simplyCountdown.js'), array('jquery'), null, true);
	wp_enqueue_script('mainjs', get_theme_file_uri('/assets/js/main.js'), array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'launcher_assets');

function launcher_sidebar() {
    register_sidebar( array(
        'name' =>  __('Footer Widget One', 'launcher'),
        'id' => 'sidebar1',
        'description' 	=> __('You can add your widgets', 'launcher'),
        'before_widget' => '<div class="widget_div">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );

    register_sidebar( array(
        'name' =>  __('Footer Widget Two', 'launcher'),
        'id' => 'sidebar2',
        'description' 	=> __('You can add your widgets', 'launcher'),
        'before_widget' => '<div class="widget_div">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
}
add_action('widgets_init', 'launcher_sidebar');



















?>