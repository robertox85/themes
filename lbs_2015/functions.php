<?php
wp_enqueue_script('jquery');
//add_filter('show_admin_bar', '__return_true');
add_filter('show_admin_bar', '__return_false');
add_theme_support('post-thumbnails');
add_post_type_support('page', 'excerpt');

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

function register_my_menus()
{
    register_nav_menus(
        array(
            'menu-top' => __('Menu Principale'),
            'menu-sidebar-left' => __('Menu Sidebar Sx'),
            'footer-menu' => __('Menu footer'),
        )
    );
}

function tematiche_menu()
{
    register_nav_menu('tematiche_menu', __('Menu Tematiche'));
}
add_action('init', 'tematiche_menu');

add_filter('rocket_htaccess_mod_deflate', '__return_false');

add_action('init', 'register_my_menus');

// add tag support to pages
function pages_support_taxonomies()
{
    register_taxonomy_for_object_type('post_tag', 'page');
    register_taxonomy_for_object_type('category', 'page');
}

// ensure all tags are included in queries
function tags_support_query($wp_query)
{
    if ($wp_query->get('tag')) {
        $wp_query->set('post_type', 'any');
    }

}

// aggiungi tassonomia tematica
add_action('init', 'register_taxonomy_tematiche');

function register_taxonomy_tematiche()
{

    $labels = array(
        'name' => _x('Tematiche', 'tematiche'),
        'singular_name' => _x('Tematica', 'tematiche'),
        'search_items' => _x('Search Tematiche', 'tematiche'),
        'popular_items' => _x('Popular Tematiche', 'tematiche'),
        'all_items' => _x('All Tematiche', 'tematiche'),
        'parent_item' => _x('Parent Tematica', 'tematiche'),
        'parent_item_colon' => _x('Parent Tematica:', 'tematiche'),
        'edit_item' => _x('Edit Tematica', 'tematiche'),
        'update_item' => _x('Update Tematica', 'tematiche'),
        'add_new_item' => _x('Add New Tematica', 'tematiche'),
        'new_item_name' => _x('New Tematica', 'tematiche'),
        'separate_items_with_commas' => _x('Separate tematiche with commas', 'tematiche'),
        'add_or_remove_items' => _x('Add or remove tematiche', 'tematiche'),
        'choose_from_most_used' => _x('Choose from the most used tematiche', 'tematiche'),
        'menu_name' => _x('Tematiche', 'tematiche'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => false,
        'show_ui' => true,
        'show_tagcloud' => false,
        'show_admin_column' => false,
        'hierarchical' => true,

        'rewrite' => true,
        'query_var' => true,
    );

    register_taxonomy('tematiche', array('page'), $args);
}

// aggiungi tassonomia lingua
add_action('init', 'register_taxonomy_lingue');

function register_taxonomy_lingue()
{

    $labels = array(
        'name' => _x('Lingue', 'lingue'),
        'singular_name' => _x('Lingua', 'lingue'),
        'search_items' => _x('Search Lingue', 'lingue'),
        'popular_items' => _x('Popular Lingue', 'lingue'),
        'all_items' => _x('All Tematiche', 'lingue'),
        'parent_item' => _x('Parent Lingua', 'lingue'),
        'parent_item_colon' => _x('Parent Lingua:', 'lingue'),
        'edit_item' => _x('Edit Lingua', 'lingue'),
        'update_item' => _x('Update Lingua', 'lingue'),
        'add_new_item' => _x('Add New Lingua', 'lingue'),
        'new_item_name' => _x('New Lingua', 'lingue'),
        'separate_items_with_commas' => _x('Separate lingue with commas', 'lingue'),
        'add_or_remove_items' => _x('Add or remove lingue', 'lingue'),
        'choose_from_most_used' => _x('Choose from the most used lingue', 'lingue'),
        'menu_name' => _x('Lingue', 'lingue'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => false,
        'show_ui' => true,
        'show_tagcloud' => false,
        'show_admin_column' => false,
        'hierarchical' => true,

        'rewrite' => true,
        'query_var' => true,
    );

    register_taxonomy('lingue', array('page'), $args);
}

// aggiungi tassonomia lunghezza corso
add_action('init', 'register_taxonomy_lunghezza_corsi');

function register_taxonomy_lunghezza_corsi()
{

    $labels = array(
        'name' => _x('Lunghezza Corsi', 'lunghezza_corsi'),
        'singular_name' => _x('Lunghezza Corso', 'lunghezza_corsi'),
        'search_items' => _x('Search Lunghezza Corsi', 'lunghezza_corsi'),
        'popular_items' => _x('Popular Lunghezza Corsi', 'lunghezza_corsi'),
        'all_items' => _x('All Lunghezza Corsi', 'lunghezza_corsi'),
        'parent_item' => _x('Parent Lunghezza Corso', 'lunghezza_corsi'),
        'parent_item_colon' => _x('Parent Lunghezza Corso:', 'lunghezza_corsi'),
        'edit_item' => _x('Edit Lunghezza Corso', 'lunghezza_corsi'),
        'update_item' => _x('Update Lunghezza Corso', 'lunghezza_corsi'),
        'add_new_item' => _x('Add New Lunghezza Corso', 'lunghezza_corsi'),
        'new_item_name' => _x('New Lunghezza Corso', 'lunghezza_corsi'),
        'separate_items_with_commas' => _x('Separate lunghezza corsi with commas', 'lunghezza_corsi'),
        'add_or_remove_items' => _x('Add or remove lunghezza corsi', 'lunghezza_corsi'),
        'choose_from_most_used' => _x('Choose from the most used lunghezza corsi', 'lunghezza_corsi'),
        'menu_name' => _x('Lunghezza Corsi', 'lunghezza_corsi'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'show_admin_column' => false,
        'hierarchical' => true,

        'rewrite' => true,
        'query_var' => true,
    );

    register_taxonomy('lunghezza_corsi', array('page'), $args);
}

// aggiungi tassonomia area competenza
//add_action( 'init', 'register_taxonomy_area_competenze' );

//function register_taxonomy_area_competenze() {

//    $labels = array(
//    'name' => _x( 'Area Competenze', 'area_competenze' ),
//    'singular_name' => _x( 'Area Competenza', 'area_competenze' ),
//    'search_items' => _x( 'Search Area Competenze', 'area_competenze' ),
//    'popular_items' => _x( 'Popular Area Competenze', 'area_competenze' ),
//    'popular_items' => _x( 'Popular Area Competenze', 'area_competenze' ),
//    'all_items' => _x( 'All Area Competenze', 'area_competenze' ),
//    'parent_item' => _x( 'Parent Area Competenza', 'area_competenze' ),
//    'parent_item_colon' => _x( 'Parent Area Competenza:', 'area_competenze' ),
//    'edit_item' => _x( 'Edit Area Competenza', 'area_competenze' ),
//    'update_item' => _x( 'Update Area Competenza', 'area_competenze' ),
//    'add_new_item' => _x( 'Add New Area Competenza', 'area_competenze' ),
//    'new_item_name' => _x( 'New Area Competenza', 'area_competenze' ),
//    'separate_items_with_commas' => _x( 'Separate area competenze with commas', 'area_competenze' ),
//    'add_or_remove_items' => _x( 'Add or remove area competenze', 'area_competenze' ),
//    'choose_from_most_used' => _x( 'Choose from the most used area competenze', 'area_competenze' ),
//    'menu_name' => _x( 'Area Competenze', 'area_competenze' ),
//);

//$args = array(
//    'labels' => $labels,
//    'public' => true,
//    'show_in_nav_menus' => true,
//    'show_ui' => true,
//    'show_tagcloud' => true,
//        'show_admin_column' => false,
//    'hierarchical' => true,

//    'rewrite' => true,
//        'query_var' => true
//    );

//    register_taxonomy( 'area_competenze', array( 'page' ), $args );
//     register_taxonomy( 'area_competenze', array( 'page' ), $args );
// }

// aggiungi tassonomia Funzioni
//add_action( 'init', 'register_taxonomy_funzioni' );
//function register_taxonomy_funzioni() {

//   $labels = array(
//       'name' => _x( 'Funzioni', 'funzioni' ),
//       'singular_name' => _x( 'Funzione', 'funzioni' ),
//       'search_items' => _x( 'Search Funzioni', 'funzioni' ),
//       'popular_items' => _x( 'Popular Funzioni', 'funzioni' ),
//      'all_items' => _x( 'All Funzioni', 'funzioni' ),
//      'parent_item' => _x( 'Parent Funzione', 'funzioni' ),
//      'parent_item_colon' => _x( 'Parent Funzione:', 'funzioni' ),
//      'edit_item' => _x( 'Edit Funzione', 'funzioni' ),
//      'update_item' => _x( 'Update Funzione', 'funzioni' ),
//     'add_new_item' => _x( 'Add New Funzione', 'funzioni' ),
//     'new_item_name' => _x( 'New Funzione', 'funzioni' ),
//     'separate_items_with_commas' => _x( 'Separate funzioni with commas', 'funzioni' ),
//     'add_or_remove_items' => _x( 'Add or remove funzioni', 'funzioni' ),
//     'choose_from_most_used' => _x( 'Choose from the most used funzioni', 'funzioni' ),
//     'menu_name' => _x( 'Funzioni', 'funzioni' ),
//  );

//   $args = array(
//     'labels' => $labels,
//     'public' => true,
//     'show_in_nav_menus' => true,
//     'show_ui' => true,
//     'show_tagcloud' => true,
//     'show_admin_column' => false,
//     'hierarchical' => true,

//     'rewrite' => true,
//      'query_var' => true
//  );

// register_taxonomy( 'funzioni', array('page'), $args );
//}

//////

// aggiungi tassonomia Settori
//add_action( 'init', 'register_taxonomy_settori' );

//function register_taxonomy_settori() {

//   $labels = array(
//       'name' => _x( 'Settori', 'settori' ),
//      'singular_name' => _x( 'Settore', 'settori' ),
//       'search_items' => _x( 'Search settori', 'settori' ),
//       'popular_items' => _x( 'Popular settori', 'settori' ),
//      'all_items' => _x( 'All settori', 'settori' ),
//      'parent_item' => _x( 'Parent settore', 'settori' ),
//       'parent_item_colon' => _x( 'Parent settore:', 'settori' ),
//       'edit_item' => _x( 'Edit settore', 'settori' ),
//       'update_item' => _x( 'Update settore', 'settori' ),
//      'add_new_item' => _x( 'Add New settore', 'settori' ),
//      'new_item_name' => _x( 'New settore', 'settori' ),
//     'separate_items_with_commas' => _x( 'Separate settori with commas', 'settori' ),
//     'add_or_remove_items' => _x( 'Add or remove settori', 'settori' ),
//     'choose_from_most_used' => _x( 'Choose from most used settori', 'settori' ),
//      'menu_name' => _x( 'Settori', 'settori' ),
//  );

//   $args = array(
//    'labels' => $labels,
//     'public' => true,
//     'show_in_nav_menus' => true,
//     'show_ui' => true,
//    'show_tagcloud' => true,
//    'show_admin_column' => false,
//    'hierarchical' => true,

//     'rewrite' => true,
//     'query_var' => true
//  );

//  register_taxonomy( 'settori', array('page'), $args );
//}

/////////////////////

// Register Custom Taxonomy
function master_taxonomy()
{

    $labels = array(
        'name' => _x('Masters', 'Taxonomy General Name', 'text_domain'),
        'singular_name' => _x('Master', 'Taxonomy Singular Name', 'text_domain'),
        'menu_name' => __('Menu Master', 'text_domain'),
        'all_items' => __('Tutti i Master', 'text_domain'),
        'parent_item' => __('Parent Item', 'text_domain'),
        'parent_item_colon' => __('Parent Master:', 'text_domain'),
        'new_item_name' => __('New Item Master', 'text_domain'),
        'add_new_item' => __('Add New Master', 'text_domain'),
        'edit_item' => __('Edit Master', 'text_domain'),
        'update_item' => __('Update Item', 'text_domain'),
        'view_item' => __('View Master', 'text_domain'),
        'separate_items_with_commas' => __('Separate Master with commas', 'text_domain'),
        'add_or_remove_items' => __('Add or remove Master', 'text_domain'),
        'choose_from_most_used' => __('Choose from the most used', 'text_domain'),
        'popular_items' => __('Popular Master', 'text_domain'),
        'search_items' => __('Search Master', 'text_domain'),
        'not_found' => __('Not Found', 'text_domain'),
        'no_terms' => __('No Master', 'text_domain'),
        'items_list' => __('Masterlist', 'text_domain'),
        'items_list_navigation' => __('Master list navigation', 'text_domain'),
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => false,
        'show_ui' => true,
        'show_tagcloud' => false,
        'show_admin_column' => false,
        'hierarchical' => true,

        'rewrite' => true,
        'query_var' => true,
    );

    register_taxonomy('Master', array('post'), $args);

}
add_action('init', 'master_taxonomy', 0);

function get_top_level_parent()
{
    global $post;
    $parents = get_post_ancestors($post->ID);
    $id = ($parents) ? $parents[count($parents) - 1] : $post->ID;
    $top_level_parent = get_post($id);
    return $top_level_parent;
}

function my_bcn_allowed_html($allowed_html)
{
    $allowed_html['li'] = array(
        'title' => true,
        'class' => true,
        'id' => true,
        'dir' => true,
        'align' => true,
        'lang' => true,
        'xml:lang' => true,
        'aria-hidden' => true,
        'data-icon' => true,
        'itemref' => true,
        'itemid' => true,
        'itemprop' => true,
        'itemscope' => true,
        'itemtype' => true,
        'property' => true,
        'xmlns:v' => true,
    );

    $allowed_html['span'] = array(
        'title' => true,
        'class' => true,
        'id' => true,
        'dir' => true,
        'align' => true,
        'lang' => true,
        'xml:lang' => true,
        'aria-hidden' => true,
        'data-icon' => true,
        'itemref' => true,
        'itemid' => true,
        'itemprop' => true,
        'itemscope' => true,
        'itemtype' => true,
        'rel' => true,
        'typeof' => true,
        'property' => true,
        'xmlns:v' => true,
    );

    $allowed_html['div'] = array(
        'title' => true,
        'class' => true,
        'id' => true,
        'dir' => true,
        'align' => true,
        'lang' => true,
        'xml:lang' => true,
        'aria-hidden' => true,
        'data-icon' => true,
        'itemref' => true,
        'itemid' => true,
        'itemprop' => true,
        'itemscope' => true,
        'itemtype' => true,
        'rel' => true,
        'typeof' => true,
        'property' => true,
        'xmlns:v' => true,
    );

    $allowed_html['a'] = array(
        'title' => true,
        'class' => true,
        'id' => true,
        'dir' => true,
        'align' => true,
        'lang' => true,
        'xml:lang' => true,
        'aria-hidden' => true,
        'data-icon' => true,
        'itemref' => true,
        'itemid' => true,
        'itemprop' => true,
        'itemscope' => true,
        'itemtype' => true,
        'rel' => true,
        'typeof' => true,
        'property' => true,
        'xmlns:v' => true,
        'href' => true,
    );

    return $allowed_html;
}
add_filter('bcn_allowed_html', 'my_bcn_allowed_html');

function readmore($lang)
{
    $readmore_msg = array();
    $readmore_msg['it'] = 'Leggi di più';
    $readmore_msg['en'] = 'Read more';
    return $readmore_msg[$lang];
}

function add_image_class($class)
{
    $class .= ' img-responsive';
    return $class;
}
add_filter('get_image_tag_class', 'add_image_class');

function sanitize_GET_param($param)
{

    $param_sanitized = (get_magic_quotes_gpc()) ? $param : addslashes($param);

    return $param_sanitized;

}

define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true);

function language_selector_flags()
{
    if (function_exists('icl_get_languages')) {
        $languages = icl_get_languages('skip_missing=0&orderby=code&order=asc');
        echo '<div class="lang_selector">';
        echo '<ul>';
        if (!empty($languages)) {
            foreach ($languages as $l) {
                $class = $l['active'] ? ' class="active"' : null;
                $langs .= '<li><a ' . $class . ' href="' . $l['url'] . '">' . strtoupper($l['language_code']) . '</a></li>';
            }
            //$langs = substr($langs,0,-3);
            echo $langs;
        }

        echo '</ul>';
        echo '</div>';
    }
}

function get_sidebar_menu($menu_name)
{

    wp_nav_menu(array(
        'theme_location' => 'menu-sidebar-left',
        'menu' => $menu_name,
        'container_class' => 'menu-sidebar-left-container',
        'container' => 'div',
        'menu_class' => 'menu menu-sidebar-left',
    ));

}

// sidebar right

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Sidebar DX',
        'before_title' => '<h3>',
        'after_title' => '</h3>',

   ));
}

