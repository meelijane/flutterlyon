<?php

function flutterlyon_styles(){
    wp_register_style('fluttering', get_stylesheet_directory_uri().'/fluttering.less');
    wp_enqueue_style('fluttering', get_stylesheet_directory_uri().'/fluttering.less');
}
add_action('wp_enqueue_scripts', 'flutterlyon_styles');
