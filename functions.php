<?php

function add_css()
{
   wp_register_style('index', get_template_directory_uri() . '/assets/css/index.css', false,'1.1','all');
   wp_enqueue_style( 'index');
   wp_register_style('slider', get_template_directory_uri() . '/assets/css/slider.css', false,'1.1','all');
   wp_enqueue_style( 'slider');

   wp_register_style('slideshow', get_template_directory_uri() . '/assets/css/slideshow.css', false,'1.1','all');
   wp_enqueue_style( 'slideshow');

}
add_action('wp_enqueue_scripts', 'add_css');
function add_script()
{
   wp_register_script('index', get_template_directory_uri() . '/assets/js/index.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'index');
   wp_register_script('slider', get_template_directory_uri() . '/assets/js/slider.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'slider');
}
add_action('wp_enqueue_scripts', 'add_script');
