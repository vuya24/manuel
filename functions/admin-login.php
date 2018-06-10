<?php
function my_login_logo() { ?>
    <style type="text/css">
        body {
			background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/admin-bg.jpg) !important;
			background-position: center !important;
			background-size: cover !important;
			width: 100% !important;
			height: 1080px !important;
        }
        #login h1 a, .login h1 a {
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/mmm-vukelic-logo-admin.png);
		width:320px;
        background-size: contain;
		background-repeat: no-repeat;
        }
        #login_error, .login .message {
            border-color: #2f6f0e !important;
        }
        .login form {
            border: 1px solid #d0d0d0;
            box-shadow: none;
        }
		.login a {
            color: #fff !important;
        }
        .login input:focus {
            border-color: #2f6f0e !important;
        }
        #wp-submit {
            background: #2f6f0e;
            border-color: #2f6f0e;
            -webkit-box-shadow: 0 1px 0 #2f6f0e;
            box-shadow: 0 1px 0 #2f6f0e;
            color: #fff;
            text-decoration: none;
            text-shadow: 0 -1px 1px #2f6f0e, 1px 0 1px #2f6f0e, 0 1px 1px #2f6f0e, -1px 0 1px #2f6f0e;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return false;
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

function wpb_custom_logo() { ?>
    <style type="text/css">
        #wpadminbar #wp-admin-bar-wp-logo {display: none;}
    </style>
<?php }
add_action('wp_before_admin_bar_render', 'wpb_custom_logo');