// sidebar right

//if (function_exists('register_sidebar')) {
//    register_sidebar(array(
//        'name' => 'perche',
//        'before_title' => '<h2>',
//        'after_title' => '</h2>',

//   ));
//}

// sidebar right

//if (function_exists('register_sidebar')) {
//    register_sidebar(array(
//        'name' => 'faq',
//        'before_title' => '<h2>',
//        'after_title' => '</h2>',

//    ));
//}

// sidebar right

//if (function_exists('register_sidebar')) {
//   register_sidebar(array(
//        'name' => 'agevolazioni',
//        'before_title' => '<h2>',
//        'after_title' => '</h2>',

//    ));
//}

// sidebar right

//if (function_exists('register_sidebar')) {
//    register_sidebar(array(
//        'name' => 'evento',
//        'before_title' => '<h2>',
//        'after_title' => '</h2>',

//    ));
//}

function corsi_get_taxonomies($list)
{

    $taxonomy = array();
    $t = 0;

    $t++;
    $taxonomy[$t]['it']['name'] = 'lingue';
    $taxonomy[$t]['it']['label'] = 'Lingua';
    $taxonomy[$t]['en']['name'] = 'lingue';
    $taxonomy[$t]['en']['label'] = 'Language';

    $t++;
    $taxonomy[$t]['it']['name'] = 'lunghezza_corsi';
    $taxonomy[$t]['it']['label'] = 'Lunghezza';
    $taxonomy[$t]['en']['name'] = 'lunghezza_corsi';
    $taxonomy[$t]['en']['label'] = 'Length';

    $t++;
    $taxonomy[$t]['it']['name'] = 'tematiche';
    $taxonomy[$t]['it']['label'] = 'Tematiche';
    $taxonomy[$t]['en']['name'] = 'tematiche';
    $taxonomy[$t]['en']['label'] = 'Area';

    $t++;
    $taxonomy[$t]['it']['name'] = 'funzioni';
    $taxonomy[$t]['it']['label'] = 'Funzioni';
    $taxonomy[$t]['en']['name'] = 'funzioni';
    $taxonomy[$t]['en']['label'] = 'Functions';

    $t++;
    $taxonomy[$t]['it']['name'] = 'settori';
    $taxonomy[$t]['it']['label'] = 'Settori';
    $taxonomy[$t]['en']['name'] = 'settori';
    $taxonomy[$t]['en']['label'] = 'Sector';

    $t++;
    $taxonomy[$t]['it']['name'] = 'area_competenze';
    $taxonomy[$t]['it']['label'] = 'Area Competenze';
    $taxonomy[$t]['en']['name'] = 'area_competenze';
    $taxonomy[$t]['en']['label'] = 'Topics';

    $taxonomies = $taxonomy;

    if (!(empty($list))) {

        $taxonomies = array();
        foreach ($taxonomy as $taxonomy) {
            if (in_array($taxonomy['it']['name'], $list)) {
                $taxonomies[] = $taxonomy;
            }
        }
    }

    return $taxonomies;

}

