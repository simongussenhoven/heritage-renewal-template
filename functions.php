<?php

function heritage_renewal_theme_support()
{
  // adds dynamic title tag support
  add_theme_support(('title-tag'));
}
add_action('after_setup_theme', 'heritage_renewal_theme_support');

function register_styles()
{
  $version = wp_get_theme()->get('Version');
  // Enqueue Bootstrap CSS (from CDN)
  wp_enqueue_style(
    'heritage-renewal-bootstrap',
    'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css',
    array(),
    '4.4.1',
    'all'
  );

  // Enqueue FontAwesome (from CDN)
  wp_enqueue_style(
    'heritage-renewal-fontawesome',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css',
    array(),
    '5.13.0',
    'all'
  );

  // Enqueue your custom main.css (from your theme directory)
  wp_enqueue_style(
    'heritage-renewal-style',
    get_template_directory_uri() . '/assets/css/main.css',
    array('heritage-renewal-bootstrap'),
    $version,
    'all'
  );
}
add_action('wp_enqueue_scripts', 'register_styles');

function register_scripts()
{
  wp_enqueue_script(
    'heritage-renewal-jquery',
    'https://code.jquery.com/jquery-3.4.1.slim.min.js',
    array(),
    '3.4.1',
    true
  );
  wp_enqueue_script(
    'heritage-renewal-popper',
    'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',
    array(),
    '1.16.0',
    true
  );
  wp_enqueue_script(
    'heritage-renewal-bootstrap',
    'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',
    array(),
    '4.4.1',
    true
  );
  wp_enqueue_script(
    'heritage-renewal-popper',
    'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',
    array(),
    '1.16.0',
    true
  );
  wp_enqueue_script(
    'heritage-renewal-main',
    './assets/js/main.js',
    array(),
    '1.0',
    true
  );
}
add_action('wp_enqueue_scripts', 'register_scripts');
