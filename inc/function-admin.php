<?php


/*
===============
ADMIN PAGE
===============


*/

function pokemon_add_admin_page(){
    add_menu_page('Pokemon Options', 'Pokemon', 'manage_options', 'Pokemon_page', 'pokemon_create_page', get_template_directory_uri() . '/img/pokemon-icon.png', 110 );

    add_submenu_page('Pokemon_page', 'Pokemon Theme Options', 'General', 'manage_options', 'Pokemon_page', 'pokemon_create_page');
    add_submenu_page('Pokemon_page', 'Pokemon CSS Options', 'Custom CSS', 'manage_options', 'Pokemon_page_css', 'pokemon_theme_settings_page');

    add_action('admin_init', 'pokemon_custom_settings');


}
add_action('admin_menu', 'pokemon_add_admin_page');

function pokemon_custom_settings(){
    register_setting('pokemon-settings-group', 'first_name');
    add_settings_section('pokemon-sidebar-options', 'Siderbar Options', 'Pokemon_sidebar_options', 'Pokemon_page');

    add_settings_field('sidebar-name', 'First Name', 'pokemon_sidebar_name', 'Pokemon_page', 'pokemon-sidebar-options');
}


function Pokemon_sidebar_options(){
    echo 'customize your sidebar information';
}


function pokemon_sidebar_name(){
    echo '<input type="text" name="first-name" value="" placeholder="First Name"/>';
}

function pokemon_create_page(){
    require_once(get_template_directory() . '/inc/templates/pokemon-admin.php');
}

function pokemon_theme_settings_page(){
    echo '<h1> Pokemon Custom CSS Options</h1>';
}