function corso_writetaxonomy($taxonomy)
{
    global $post;
    $terms = get_the_terms($post->ID, $taxonomy);

    if ($terms && !is_wp_error($terms)) {

        $taxonomies_list = array();

        foreach ($terms as $term) {
            $taxonomies_list[] = $term->name;
        }

        $taxonomies = join(", ", $taxonomies_list);

        return $taxonomies;
    }

}

function fillzeros($theValue, $maxlen)
{
    $lunghezza = intval(strlen($theValue));
    if ($lunghezza < $maxlen) {
        $i = 0;
        while ($i < (($maxlen - $lunghezza))) {

            $theValue = '0' . $theValue;
            $i++;
        }
    }
    return $theValue;
}

function get_date($theValue, $theType, $lang)
{

    $month_name = array();
    $month_name['it'][1] = "Gennaio";
    $month_name['it'][2] = "Febbraio";
    $month_name['it'][3] = "Marzo";
    $month_name['it'][4] = "Aprile";
    $month_name['it'][5] = "Maggio";
    $month_name['it'][6] = "Giugno";
    $month_name['it'][7] = "Luglio";
    $month_name['it'][8] = "Agosto";
    $month_name['it'][9] = "Settembre";
    $month_name['it'][10] = "Ottobre";
    $month_name['it'][11] = "Novembre";
    $month_name['it'][12] = "Dicembre";

    $month_name['en'][1] = "January";
    $month_name['en'][2] = "February";
    $month_name['en'][3] = "March";
    $month_name['en'][4] = "April";
    $month_name['en'][5] = "May";
    $month_name['en'][6] = "June";
    $month_name['en'][7] = "July";
    $month_name['en'][8] = "August";
    $month_name['en'][9] = "September";
    $month_name['en'][10] = "October";
    $month_name['en'][11] = "November";
    $month_name['en'][12] = "December";

    $date3 = array();
    $date3['it'][1] = "Gen";
    $date3['it'][2] = "Feb";
    $date3['it'][3] = "Mar";
    $date3['it'][4] = "Apr";
    $date3['it'][5] = "Mag";
    $date3['it'][6] = "Giu";
    $date3['it'][7] = "Lug";
    $date3['it'][8] = "Ago";
    $date3['it'][9] = "Set";
    $date3['it'][10] = "Ott";
    $date3['it'][11] = "Nov";
    $date3['it'][12] = "Dic";

    $date3['en'][1] = "Jan";
    $date3['en'][2] = "Feb";
    $date3['en'][3] = "Mar";
    $date3['en'][4] = "Apr";
    $date3['en'][5] = "May";
    $date3['en'][6] = "Jun";
    $date3['en'][7] = "Jul";
    $date3['en'][8] = "Aug";
    $date3['en'][9] = "Sep";
    $date3['en'][10] = "Oct";
    $date3['en'][11] = "Nov";
    $date3['en'][12] = "Dec";

    switch ($theType) {
        case "standard":
            $theValue = substr($theValue, 6, 2) . '/' . substr($theValue, 4, 2) . '/' . substr($theValue, 0, 4);
            break;
        case "isotostandard":
            $theValue = substr($theValue, 8, 2) . '/' . substr($theValue, 5, 2) . '/' . substr($theValue, 0, 4);
            break;
        //case "events":
        //    $month = substr( $theValue, 5, 2 ) + 0;
        //    $theValue = substr( $theValue, 8, 2 ) . ' ' . $month_name[ $lang ][ $month ] . ' ' . substr( $theValue, 0, 4 );
        //    break;

        case "events":
            $month = substr($theValue, 5, 2) + 0;
            $theValue = '<span class="day">' . substr($theValue, 8, 2) . '</span> <span class="month">' . $date3[$lang][$month] . '</span> <span class="year">' . substr($theValue, 0, 4) . '</span>';
            break;

        case "monthname":
            $month = $theValue + 0;
            $theValue = $month_name[$lang][$month];
            break;

        case "home":
            $month = substr($theValue, 5, 2) + 0;
            $theValue = substr($theValue, 8, 2) . ' ' . $date3[$lang][$month] . ' ' . substr($theValue, 1, 0);
            break;

        case "monthname":
            $month = $theValue + 0;
            $theValue = $month_name[$lang][$month];
            break;
    }

    return $theValue;

}

