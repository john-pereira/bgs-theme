<?php

function bgs_enqueue_styles()
{
    wp_enqueue_style(
        'bgs-demo-css',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        wp_get_theme()->get('Version'),
        'all'
    );
}

add_action('wp_enqueue_scripts', 'bgs_enqueue_styles');

function bgs_enqueue_scripts() 
{
    wp_enqueue_script(
      'bgs-demo-js',
      get_template_directory_uri() . '/assets/js/custom.js',
      array(),
      wp_get_theme()->get('Version'),
      true // load on footer
    );
  }
  
  add_action('wp_enqueue_scripts', 'bgs_enqueue_scripts');

