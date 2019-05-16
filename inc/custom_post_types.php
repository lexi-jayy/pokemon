<?php

function add_event_post_types(){

	$labels = array(
		'name'               => _x( 'Events', 'post type general name', 'your-plugin-18wdwu07Pokemon' ),
		'singular_name'      => _x( 'Event', 'post type singular name', 'your-plugin-18wdwu07Pokemon' ),
		'menu_name'          => _x( 'Events', 'admin menu', 'your-plugin-18wdwu07Pokemon' ),
		'name_admin_bar'     => _x( 'Event', 'add new on admin bar', 'your-plugin-18wdwu07Pokemon' ),
		'add_new'            => _x( 'Add New', 'Event', 'your-plugin-18wdwu07Pokemon' ),
		'add_new_item'       => __( 'Add New Event', 'your-plugin-18wdwu07Pokemon' ),
		'new_item'           => __( 'New Event', 'your-plugin-18wdwu07Pokemon' ),
		'edit_item'          => __( 'Edit Event', 'your-plugin-18wdwu07Pokemon' ),
		'view_item'          => __( 'View Event', 'your-plugin-18wdwu07Pokemon' ),
		'all_items'          => __( 'All Events', 'your-plugin-18wdwu07Pokemon' ),
		'search_items'       => __( 'Search Events', 'your-plugin-18wdwu07Pokemon' ),
		'parent_item_colon'  => __( 'Parent Events:', 'your-plugin-18wdwu07Pokemon' ),
		'not_found'          => __( 'No Events found.', 'your-plugin-18wdwu07Pokemon' ),
		'not_found_in_trash' => __( 'No Events found in Trash.', 'your-plugin-18wdwu07Pokemon' )
	);



    $args = array (
        'labels' => $labels,
        'description' => 'a list of events that will be held',
        'public' => true,
        'show_in_nav_menus' => false,
		'menu_position' => 6,
		'show_in_rest' => true,
        'menu_icon' => 'dashicons-tickets',
        'supports' => array( 'title', 'editor','thumbnail', 'page-attributes') 

    );


    register_post_type('event',$args);
}
add_action('init', 'add_event_post_types');