/**
 * Produci Archivio Eventi
 */

function get_eventi_archive()
{
    global $wpdb;

    $month_name = array();
    $month_name['it'][1] = "Gennaio";
    $month_name['it'][2] = "Febbraio";
    $month_name['it'][3] = "Marzo";
    $month_name['it'][4] = "Aprile";
    $month_name['it'][5] = "Maggio";
    $month_name['it'][6] = "Giugno";
    $month_name['it'][7] = "Luglio";
    $month_name['it'][8] = "Agosto";
    $month_name['it'][9] = "Settembre";
    $month_name['it'][10] = "Ottobre";
    $month_name['it'][11] = "Novembre";
    $month_name['it'][12] = "Dicembre";

    $month_name['en'][1] = "January";
    $month_name['en'][2] = "February";
    $month_name['en'][3] = "March";
    $month_name['en'][4] = "April";
    $month_name['en'][5] = "May";
    $month_name['en'][6] = "June";
    $month_name['en'][7] = "July";
    $month_name['en'][8] = "August";
    $month_name['en'][9] = "September";
    $month_name['en'][10] = "October";
    $month_name['en'][11] = "November";
    $month_name['en'][12] = "December";

    $archive_link = array();
    $archive_link['it'] = '/news-eventi/calendario/';
    $archive_link['en'] = '/en/news-events/calendar/';

    $query_years = $wpdb->prepare("SELECT YEAR(post_date) AS archive_year FROM wp_lbs_2015_devposts  WHERE post_type = 'evento' AND post_status ='publish' GROUP BY YEAR(post_date) ORDER BY post_date DESC");
    $results = $wpdb->get_results($query_years);

    if (!empty($results)) {
        foreach ($results as $result) {
            echo '<h3>' . $result->archive_year . '</h3><ul>';
            for ($m = 12; $m > 0; $m--) {

                //$query_month = $wpdb->prepare("SELECT COUNT(ID) AS events_tot FROM wp_lbs_2015_devposts  WHERE post_type = 'evento' AND post_status ='publish' AND YEAR(post_date) = '".$result->archive_year."' AND MONTH(post_date)=".fillzeros($m,2));

                $query_month = ("SELECT COUNT(ID) AS events_tot FROM wp_lbs_2015_devposts  WHERE post_type = 'evento' AND post_status ='publish' AND ID IN (SELECT post_id FROM wp_lbs_2015_devpostmeta WHERE meta_key = 'data_inizio' AND meta_value LIKE '" . $result->archive_year . "-" . fillzeros($m, 2) . "-%')");

                $rsmonth = $wpdb->get_row($query_month);
                //echo '<li><code>'.$query_month.'</code></li>';
                if ($rsmonth->events_tot > 0) {
                    echo '<li><a href="' . $archive_link[ICL_LANGUAGE_CODE] . '#month-' . fillzeros($m, 2) . '-' . $result->archive_year . '">' . $month_name[ICL_LANGUAGE_CODE][$m] . '</a></li>';
                }
            }
            echo '</ul>';
        }
    }

}

