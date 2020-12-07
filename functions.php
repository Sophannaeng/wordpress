<?php

function my_Style(){
    // to include the javascript file
    wp_enqueue_script('main-js', get_theme_file_uri('/js/scripts-bundled.js'),NULL,'1.00' ,true);
    wp_enqueue_style('my-font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i" ');
    wp_enqueue_style('my-bootstrap','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' )   ;
    wp_enqueue_style('my_sylesheet', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts','my_Style');


// the function to add title name to the different page

// my site header is to retrive header title

function mysite_header(){
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'mysite_header');
