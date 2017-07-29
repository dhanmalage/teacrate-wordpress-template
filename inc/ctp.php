<?php
/**
 * Created by PhpStorm.
 * User: Dananjaya
 * Date: 8/26/2016
 * Time: 11:50 AM
 */
?>
<?php
add_action( 'init', 'teacrate_moves_init' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function teacrate_moves_init() {
    $labels = array(
        'name'               => _x( 'Moves', 'post type general name', 'teacrate-moves' ),
        'singular_name'      => _x( 'Move', 'post type singular name', 'teacrate-moves' ),
        'menu_name'          => _x( 'Moves', 'admin menu', 'teacrate-moves' ),
        'name_admin_bar'     => _x( 'Move', 'add new on admin bar', 'teacrate-moves' ),
        'add_new'            => _x( 'Add New', 'book', 'teacrate-moves' ),
        'add_new_item'       => __( 'Add New Item', 'teacrate-moves' ),
        'new_item'           => __( 'New Item', 'teacrate-moves' ),
        'edit_item'          => __( 'Edit Item', 'teacrate-moves' ),
        'view_item'          => __( 'View Item', 'teacrate-moves' ),
        'all_items'          => __( 'All Items', 'teacrate-moves' ),
        'search_items'       => __( 'Search Items', 'teacrate-moves' ),
        'parent_item_colon'  => __( 'Parent Items:', 'teacrate-moves' ),
        'not_found'          => __( 'No items found.', 'teacrate-moves' ),
        'not_found_in_trash' => __( 'No items found in Trash.', 'teacrate-moves' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'teacrate-moves' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        //'rewrite'            => array( 'slug' => 'ctp1' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'moves', $args );
}
?>
<?php
// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_moves_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_moves_taxonomies()
{
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name' => _x('Categories', 'taxonomy general name', 'teacrate-moves-tax'),
        'singular_name' => _x('Category', 'taxonomy singular name', 'teacrate-moves-tax'),
        'search_items' => __('Search Categories', 'teacrate-moves-tax'),
        'all_items' => __('All Categories', 'teacrate-moves-tax'),
        'parent_item' => __('Parent Category', 'teacrate-moves-tax'),
        'parent_item_colon' => __('Parent Category:', 'teacrate-moves-tax'),
        'edit_item' => __('Edit Category', 'teacrate-moves-tax'),
        'update_item' => __('Update Category', 'teacrate-moves-tax'),
        'add_new_item' => __('Add New Category', 'teacrate-moves-tax'),
        'new_item_name' => __('New Category Name', 'teacrate-moves-tax'),
        'menu_name' => __('Category', 'teacrate-moves-tax'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'business-moves'),
    );

    register_taxonomy('movetypes', array('moves'), $args);

}


// Food and Distribution 


add_action( 'init', 'teacrate_ctp2_init' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function teacrate_ctp2_init() {
    $labels = array(
        'name'               => _x( 'Food', 'post type general name', 'teacrate-food' ),
        'singular_name'      => _x( 'Food', 'post type singular name', 'teacrate-food' ),
        'menu_name'          => _x( 'Food', 'admin menu', 'teacrate-food' ),
        'name_admin_bar'     => _x( 'Food', 'add new on admin bar', 'teacrate-food' ),
        'add_new'            => _x( 'Add New', 'book', 'teacrate-food' ),
        'add_new_item'       => __( 'Add New Item', 'teacrate-food' ),
        'new_item'           => __( 'New Item', 'teacrate-food' ),
        'edit_item'          => __( 'Edit Item', 'teacrate-food' ),
        'view_item'          => __( 'View Item', 'teacrate-food' ),
        'all_items'          => __( 'All Items', 'teacrate-food' ),
        'search_items'       => __( 'Search Items', 'teacrate-food' ),
        'parent_item_colon'  => __( 'Parent Items:', 'teacrate-food' ),
        'not_found'          => __( 'No items found.', 'teacrate-food' ),
        'not_found_in_trash' => __( 'No items found in Trash.', 'teacrate-food' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'teacrate-food' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        //'rewrite'            => array( 'slug' => '/%ctp1%' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'ctp2', $args );
}


// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_ctp2tax_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_ctp2tax_taxonomies()
{
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name' => _x('Food Cat', 'taxonomy general name', 'teacrate-food-tax'),
        'singular_name' => _x('Food Cat', 'taxonomy singular name', 'teacrate-food-tax'),
        'search_items' => __('Search Food Cat', 'teacrate-food-tax'),
        'all_items' => __('All Food Cat', 'teacrate-food-tax'),
        'parent_item' => __('Parent Food Cat', 'teacrate-food-tax'),
        'parent_item_colon' => __('Parent Food Cat:', 'teacrate-food-tax'),
        'edit_item' => __('Edit Food Cat', 'teacrate-food-tax'),
        'update_item' => __('Update Food Cat', 'teacrate-food-tax'),
        'add_new_item' => __('Add New Food Cat', 'teacrate-food-tax'),
        'new_item_name' => __('New Food Cat Name', 'teacrate-food-tax'),
        'menu_name' => __('Food Cat', 'teacrate-food-tax'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'food-crates'),
    );

    register_taxonomy('ctp2tax', array('ctp2'), $args);

}



// Packaging


add_action( 'init', 'teacrate_ctp3_init' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function teacrate_ctp3_init() {
    $labels = array(
        'name'               => _x( 'Packging', 'post type general name', 'teacrate-packging' ),
        'singular_name'      => _x( 'Packging', 'post type singular name', 'teacrate-packging' ),
        'menu_name'          => _x( 'Packging', 'admin menu', 'teacrate-packging' ),
        'name_admin_bar'     => _x( 'Packging', 'add new on admin bar', 'teacrate-packging' ),
        'add_new'            => _x( 'Add New', 'book', 'teacrate-packging' ),
        'add_new_item'       => __( 'Add New Item', 'teacrate-packging' ),
        'new_item'           => __( 'New Item', 'teacrate-packging' ),
        'edit_item'          => __( 'Edit Item', 'teacrate-packging' ),
        'view_item'          => __( 'View Item', 'teacrate-packging' ),
        'all_items'          => __( 'All Items', 'teacrate-packging' ),
        'search_items'       => __( 'Search Items', 'teacrate-packging' ),
        'parent_item_colon'  => __( 'Parent Items:', 'teacrate-packging' ),
        'not_found'          => __( 'No items found.', 'teacrate-packging' ),
        'not_found_in_trash' => __( 'No items found in Trash.', 'teacrate-packging' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'teacrate-packging' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        //'rewrite'            => array( 'slug' => '/%ctp1%' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'ctp3', $args );
}


//add_action( 'init', 'teacrate_ctp4_init' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
 
 /*
function teacrate_ctp4_init() {
    $labels = array(
        'name'               => _x( 'Promotions', 'post type general name', 'teacrate-promotion' ),
        'singular_name'      => _x( 'Promotion', 'post type singular name', 'teacrate-promotion' ),
        'menu_name'          => _x( 'Promotion', 'admin menu', 'teacrate-promotion' ),
        'name_admin_bar'     => _x( 'Promotion', 'add new on admin bar', 'teacrate-promotion' ),
        'add_new'            => _x( 'Add New', 'book', 'teacrate-promotion' ),
        'add_new_item'       => __( 'Add New Item', 'teacrate-promotion' ),
        'new_item'           => __( 'New Item', 'teacrate-promotion' ),
        'edit_item'          => __( 'Edit Item', 'teacrate-promotion' ),
        'view_item'          => __( 'View Item', 'teacrate-promotion' ),
        'all_items'          => __( 'All Items', 'teacrate-promotion' ),
        'search_items'       => __( 'Search Items', 'teacrate-promotion' ),
        'parent_item_colon'  => __( 'Parent Items:', 'teacrate-promotion' ),
        'not_found'          => __( 'No items found.', 'teacrate-promotion' ),
        'not_found_in_trash' => __( 'No items found in Trash.', 'teacrate-promotion' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'teacrate-promotion' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        //'rewrite'            => array( 'slug' => '/%ctp1%' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'ctp4', $args );
}

*/