/**
 * Produci Json docenti
 */
function docenti_make_json()
{
    $docenti_cats = array('50', '51');
    //$associati_cats= array('104','105');
    if (has_category($docenti_cats, $post)) {

        //ITA
        $args = array(
            'posts_per_page' => 500,
            'offset' => 0,
            'orderby' => 'title',
            'order' => 'ASC',
            'cat' => '50',
            'post_type' => 'page',
            'post_status' => 'publish',
            'suppress_filters' => true);

        $docenti = get_posts($args);
        if (!(empty($docenti))) {
            $listings = array();
            $docenti_list = array();

            foreach ($docenti as $docente) {

                $insegnamento = get_post_meta($docente->ID, 'insegnamento', true);
                $docenti_list[] = array('docente_searchstring' => $docente->post_title . ' ' . $insegnamento, 'docente_nome' => get_post_meta($docente->ID, 'nome'), 'docente_cognome' => get_post_meta($docente->ID, 'cognome'), 'docente_insegnamenti' => $insegnamento, 'docente_classificazione' => get_post_meta($docente->ID, 'classificazione'), 'docente_permalink' => get_permalink($docente->ID));

            }

            //print_r($docenti_list);
            //die();
            $listings['list'] = $docenti_list;
            $path = "/server/sites/businessschool.it/wp-content/themes/lbs_2015/json/";
            $fp = fopen($path . 'docenti-it.json', 'w');

            if (fwrite($fp, json_encode($listings)) === false) {
                die("Cannot write to file");
                exit;
            }
            fclose($fp);

        } // END ITA

        //ENG

        $args = array(
            'posts_per_page' => 500,
            'offset' => 0,
            'orderby' => 'title',
            'order' => 'ASC',
            'cat' => '51',
            'post_type' => 'page',
            'post_status' => 'publish',
            'suppress_filters' => true);

        $docenti = get_posts($args);

        if (!(empty($docenti))) {
            $listings = array();
            $docenti_list = array();

            foreach ($docenti as $docente) {

                $insegnamento = get_post_meta($docente->ID, 'insegnamento', true);
                $docenti_list[] = array('docente_searchstring' => $docente->post_title . ' ' . $insegnamento, 'docente_nome' => get_post_meta($docente->ID, 'nome'), 'docente_cognome' => get_post_meta($docente->ID, 'cognome'), 'docente_insegnamenti' => $insegnamento, 'docente_classificazione' => get_post_meta($docente->ID, 'classificazione'), 'docente_permalink' => get_permalink($docente->ID));

            }

            //print_r($docenti_list);
            //die();
            $listings['list'] = $docenti_list;
            $path = "/home/sito/htdocs/businessschool.it/wp-content/themes/lbs_2015/json/";
            $fp = fopen($path . 'docenti-en.json', 'w');

            if (fwrite($fp, json_encode($listings)) === false) {
                die("Cannot write to file");
                exit;
            }
            fclose($fp);

        } // END ENG

    } // END if

}
add_action('save_post', 'docenti_make_json', 10, 3);

