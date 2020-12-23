<?php


use Carbon_Fields\Container;
use Carbon_Fields\Field;
// aggiungo i campi ripetibili su executive-experience, funziona solo con il blog e post id indicati nelle condizioni

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
    $blog_id = get_current_blog_id();
    if($blog_id === 124) {
        Container::make('post_meta', 'cards')
            ->where('post_type', '=', 'page')
            ->where('post_id', '=', '86')
            ->add_fields(
                array(
                Field::make('complex', 'crb_gruppi')->add_fields(
                    array(
                    Field::make('text', 'nome_gruppo'),
                    Field::make('complex', 'elementi_gruppo')
                        ->set_layout('tabbed-horizontal')
                        ->add_fields(
                            array(
                            Field::make('image', 'icona'),
                            Field::make('text', 'titolo'),
                            Field::make('textarea', 'contenuto'),
                            )
                        )
                    )
                ),
                )
            );
    }
    
}

add_action('after_setup_theme', 'crb_load');
function crb_load()
{
    include_once 'vendor/autoload.php';
    \Carbon_Fields\Carbon_Fields::boot();
}

wp_enqueue_script('jquery');
//add_filter('show_admin_bar', '__return_true');
add_filter('show_admin_bar', '__return_false');  
add_theme_support('post-thumbnails');
add_post_type_support('page', 'excerpt');

function register_my_menus()
{
    register_nav_menus(
        array(
        'menu-master' => __('Menu Master'),
        )
    );
}
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
    if ($wp_query->get('tag')) { $wp_query->set('post_type', 'any');
    }
}

add_filter(
    'body_class', function ( $classes ) {
        return array_merge($classes, array( 'body-master' ));
    } 
);


function get_main_site_header()
{
    switch_to_blog(1);
    include ABSPATH.'wp-content/themes/lbs_2015/header-2017.php';
    restore_current_blog();

}

function get_main_site_footer()
{
        $current_blog_id = get_current_blog_id();
        switch_to_blog(1);
        set_query_var('current_blog_id', $current_blog_id);
        include ABSPATH.'wp-content/themes/lbs_2015/footer-2017.php';
        restore_current_blog();
}

function get_top_level_parent()
{
    global $post;
    $parents = get_post_ancestors($post->ID);
    $id = ($parents) ? $parents[count($parents)-1]: $post->ID;
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
    'xmlns:v' => true
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
    'xmlns:v' => true
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
    'xmlns:v' => true
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
    'href' => true
    );

    return $allowed_html;
}
add_filter('bcn_allowed_html', 'my_bcn_allowed_html');


