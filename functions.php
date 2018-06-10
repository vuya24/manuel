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

add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}

// Default 
include 'functions/misc.php';
include 'functions/admin-login.php';
//include 'functions/remove-admin-menus.php';
//
// Post types
/* include 'functions/post-types/prednosti.php';
include 'functions/post-types/radovi.php'; */