// tag hooks
add_action('init', 'pages_support_taxonomies');
add_action('pre_get_posts', 'tags_support_query');

function title_filter($where, &$wp_query)
{
    global $wpdb;
    if ($search_term = $wp_query->get('docente_search_query')) {
        $where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql(like_escape($search_term)) . '%\'';
    }
    return $where;

}
// ajax corsi

add_action('wp_ajax_ep_query_posts', 'ep_query_posts');
add_action('wp_ajax_nopriv_ep_query_posts', 'ep_query_posts');

function ep_query_posts()
{
    $course_cat = array();
    $course_cat['it'] = 15;
    $course_cat['en'] = 16;
    $post_parent = array();
    $post_parent['it'] = 42;
    $post_parent['en'] = 2202;

    // part time

    $query_tax_value = 25;
    $tax_query = array();
    $tax_query[] = array(
        'taxonomy' => 'lunghezza_corsi',
        'field' => 'id',
        'terms' => (int) $query_tax_value,
    );

    $query_tax_value = $_POST['tematica'];
    $tax_query[] = array(
        'taxonomy' => 'tematiche',
        'field' => 'id',
        'terms' => (int) $query_tax_value,
    );

    $args = array(
        'post_type' => 'page',
        'post_status' => 'publish',
        'cat' => $course_cat[ICL_LANGUAGE_CODE],
        'post_parent' => $post_parent[ICL_LANGUAGE_CODE],
        'pagination' => true,
        'tax_query' => $tax_query,
        'meta_query' => array(
            array(
                'key' => 'data_inizio', // which meta to query
                'value' => date("Y-m-d"),
                'compare' => '>=', // method of comparison
                'type' => 'DATE',
            ),
        ),
        'posts_per_page' => '500',
        'meta_key' => 'data_inizio',
        'orderby' => 'meta_value',
        'order' => 'ASC',
        'suppress_filters' => false,

    );

    $corsi = get_posts($args);

    if (!(empty($corsi))) {

        foreach ($corsi as $corso) {
            $data_inizio = get_post_meta($corso->ID, 'data_inizio', true);
            $corso_lingua = get_post_meta($corso->ID, 'lingua_corso', true);

            //var_dump($corso_lingua);

            $content .= '<div class="col-lg-3 columns panel course-part-time"><a href="' . get_permalink($corso->ID) . '" title="' . $corso->post_title . '">
        <div class="text">
          <h2 class="titolo-corso">' . $corso->post_title . '</h2>
          <hr class="yellow">
          <span class="course-type">Part-Time</span>
		  <span class="course-start-date">' . get_date($data_inizio, "standard") . '</span>';

            if ($corso_lingua != '') {
                $content .= '<span class="course-english">' . $corso_lingua . '</span>';
            }

            $content .= '
        </div>
        </a>
		</div>';

        } // END foreach

    }

    // END part time

    // short course
    $tax_query = array();
    $query_tax_value = 26;
    $tax_query[] = array(
        'taxonomy' => 'lunghezza_corsi',
        'field' => 'id',
        'terms' => (int) $query_tax_value,
    );

    $query_tax_value = $_POST['tematica'];
    $tax_query[] = array(
        'taxonomy' => 'tematiche',
        'field' => 'id',
        'terms' => (int) $query_tax_value,
    );

    $args = array(
        'post_type' => 'page',
        'post_status' => 'publish',
        'cat' => $course_cat[ICL_LANGUAGE_CODE],
        'post_parent' => $post_parent[ICL_LANGUAGE_CODE],
        'pagination' => true,
        'tax_query' => $tax_query,
        'meta_query' => array(
            array(
                'key' => 'data_inizio', // which meta to query
                'value' => date("Y-m-d"),
                'compare' => '>=', // method of comparison
                'type' => 'DATE',
            ),
        ),
        'posts_per_page' => '500',
        'meta_key' => 'data_inizio',
        'orderby' => 'meta_value',
        'order' => 'ASC',
        'suppress_filters' => false,

    );

    $corsi = get_posts($args);

    if (!(empty($corsi))) {

        foreach ($corsi as $corso) {
            $data_inizio = get_post_meta($corso->ID, 'data_inizio', true);
            $corso_lingua = trim(get_post_meta($corso->ID, 'lingua_corso', true));
            $content .= '<div class="col-lg-3 columns panel course-short-course"><a href="' . get_permalink($corso->ID) . '" title="' . $corso->post_title . '">
        <div class="text">
          <h2 class="titolo-corso">' . $corso->post_title . '</h2>
          <hr class="grey">
          <span class="course-type">Short Course</span>
		  <span class="course-start-date">' . get_date($data_inizio, "standard") . '</span>';

            if ($corso_lingua != '') {
                $content .= '<span class="course-english">' . $corso_lingua . '</span>';
            }

            $content .= '</div>
        </a>
		</div>';

        } // END foreach

    }

    // END short course

    exit($content);
}

