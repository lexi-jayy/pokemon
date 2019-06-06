<?php
function add_event_post_type(){
    $labels = array(
		'name'               => _x( 'Events', 'post type general name', '18wdwu07Pokemon' ),
		'singular_name'      => _x( 'Event', 'post type singular name', '18wdwu07Pokemon' ),
		'menu_name'          => _x( 'Events', 'admin menu', '18wdwu07Pokemon' ),
		'name_admin_bar'     => _x( 'Event', 'add new on admin bar', '18wdwu07Pokemon' ),
		'add_new'            => _x( 'Add New', 'event', '18wdwu07Pokemon' ),
		'add_new_item'       => __( 'Add New Event', '18wdwu07Pokemon' ),
		'new_item'           => __( 'New Event', '18wdwu07Pokemon' ),
		'edit_item'          => __( 'Edit Event', '18wdwu07Pokemon' ),
		'view_item'          => __( 'View Event', '18wdwu07Pokemon' ),
		'all_items'          => __( 'All Events', '18wdwu07Pokemon' ),
		'search_items'       => __( 'Search Events', '18wdwu07Pokemon' ),
		'parent_item_colon'  => __( 'Parent Events:', '18wdwu07Pokemon' ),
		'not_found'          => __( 'No events found.', '18wdwu07Pokemon' ),
		'not_found_in_trash' => __( 'No events found in Trash.', '18wdwu07Pokemon' )
	);
    $args = array(
        'labels' => $labels,
        'description' => 'A list of events which will be held',
        'public' => true,
        'show_in_nav_menus' => false,
        'menu_position' => 6,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-tickets',
        'supports' => array('title', 'editor')
    );
    register_post_type('event', $args);
}
add_action('init', 'add_event_post_type');
function add_staff_post_type(){
    $labels = array(
		'name'               => _x( 'Staff', 'post type general name', '18wdwu07Pokemon' ),
		'singular_name'      => _x( 'Staff', 'post type singular name', '18wdwu07Pokemon' ),
		'menu_name'          => _x( 'Staff', 'admin menu', '18wdwu07Pokemon' ),
		'name_admin_bar'     => _x( 'Staff', 'add new on admin bar', '18wdwu07Pokemon' ),
		'add_new'            => _x( 'Add New', 'event', '18wdwu07Pokemon' ),
		'add_new_item'       => __( 'Add New Staff', '18wdwu07Pokemon' ),
		'new_item'           => __( 'New Staff', '18wdwu07Pokemon' ),
		'edit_item'          => __( 'Edit Staff', '18wdwu07Pokemon' ),
		'view_item'          => __( 'View Staff', '18wdwu07Pokemon' ),
		'all_items'          => __( 'All Staff', '18wdwu07Pokemon' ),
		'search_items'       => __( 'Search Staff', '18wdwu07Pokemon' ),
		'parent_item_colon'  => __( 'Parent Staff:', '18wdwu07Pokemon' ),
		'not_found'          => __( 'No events found.', '18wdwu07Pokemon' ),
		'not_found_in_trash' => __( 'No events found in Trash.', '18wdwu07Pokemon' )
	);
    $args = array(
        'labels' => $labels,
        'description' => 'A list of Staff Members which will be held in the database',
        'public' => true,
        'show_in_nav_menus' => false,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-groups',
        'supports' => array('title', 'thumbnail', 'editor')
    );
    register_post_type('staff', $args);
}
add_action('init', 'add_staff_post_type');

function add_contact_post_type(){
	$labels = array(
		'name'               => _x( 'Contacts', 'post type general name', '18wdwu07Pokemon' ),
		'singular_name'      => _x( 'Contact', 'post type singular name', '18wdwu07Pokemon' ),
		'add_new_item'       => __( 'Add New Contact', '18wdwu07Pokemon' ),
	);
	$args = array(
        'labels' => $labels,
        'description' => 'Contacts form to contact us',
        'public' => false,
		'menu_position' => 20,
		'query_var' => true,
        'menu_icon' => 'dashicons-megaphone',
        'supports' => array('title', 'editor')
	);
	register_post_type('contact', $args);
}
add_action('init', 'add_contact_post_type');