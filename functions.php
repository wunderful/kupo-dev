<?php

/*
| --------------------------------------------------------------------
| Start Framework
| --------------------------------------------------------------------
|
| Flow comes built upon it's own framework. Let's start it up.
|
*/

require_once(get_template_directory() . '/lib/start.php');

// Register Sidebars
function custom_sidebars() {

	$args = array(
		'id'            => 'global_sidebar',
		'name'          => __( 'Global Sidebar', 'wunderful' ),
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
		'before_widget' => '<div id="%1$s" class="widget %2$s tilted-angle">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'case_sidebar',
		'name'          => __( 'Case Study Sidebar', 'wunderful' ),
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
		'before_widget' => '<div id="%1$s" class="widget %2$s tilted-angle">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'blog_sidebar',
		'name'          => __( 'Blog Sidebar', 'wunderful' ),
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
		'before_widget' => '<div id="%1$s" class="widget %2$s tilted-angle">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'website_sidebar',
		'name'          => __( 'Web Dev Sidebar', 'wunderful' ),
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
		'before_widget' => '<div id="%1$s" class="widget %2$s tilted-angle">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'graphics_sidebar',
		'name'          => __( 'Graphics Sidebar', 'wunderful' ),
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
		'before_widget' => '<div id="%1$s" class="widget %2$s tilted-angle">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'hosting_sidebar',
		'name'          => __( 'Hosting Sidebar', 'wunderful' ),
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
		'before_widget' => '<div id="%1$s" class="widget %2$s tilted-angle">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'support_sidebar',
		'name'          => __( 'Support Sidebar', 'wunderful' ),
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
		'before_widget' => '<div id="%1$s" class="widget %2$s tilted-angle">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'footer1_sidebar',
		'name'          => __( 'Footer 1 Sidebar', 'wunderful' ),
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'footer2_sidebar',
		'name'          => __( 'Footer 2 Sidebar', 'wunderful' ),
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'footer3_sidebar',
		'name'          => __( 'Footer 3 Sidebar', 'wunderful' ),
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'custom_sidebars' );