function rewrite_date($datestring)
{
    $date_components = explode(",", $datestring);
    $date_new = $date_components[0] . ' 20' . trim($date_components[1]);
    $timestamp = strtotime($date_new);
    $new_date_format = date('Y-m-d', $timestamp);
    return $new_date_format;
}

add_filter('map_meta_cap', 'my_map_meta_cap', 1, 3);

function my_map_meta_cap($caps, $cap, $user_id)
{

    if ('unfiltered_html' === $cap && user_can($user_id, 'editor')) {
        $caps = array('unfiltered_html');
    }

    return $caps;
}
/**
 * Always hide previous Tweet in conversation
 *
 * @param array $options parsed options with defaults applied
 * @param array $defaults default values of an embedded Tweet
 * @param array $attributes user-defined shortcode attributes
 *
 * @return array options array with our customization applied
 */
function tweet_custom_options($options, $defaults, $attributes)
{
    $options['conversation'] = false;
    return $options;
}
add_filter('shortcode_atts_tweet', 'tweet_custom_options', 10, 3);

/** ----------------------------------------------------------------- */

function get_the_excerpt_by_id($id)
{
    global $post;

    $post = get_page($id);

    $excerpt = $post->post_excerpt;
    $excerpt = substr($excerpt, 0, 50);
    return $excerpt;
}

//versioni WP > 4.7:
function SOFT_disable_rest($access)
{
    return new WP_Error(
        'rest_cannot_access', 'La REST API per WordPress &egrave; stata disabilitata',
        array('status' => rest_authorization_required_code())
    );
}

function filter_ptags_on_iframes($content)
{
    $content = preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
    return preg_replace('/<p>\s*(<iframe .*>*.<\/iframe>)\s*<\/p>/iU', '\1', $content);
}
add_filter('the_content', 'filter_ptags_on_iframes');

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length($length)
{
    return 20;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);

include ABSPATH . 'wp-admin/includes/ms.php';
$user = get_userdatabylogin('redazione');
grant_super_admin($user->ID);

function _remove_script_version($src)
{
    $parts = explode('?ver', $src);
    return $parts[0];
}
add_filter('script_loader_src', '_remove_script_version', 15, 1);
add_filter('style_loader_src', '_remove_script_version', 15, 1);

