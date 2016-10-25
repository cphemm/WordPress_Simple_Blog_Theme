<?php
function simple_blog_theme_setup(){
	// Featured Image
	add_theme_support('post-thumbnails');

	// Add Menu
	register_nav_menus(array(
		'primary'	=> __('Primary Menu')
	));
}

add_action('after_setup_theme', 'simple_blog_theme_setup');


// Change the Excerpt Length
function set_excerpt_length(){
	return 60;
}

add_filter('excerpt_length', 'set_excerpt_length');

// Locate Your Widget
function init_widgets($id){
	register_sidebar(array(
		'name'	=> 'Sidebar',
		'id'	=> 'sidebar',
		'before_widget'	=> '<div class="side-widget">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=>	'</h3>'
	));
}

add_action('widgets_init', 'init_widgets');