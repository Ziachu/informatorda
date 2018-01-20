<?php

// add scripts and stylesheets
function informatorda_scripts() {
	wp_enqueue_style('blog', get_template_directory_uri() . '/css/blog.css');
	wp_enqueue_style('informatorda', get_template_directory_uri() . '/css/informator-styles.css');
	// wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true);
}

// function informatorda_google_fonts() {
// 	wp_register_style('CatamaranRegular', 'link to google font source');
// }

add_action('wp_enqueue_scripts', 'informatorda_scripts');
// add_action('wp_print_styles', 'informatorda_google_fonts');
add_theme_support('title-tag');