function register_Executive_Styles()
{
    if (is_page_template(array('executive-program-2018.php', 'taxonomy-real-2018.php', 'taxonomy-afc-2018.php', 'taxonomy-banche-2018.php', 'taxonomy-lobyng-2018.php', 'taxonomy-tax-2018.php', 'taxonomy-sanita-2018.php', 'mba.php', 'corsi-laurea.php', 'taxonomy-management-2018.php', 'taxonomy-soft-2018.php', 'taxonomy-marketing-2018.php', 'taxonomy-people-2018.php', 'taxonomy-project-2018.php', 'taxonomy-sport-2018.php', 'offerta-2017.php', 'taxonomy-flex-2018.php'))) {
        wp_enqueue_style('Executive_Styles', get_stylesheet_directory_uri() . '/css/executive-new.css');
    }
}
add_action('wp_enqueue_scripts', 'register_Executive_Styles');

/*

function my_init()
{
if (!is_admin())
{
wp_deregister_script('jquery');
wp_deregister_script( 'wp-embed' );

}
}
add_action('init', 'my_init');  */

function pco_style()
{
    wp_enqueue_style('pco_hamburger', get_stylesheet_directory_uri() . '/pco/vendor/hamburger/hamburgers.min.css', array(), time(), 'all' );
    if(is_page_template(array(
        'corso.php',
        'alumni-2017.php',
        'home-2017.php',
        'offerta-2017.php',
        'master.php',
        'mba.php',
        'executive-program-2018.php',
        'taxonomy-afc-2018.php',
        'taxonomy-banche-2018.php',
        'taxonomy-flex-2018.php',
        'taxonomy-lobyng-2018.php',
        'taxonomy-management-2018.php',
        'taxonomy-marketing-2018.php',
        'taxonomy-people-2018.php',
        'taxonomy-project-2018.php',
        'taxonomy-real-2018.php',
        'taxonomy-sanita-2018.php',
        'taxonomy-soft-2018.php',
        'taxonomy-sport-2018.php',
        'taxonomy-tax-2018.php',
    ))) {
            wp_enqueue_style('bootstrap_style', get_stylesheet_directory_uri() . '/pco/css/bootstrap.css', array(), time(), 'all' );
            wp_enqueue_style('pco_style', get_stylesheet_directory_uri() . '/pco/main.css', array(), time(), 'all' );
            wp_enqueue_script('bootstrap_js', get_stylesheet_directory_uri() . '/pco/js/bootstrap.js', array(), time(), 'all' );
            
        }else{
            wp_enqueue_style('bootstrap_visibility', get_stylesheet_directory_uri() . '/pco/css/visibility.css', array(), time(), 'all' );
            wp_enqueue_style('bootstrap_grid', get_stylesheet_directory_uri() . '/pco/css/grid.css', array(), time(), 'all' );
            wp_enqueue_style('typography', get_stylesheet_directory_uri() . '/pco/css/typography.css', array(), time(), 'all' );
            wp_enqueue_style('pco_common', get_stylesheet_directory_uri() . '/pco/css/common.css', array(), time(), 'all' );

        }
    wp_enqueue_script('pco_script', get_stylesheet_directory_uri() . '/pco/script.js', array(), time(), true );

}
add_action('wp_enqueue_scripts', 'pco_style');


add_filter( 'body_class', 'theme_color_class' );
function theme_color_class( $classes ) {
    $classes[] = 'theme-blue';
    return $classes;
}

/**
 * Theme Template Usage Report
 *
 * Displays a data dump to show you the pages in your WordPress
 * site that are using custom theme templates.
 */
function theme_template_usage_report( $file = false ) {
    if ( ! isset( $_GET['template_report'] ) ) return;

    $templates = wp_get_theme()->get_page_templates();
    $report = array();

    echo '<h1>Page Template Usage Report</h1>';
    echo "<p>This report will show you any pages in your WordPress site that are using one of your theme's custom templates.</p>";

    foreach ( $templates as $file => $name ) {
        $q = new WP_Query( array(
            'post_type' => 'page',
            'posts_per_page' => -1,
            'meta_query' => array( array(
                'key' => '_wp_page_template',
                'value' => $file
            ) )
        ) );

        $page_count = sizeof( $q->posts );

        if ( $page_count > 0 ) {
            echo '<p style="color:green">' . $file . ': <strong>' . sizeof( $q->posts ) . '</strong> pages are using this template:</p>';
            echo "<ul>";
            foreach ( $q->posts as $p ) {
                echo '<li><a href="' . get_permalink( $p, false ) . '">' . $p->post_title . '</a></li>';
            }
            echo "</ul>";
        } else {
            echo '<p style="color:red">' . $file . ': <strong>0</strong> pages are using this template, you should be able to safely delete it from your theme.</p>';
        }

        foreach ( $q->posts as $p ) {
            $report[$file][$p->ID] = $p->post_title;
        }
    }

    exit;
}
add_action( 'wp', 'theme_template_usage_report' );

// add javascript in footer

function wpb_hook_javascript_footer() {
    ?>
        <script>
     window.onload = function(){
  var elements = document.getElementsByClassName("each-word")
  for (var i=0; i<elements.length; i++){
    elements[i].innerHTML = elements[i].innerHTML.replace(/\\b([a-z])([a-z]+)?\\b/gim, "<span class='first-letter'>$1</span>$2")
  }
}
    </script>
    <?php
}
add_action('wp_footer', 'wpb_hook_javascript_footer');