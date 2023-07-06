<?php
add_action('wp_enqueue_scripts', 'moovies_scripts');

function moovies_scripts() {
    wp_enqueue_style('main_styles', get_template_directory_uri() . '/css/style.css');
}

add_action('wp_enqueue_scripts', 'moovies_scripts');