<?php
function files()
{
  wp_enqueue_style('test_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'files');
