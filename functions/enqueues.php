<?php
function brainworks_enqueues() {
  /* Styles */
  wp_register_style('style-css', get_template_directory_uri() . '/style.css', false, null);
  wp_enqueue_style('style-css');

  /* Scripts */
  wp_register_script('html5shiv', 'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js', array(), null, false);
  wp_register_script('respond', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', array(), null, false);

  wp_script_add_data('html5shiv', 'conditional', 'lt IE 9');
  wp_script_add_data('respond', 'conditional', 'lt IE 9');

  wp_enqueue_script('html5shiv');
  wp_enqueue_script('respond');

  wp_register_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array(), null, true);
  wp_enqueue_script('modernizr');

  wp_register_style('visial-widget-panel-css', get_template_directory_uri() . '/css/visial-widget-panel.css', false, null);
  wp_enqueue_style('visial-widget-panel-css');

  wp_register_script('visial-widget-panel-js', get_template_directory_uri() . '/js/visial-widget-panel.js', array(), null, true);
  wp_enqueue_script('visial-widget-panel-js');

  if (!WP_DEBUG) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-1.12.4.min.js', array(), null, true);
  }

  wp_register_script('brainworks-js', get_template_directory_uri() . '/js/brainworks.js', array('jquery'), null, true);
  wp_enqueue_script('brainworks-js');

  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}

add_action('wp_enqueue_scripts', 'brainworks_enqueues', 100);

function brainworks_wp_head() {
  analytics_tracking_code('head');
}

add_action('wp_head', 'brainworks_wp_head', 20);

function brainworks_wp_footer(){
  analytics_tracking_code('body');
}

add_action('wp_footer', 'brainworks_wp_footer', 20);
