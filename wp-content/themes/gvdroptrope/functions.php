<?php
/* Theme functions file*/

function gvdroptrope_theme_setup(){
    add_theme_support("custom-logo");
    add_theme_support("widgets");
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
    add_image_size("home-featured", 680, 400, array('center', 'center'));
    add_image_size("single-post", 588, 272, array('center', 'center'));
    add_theme_support("automatic-feed-links");
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'wplearning'),
        'secondary' => __( 'Secondary Menu', 'wplearning' )
    ));

    // for custom header
    // $args = array(
    //     'default-image' => get_template_directory_uri().'/assets/img/header-1.jpg',
    //     'default-text-color' => '000',
    //     'width' => 1920,
    //     'height' => 400,
    //     'flex-width' => true,
    //     'flex-height' => true,
    // );
    // add_theme_support("custom-header", $args);
}
add_action('after_setup_theme', 'gvdroptrope_theme_setup' );

// Enqueue style and scripts
function gvdroptrope_scripts(){
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('jquery'); // includes jQuery from WordPress core

    wp_enqueue_script('gvdroptrope-brower', get_template_directory_uri().'/assets/js/browser.min.js');

    wp_enqueue_script('gvdroptrope-breakpoints', get_template_directory_uri().'/assets/js/breakpoints.min.j');

    wp_enqueue_script('gvdroptrope-util', get_template_directory_uri().'/assets/js/util.js');

    wp_enqueue_script('gvdroptrope-main', get_template_directory_uri().'/assets/js/main.js');
}
add_action('wp_enqueue_scripts', 'gvdroptrope_scripts');

// Show WordPress Widgets
function gvdroptrope_widgets_init(){

    register_sidebar(array(
        'name' => __('Primary Sidebar', 'gvdroptrope'),
        'id' => 'main-sidebar',
        'description' => 'Main Sidebar on Right Side',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<header><h3 class="widget-title">',
        'after_title' => '</h3></header>',
    ));

    register_sidebar(array(
        'name' => __('Home Banner', 'gvdroptrope'),
        'id' => 'home-banner',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Services', 'gvdroptrope'),
        'id' => 'gv_services',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Footer Widget 1', 'gvdroptrope'),
        'id' => 'footer-1',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<header><h2 class="widget-title">',
        'after_title' => '</h2></header>',
    ));

    register_sidebar(array(
        'name' => __('Footer Widget 2', 'gvdroptrope'),
        'id' => 'footer-2',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<header><h2 class="widget-title">',
        'after_title' => '</h2></header>',
    ));

    register_sidebar(array(
        'name' => __('Footer Widget 3', 'gvdroptrope'),
        'id' => 'footer-3',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<header><h2 class="widget-title">',
        'after_title' => '</h2></header>',
    ));

    register_sidebar(array(
        'name' => __('Footer Widget Bottom', 'gvdroptrope'),
        'id' => 'footer-bottom',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '',
        'after_title' => '',
    ));

}
add_action('widgets_init', 'gvdroptrope_widgets_init');

// Register Custom Post Type Portfolio
function create_portfolio_cpt() {

	$labels = array(
		'name' => _x( 'Portfolios', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Portfolio', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Portfolios', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Portfolio', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Portfolio Archives', 'textdomain' ),
		'attributes' => __( 'Portfolio Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Portfolio:', 'textdomain' ),
		'all_items' => __( 'All Portfolios', 'textdomain' ),
		'add_new_item' => __( 'Add New Portfolio', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Portfolio', 'textdomain' ),
		'edit_item' => __( 'Edit Portfolio', 'textdomain' ),
		'update_item' => __( 'Update Portfolio', 'textdomain' ),
		'view_item' => __( 'View Portfolio', 'textdomain' ),
		'view_items' => __( 'View Portfolios', 'textdomain' ),
		'search_items' => __( 'Search Portfolio', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Portfolio', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Portfolio', 'textdomain' ),
		'items_list' => __( 'Portfolios list', 'textdomain' ),
		'items_list_navigation' => __( 'Portfolios list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Portfolios list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Portfolio', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-portfolio',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'create_portfolio_cpt', 0 );