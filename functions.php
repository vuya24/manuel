<?php
if (function_exists('add_theme_support')) {
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
}

function isa_remove_jquery_migrate( &$scripts) {
    if( !is_admin() ) {
        $scripts->remove( 'jquery');
    }
}
add_filter( 'wp_default_scripts', 'isa_remove_jquery_migrate' );

// Default 
include 'functions/misc.php';
include 'functions/admin-login.php';
//include 'functions/remove-admin-menus.php';
//
// Post types
/* include 'functions/post-types/prednosti.php';
include 'functions/post-types/radovi.php'; */