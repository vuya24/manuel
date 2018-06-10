<?php
// Reference https://codex.wordpress.org/Function_Reference/remove_menu_page
function remove_menus() {
	remove_menu_page( 'edit.php' );
	remove_menu_page( 'edit-comments.php' );
	remove_menu_page( 'tools.php' );
}

add_action( 'admin_menu', 'remove_menus' );