function readmore($lang)
{
    $readmore_msg = array();
    $readmore_msg['it']='Leggi di più';    
    $readmore_msg['en']='Read more';
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
        if(!empty($languages)) {
            foreach($languages as $l){
                $class = $l['active'] ? ' class="active"' : null;
                $langs .=  '<li><a ' . $class . ' href="'.$l['url'].'">' . strtoupper($l['language_code']). '</a></li>';
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
    

    wp_nav_menu(
        array(
        'theme_location'     => 'menu-sidebar-left',
        'menu'               => $menu_name,
        'container_class'     => 'menu-sidebar-left-container',
        'container'         => 'div',
        'menu_class'        => 'menu menu-sidebar-left',
        )
    );
    
}
    
// sidebar right

if (function_exists('register_sidebar') ) {
    register_sidebar(
        array(
         'name'=>'Custom',
        'before_title' => '<h3>',
         'after_title' => '</h3>',
        'before_widget' => ' <div  class="block"> ',
        'after_widget' => '</div>',
        
        )
    );
    
    register_sidebar(
        array(
        'name'=>'Updates',
        'before_title' => '<h3>',
         'after_title' => '</h3>',
        'before_widget' => ' <div  class="block-dark"> ',
        'after_widget' => '</div>',
        
        )
    );
    
    
    register_sidebar(
        array(
        'name'=>'Area-Header',
        'before_widget' => '<div class="mobileShow all">',
        'after_widget' => '<div>',
        
        )
    );
    
}    






    
// tag hooks
add_action('init', 'pages_support_taxonomies');
add_action('pre_get_posts', 'tags_support_query');







function pco_style()
{
    wp_enqueue_style('pco_style', get_stylesheet_directory_uri() . '/pco/main.css', array(), time(), 'all');
    wp_enqueue_style('pco_hamburger', get_stylesheet_directory_uri() . '/pco/vendor/hamburger/hamburgers.min.css', array(), time(), 'all');
    wp_enqueue_style('fa', get_stylesheet_directory_uri() . '/pco/vendor/fontawesome/css/all.min.css', array(), null, 'all');

    if(!is_download_brochure_page()) {
        wp_enqueue_script('pco_bootstrap', get_stylesheet_directory_uri().'/pco/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), time(), true);
    }
    

    wp_enqueue_script('pco_script', get_stylesheet_directory_uri().'/pco/pco-script.js', array('jquery'), time(), true);
}
add_action('wp_enqueue_scripts', 'pco_style');

add_action('customize_register', 'bls_customizer_settings');
function bls_customizer_settings($wp_customize)
{

    $wp_customize->add_section(
        'theme_color_section', array(
        'title' => 'Theme color settings',
        )
    );

    $wp_customize->add_setting(
        "theme_color", array(
        'default' => 'theme-blue',
        'transport' => 'refresh',
        )
    );
    
    $wp_customize->add_control(
        'theme_color', array(
        'label' => __("Theme colors:", 'bls'),
        'section' => 'theme_color_section',
        'type' => 'select',
        'transport' => 'refresh',
        'choices' => array(
            'none'          => '-- Select --',
            'theme-blue' => 'blue',
            'theme-light_blue' => 'light_blue',
            'theme-green' => 'green',
            'theme-red' => 'red',
            'theme-orange' => 'orange',
            'theme-gold' => 'gold',
        ),
        )
    );

}

add_filter('body_class', 'theme_color_class');
function theme_color_class( $classes )
{
    
    $blog_id = get_current_blog_id();
    $color   = get_theme_mod('theme_color');
    

    if(empty($color)) {
        $theme_blue_ids         = array(8,49,58,95);
        $theme_light_blue_ids   = array(5,13,14,15,17,18,19,20,25,27,28,30,32,34,42,43,44,47,50,53,55,57,63,65,67,68,69,70,72,75,76,77,79,84,86,91,93,96,97,98,99,103,104,105,106,107,108,110,111,112,113,114,115,117,118,120,124,126,127,128,129,130,133,134,135,106,109,139,140,142,143,148,149);
        $theme_green_ids        = array(51,52,54,100,144);
        $theme_red_ids          = array(2,3,4,6,7,9,11,12,13,16,21,22,23,24,33,35,36,37,38,39,41,56,59,60,61,66,71,74,78,94,101,121,122,123,141,145,150);
        $theme_orange_ids       = array();
        $theme_gold_ids         = array(26,29,31,83,137);
        
        $theme_colors = array(
            'theme-blue' => $theme_blue_ids,
            'theme-light_blue' => $theme_light_blue_ids,
            'theme-green' => $theme_green_ids,
            'theme-red' => $theme_red_ids,
            'theme-orange' => $theme_orange_ids,
            'theme-gold' => $theme_gold_ids
        );
       
        foreach($theme_colors as $key => $value){
            if(in_array($blog_id, $value)) {
                $classes[] = $key;
            }else{
                $classes[] = 'theme-blue';
            }
        }
    }else{
        $classes[] = $color;
    }

    $classes[] = 'blog_id_'.$blog_id;

    return $classes;
}

function modify_home_in_nav_menu_objects( $items, $args )
{
    $isMaster = false;
    
    $sites_name = [
        '/mabda/',
        '/entrepreneurship/',
        '/master-of-fashion/',
        '/master-of-luxury/',
        '/tourism-management/',
        '/corporare-finance-banking-major-finanza-aziendale/',
        '/macofin/',
        '/corporate-finance-banking-major-banking/',
        '/master-food-wine/',
        '/gruo/',
        '/international-management/',
        '/management-technology-digital-ecosystem/',
        '/global-supply-chain-management/',
        '/disruptive-ma/',
        '/pr-communication-event-management/',
        '/master-digital-export/',
        '/marketing-management-digital-marketing/',
        '/marketing-management-retailing-ecommerce/',
        '/marketing-management/',
        '/trade-management/',
        '/master-of-art/',
        '/gestione-produzione-cinematografica/',
        '/master-of-music/',
        '/master-sport-management/',
        '/writing-school-for-television/',
        '/project-management/',
        '/project-management-cooperazione-internazionale/',
        '/master-circular-economy/',
        '/comunicazione-e-marketing-politico-ed-istituzionale/',
        '/diritto-tributario/',
        '/probiomed/',
        '/management-aziende-sanitarie/',
        '/executive-master-pharmaceutical-healthcare-administration/',
        '/master-sperimentazione-clinica/',
        '/openinnovation-ip/',
        '/relazioni-istituzionali-lobby-comunicazione-impresa/',
        '/consulente-legale-impresa/',
        '/five-stars-hotel-management/',
        '/executive-serie-televisiva-idea-mercato/',
    ];
    foreach($sites_name as $site){
        if( strpos($_SERVER['REQUEST_URI'], $site) !== FALSE){
            $isMaster = true;
        }
    }
    
    if(!$isMaster) {
        foreach ( $items as $k => $object ) {
            $object->title = ucfirst(strtolower($object->title)).'<i class="fas fa-chevron-right"></i>';
        }
    }
    
    return $items;
}
add_filter('wp_nav_menu_objects', 'modify_home_in_nav_menu_objects', 10, 2);


class Walker_Nav_Menu_Dropdown extends Walker_Nav_Menu
{

    // don't output children opening tag (`<ul>`)
    public function start_lvl(&$output, $depth)
    {
    }

    // don't output children closing tag    
    public function end_lvl(&$output, $depth)
    {
    }

    public function start_el(&$output, $item, $depth, $args)
    {
        global $wp;
        $current_url = home_url(add_query_arg(array(), $wp->request));
        // add spacing to the title based on the current depth
        $item->title = str_repeat("&nbsp;", $depth * 4) . $item->title;

        // call the prototype and replace the <li> tag
        // from the generated markup...
        $link = (!empty($item->url)) ? $item->url : '';
      
        parent::start_el($output, $item, $depth, $args);
        $output = str_replace('<li', '<option  data-link="'.$link.'"', $output);
    }

    // replace closing </li> with the closing option tag
    public function end_el(&$output, $item, $depth)
    {
        $output .= "</option>\n";
    }
}

function get_download_brochure_pages()
{
    return array('scarica-la-brochure', 'download-brochure', 'brochure', 'download-brochure-master-macofin', 'scarica-la-brochure', 'downlaod-brochure', 'download-brochre', 'compila-il-form', 'richiedi-informazioni', 'download-brchure', 'download-drochure');
}

function is_download_brochure_page()
{
    $pages = get_download_brochure_pages();
    
    $found = false;
    foreach ($pages as $page) {
        if (is_page($page)) {
            $found = true;
            break;
        }
    }
    return $found;

}


//Lets add Open Graph Meta Info
function insert_fb_in_head()
{
    global $post;
    if (!is_singular()) {
        return;
    } //if it is not a post or a page
    
    // echo '<meta property="fb:app_id" content="Your Facebook App ID" />';
    echo '<meta property="og:title" content="' . get_the_title() . '"/>';
    echo '<meta property="og:type" content="article"/>';
    echo '<meta property="og:url" content="' . get_permalink() . '"/>';
    echo '<meta property="og:site_name" content="Luiss Business School | School of Management"/>';
    $has_thumbnail = get_the_post_thumbnail_url($post->ID);
    if($has_thumbnail == false ) { //the post does not have featured image, use a default image
        $default_image="https://businessschool.luiss.it/wp-content/uploads/2018/11/Immagini1_slideshow_HOME.jpg"; //replace this with a default image on your server or an image in your media library
        echo '<meta property="og:image" content="' . $default_image . '"/>';
    }
    else{
        $thumbnail_src = get_the_post_thumbnail_url($post->ID, 'full');
        echo '<meta property="og:image" content="' . esc_attr($thumbnail_src) . '"/>';
    }

    echo "";
}
add_action('wp_head', 'insert_fb_in_head', 5);
