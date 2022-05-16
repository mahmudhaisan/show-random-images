<?php

/**
 * Register a custom post type called "Random Images".
 *
 * @see get_post_type_labels() for label keys.
 */
function random493_image_post_type()
{
    $labels = array(
        'name'                  => _x('Random Images', 'Post type general name', 'random493'),
        'singular_name'         => _x('Random Image', 'Post type singular name', 'random493'),
        'menu_name'             => _x('Random Images', 'Admin Menu text', 'random493'),
        'name_admin_bar'        => _x('Random_Image', 'Add New on Toolbar', 'random493'),
        'add_new'               => __('Add New', 'random493'),
        'add_new_item'          => __('Add New Random Image', 'random493'),
        'new_item'              => __('New Random Image', 'random493'),
        'edit_item'             => __('Edit Random Image', 'random493'),
        'view_item'             => __('View Random Image', 'random493'),
        'all_items'             => __('All Random Images', 'random493'),
        'search_items'          => __('Search Random Images', 'random493'),
        'parent_item_colon'     => __('Parent Random Images:', 'random493'),
        'not_found'             => __('No Random Images found.', 'random493'),
        'not_found_in_trash'    => __('No Random Images found in Trash.', 'random493'),
        'featured_image'        => _x('Random Image Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'random493'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'random493'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'random493'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'random493'),
        'archives'              => _x('Random Image archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'random493'),
        'insert_into_item'      => _x('Insert into Random Image', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'random493'),
        'uploaded_to_this_item' => _x('Uploaded to this Random Image', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'random493'),
        'filter_items_list'     => _x('Filter Random Images list', 'Screen reader text for the filter ghghfhgs heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'random493'),
        'items_list_navigation' => _x('Random Images list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'random493'),
        'items_list'            => _x('Random Images list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'random493'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'random-image'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'author', 'thumbnail',),
    );

    register_post_type('random_image_cpt', $args);
}

add_action('init', 'random493_image_post_type');


// Register Custom category
function random493_cpt_random_category()
{

    $labels = array(
        'name'                       => _x('Categories', 'category General Name', 'random493'),
        'singular_name'              => _x('category', 'category Singular Name', 'random493'),
        'menu_name'                  => __('category', 'random493'),
        'all_items'                  => __('All categories', 'random493'),
        'parent_item'                => __('Parent category', 'random493'),
        'parent_item_colon'          => __('Parent category:', 'random493'),
        'new_item_name'              => __('New Item category', 'random493'),
        'add_new_item'               => __('Add New category', 'random493'),
        'edit_item'                  => __('Edit category', 'random493'),
        'update_item'                => __('Update category', 'random493'),
        'view_item'                  => __('View category', 'random493'),
        'separate_items_with_commas' => __('Separate categories with commas', 'random493'),
        'add_or_remove_items'        => __('Add or remove categories', 'random493'),
        'choose_from_most_used'      => __('Choose from the most used', 'random493'),
        'popular_items'              => __('Popular categories', 'random493'),
        'search_items'               => __('Search categories', 'random493'),
        'not_found'                  => __('Not Found', 'random493'),
        'no_terms'                   => __('No categories', 'random493'),
        'items_list'                 => __('categories list', 'random493'),
        'items_list_navigation'      => __('categories list navigation', 'random493'),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy('random493_category', array('random_image_cpt'), $args);
}
add_action('init', 'random493_cpt_random_category', 0);
