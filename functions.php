<?php

function teacrate_setup() {

	add_editor_style();

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support('automatic-feed-links');

	// This theme supports a variety of post formats.
	add_theme_support('post-formats', array('aside', 'image', 'link', 'quote', 'status'));
	
	// Register Navigation
	register_nav_menus(array('primary' => 'Primary Navigation'));

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support('post-thumbnails');

	// Add HTML5 markup structure
	add_theme_support( 'html5' );
}
add_action('after_setup_theme', 'teacrate_setup');

function teacrate_scripts() {
	wp_enqueue_style('main-font-ubuntu', 'https://fonts.googleapis.com/css?family=Ubuntu:400,500,700');
	wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css');
	wp_enqueue_style('slider-pro-css', get_template_directory_uri().'/css/slider-pro.min.css');
	wp_enqueue_style('stylesheet', get_template_directory_uri().'/css/stylesheet.css');
	wp_enqueue_style('responsive', get_template_directory_uri().'/css/responsive.css');
	wp_enqueue_style('main-style', get_stylesheet_uri());
	
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array(), '', false);
	wp_enqueue_script('html5', get_template_directory_uri().'/js/html5.js', array(), '', false);
	wp_enqueue_script('match-height', '//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js', array(), '0.7.0', true);
	wp_enqueue_script('sliderPro', get_template_directory_uri().'/js/jquery.sliderPro.min.js', array('jquery'), '', true);
	wp_enqueue_script('cookieconsent', get_template_directory_uri().'/js/cookieconsent.js', array('jquery'), '', true);
	wp_enqueue_script('function', get_template_directory_uri().'/js/functions.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'teacrate_scripts');


// Disable frontend top admin bar
add_filter('show_admin_bar', '__return_false');

// Register Custom Navigation Walker
require_once('inc/wp_bootstrap_navwalker.php');


// limit number of characters to displayed
function custom_echo($x, $length)
{
	if(strlen($x)<=$length)
	{
		echo $x;
	}
	else
	{
		$y=substr($x,0,$length) . '...';
		echo $y;
	}
}


/* custom menu items */
add_filter('wp_nav_menu_items','add_search_box_to_menu', 10, 2);
function add_search_box_to_menu( $items, $args ) {
	
// Global theme options
global $teacrate_theme_options; 

	if( $args->theme_location == 'primary' )
		return $items.'<li class="header-tel"><a href="tel:'.$teacrate_theme_options["contact_number"].'"><i class="fa fa-phone" aria-hidden="true"></i> '.$teacrate_theme_options["contact_number"].'</a></li>
						<li><div id="search-btn"><i class="fa fa-search" aria-hidden="true"></i></div></li>';

	return $items;
}


// rewrite permalink for moves posttype terms



// include custom post types

include "inc/ctp.php";

// Theme options

include "inc/teacrate_config.php";

// change permalink for terms 
/*
function filter_post_type_link($link, $post)
{
	if ($post->post_type != 'moves')
		return $link;

	if ($cats = get_the_terms($post->ID, 'movetypes'))
		$link = str_replace('%moves1%', array_pop($cats)->slug, $link);
	return $link;
		
}
add_filter('post_type_link', 'filter_post_type_link', 10, 2);
*/

/**
 * Remove the slug from published post permalinks. Only affect our custom post type, though.
 */
function moves_remove_cpt_slug( $post_link, $post, $leavename ) {
	
	$custom_post_types = array( 'moves', 'ctp2', 'ctp3' );

	if ( ! in_array( $post->post_type, $custom_post_types ) || 'publish' != $post->post_status ) {

		return $post_link;

	}
 
	/*
    if ( 'moves' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }
	*/
		 
    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
 
    return $post_link;
}
add_filter( 'post_type_link', 'moves_remove_cpt_slug', 10, 3 );


/**
 * Have WordPress match postname to any of our public post types (post, page, moves)
 * All of our public post types can have /post-name/ as the slug, so they better be unique across all posts
 * By default, core only accounts for posts and pages where the slug is /post-name/
 */
function moves_parse_request_trick( $query ) {
 
    // Only noop the main query
    if ( ! $query->is_main_query() )
        return;
 
    // Only noop our very specific rewrite rule match
    if ( 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
        return;
    }
 
    // 'name' will be set if post permalinks are just post_name, otherwise the page rule will match
    if ( ! empty( $query->query['name'] ) ) {
		
		$query->set( 'post_type', array( 'post', 'page', 'moves', 'ctp2', 'ctp3' ) );
		
        //$query->set( 'post_type', array( 'post', 'page', 'moves' ) );
    }
}
add_action( 'pre_get_posts', 'moves_parse_request_trick' );




// get page content and title by slug

/**
 * Display the post title. Optinally allows post slug to be passed
 * @uses the_title()
 *
 * @param int $id Optional. Post slug.
 * @param string $more_link_text Optional. Content for when there is more text.
 * @param bool $stripteaser Optional. Strip teaser content before the more text. Default is false.
 */
function tea_the_title_by_slug( $post_slug="", $more_link_text = null, $stripteaser = false ){
    global $post;
    $post = &get_page_by_path($post_slug);
    setup_postdata( $post, $more_link_text, $stripteaser );
    the_title();
    wp_reset_postdata( $post );
}

/**
 * Display the post content. Optinally allows post slug to be passed
 * @uses the_content()
 *
 * @param int $id Optional. Post slug.
 * @param string $more_link_text Optional. Content for when there is more text.
 * @param bool $stripteaser Optional. Strip teaser content before the more text. Default is false.
 */
function tea_the_content_by_slug( $post_slug="", $more_link_text = null, $stripteaser = false ){
    global $post;
    $post = &get_page_by_path($post_slug);
    setup_postdata( $post, $more_link_text, $stripteaser );
    the_content();
    wp_reset_postdata( $post );
}



//* *********** footer navigation widgets *************** */

// Footer widgets
register_sidebar( array(
		'name' => 'Footer Sidebar 1',
		'id' => 'footer-sidebar-1',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
) );
register_sidebar( array(
		'name' => 'Footer Sidebar 2',
		'id' => 'footer-sidebar-2',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
) );
register_sidebar( array(
		'name' => 'Footer Sidebar 3',
		'id' => 'footer-sidebar-3',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
) );

/*

register_sidebar( array(
		'name' => 'Footer Sidebar 4',
		'id' => 'footer-sidebar-4',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
) );

*/

register_sidebar( array(
		'name' => 'News Sidebar',
		'id' => 'news-sidebar',
		'description' => 'Appears in the individual news pages',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="news-widget-title">',
		'after_title' => '</h4>',
) );


