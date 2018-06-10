<?php
function truncate($string, $length, $dots = "...") {
    $new_string = (mb_strlen($string, 'utf8' ) > $length) ? mb_substr($string, 0, $length - mb_strlen($dots, 'utf8' )) . $dots : $string;
    $new_string = str_replace("&nbsp;", '', $new_string);
    
    return $new_string;
}

function custom_pagination($numpages = '', $pagerange = '', $paged='')  {
    if (empty($pagerange)) {
        $pagerange = 2;
    }

    if ($paged == '') {
        global $paged;
        if (empty($paged)) {
        $paged = 1;
        }
    }
    if ($numpages == '') {
        global $wp_query;
        $numpages = $wp_query->max_num_pages;
        if(!$numpages) {
            $numpages = 1;
        }
    }

    /** 
    * We construct the pagination arguments to enter into our paginate_links
    * function. 
    */

    $pagination_args = array(
        'base'            => get_pagenum_link(1) . '%_%',
        'format'          => 'page/%#%',
        'total'           => $numpages,
        'current'         => $paged,
        'show_all'        => false,
        'end_size'        => 1,
        'mid_size'        => $pagerange,
        'prev_next'       => true,
        'prev_text'       => '>',
        'next_text'       => '<',
        'type'            => 'plain',
        'add_args'        => true,
        'add_fragment'    => '',
        'after_page_number' => '',
        'before_page_number' =>'',
    );
    $paginate_links = paginate_links($pagination_args);

    if ( $paginate_links ) {
    echo "<nav class='paging-navigation'>";
      echo $paginate_links;
    echo "</nav>";
    }
}

function wpb_remove_version() {
    return '';
}

function remove_footer_admin () {
    echo '';
}

function no_wordpress_errors(){
    return 'Krivi korisnik/šifra, pokušajte ponovno';
}

add_filter('xmlrpc_enabled', '__return_false');
add_filter('login_errors', 'no_wordpress_errors');
add_filter('admin_footer_text', 'remove_footer_admin');
add_filter('the_generator', 'wpb_remove_version');
