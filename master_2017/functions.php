<?php
wp_enqueue_script('jquery');
//add_filter('show_admin_bar', '__return_true');
add_filter('show_admin_bar', '__return_false');  
add_theme_support( 'post-thumbnails' );
add_post_type_support('page', 'excerpt' );

function register_my_menus() {
  register_nav_menus(
    array(
      'menu-master' => __('Menu Master' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );

// add tag support to pages
function pages_support_taxonomies() {
	register_taxonomy_for_object_type('post_tag', 'page');
	register_taxonomy_for_object_type('category', 'page');
}

// ensure all tags are included in queries
function tags_support_query($wp_query) {
	if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
}

add_filter( 'body_class', function( $classes ) {
    return array_merge( $classes, array( 'body-master' ) );
} );


function get_main_site_header() {
		switch_to_blog(1);
	include(ABSPATH.'wp-content/themes/lbs_2015/header-2017.php');
restore_current_blog();

}

function get_main_site_footer() {
        $current_blog_id = get_current_blog_id();
        switch_to_blog(1);
        set_query_var( 'current_blog_id', $current_blog_id );
        include(ABSPATH.'wp-content/themes/lbs_2015/footer-2017.php');
        restore_current_blog();
}

function get_top_level_parent() {
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


function readmore($lang) {
$readmore_msg = array();
$readmore_msg['it']='Leggi di più';	
$readmore_msg['en']='Read more';
return $readmore_msg[$lang];
}


function add_image_class($class){
	$class .= ' img-responsive';
	return $class;
}
add_filter('get_image_tag_class','add_image_class');


function sanitize_GET_param($param) {
	

$param_sanitized = (get_magic_quotes_gpc()) ? $param : addslashes($param);

return $param_sanitized;


}


define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true);
function language_selector_flags(){
    if (function_exists('icl_get_languages')) {
        $languages = icl_get_languages('skip_missing=0&orderby=code&order=asc');          
        echo '<div class="lang_selector">';
		 echo '<ul>';
            if(!empty($languages)){
                foreach($languages as $l){
                    $class = $l['active'] ? ' class="active"' : NULL;
                    $langs .=  '<li><a ' . $class . ' href="'.$l['url'].'">' . strtoupper ($l['language_code']). '</a></li>';
                }
                //$langs = substr($langs,0,-3);
                echo $langs;
            }
		
			 echo '</ul>';
        echo '</div>';
    } }







function get_sidebar_menu($menu_name) {
	

wp_nav_menu(array(
'theme_location' 	=> 'menu-sidebar-left',
'menu'           	=> $menu_name,
'container_class' 	=> 'menu-sidebar-left-container',
'container'         => 'div',
'menu_class'        => 'menu menu-sidebar-left',
));
	
}
	
// sidebar right

if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
         'name'=>'Custom',
		 'before_title' => '<h3>',
         'after_title' => '</h3>',
		'before_widget' => ' <div  class="block"> ',
        'after_widget' => '</div>',
		
    ));
	
	 register_sidebar(array(
        'name'=>'Updates',
		 'before_title' => '<h3>',
         'after_title' => '</h3>',
		'before_widget' => ' <div  class="block-dark"> ',
        'after_widget' => '</div>',
		
    ));
	
	
	 register_sidebar(array(
        'name'=>'Area-Header',
		'before_widget' => '<div class="mobileShow all">',
        'after_widget' => '<div>',
		
    ));
	
}	






	
// tag hooks
add_action('init', 'pages_support_taxonomies');
add_action('pre_get_posts', 'tags_support_query');







function pco_style()
{
    wp_enqueue_style('pco_style', get_stylesheet_directory_uri() . '/pco/main.css', array(), time(), 'all' );
    wp_enqueue_style('pco_hamburger', get_stylesheet_directory_uri() . '/pco/vendor/hamburger/hamburgers.min.css', array(), time(), 'all' );
    wp_enqueue_style('fa', get_stylesheet_directory_uri() . '/pco/vendor/fontawesome/css/all.min.css', array(), null, 'all' );

    wp_enqueue_script( 'pco_bootstrap', get_stylesheet_directory_uri().'/pco/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), time(), true );
    wp_enqueue_script( 'pco_script', get_stylesheet_directory_uri().'/pco/pco-script.js', array('jquery'), time(), true );
}
add_action('wp_enqueue_scripts', 'pco_style');

add_action('customize_register', 'bls_customizer_settings');
function bls_customizer_settings($wp_customize)
{

	$wp_customize->add_section('theme_color_section', array(
        'title' => 'Theme color settings',
    ));

    $wp_customize->add_setting("theme_color", array(
        'default' => 'theme-blue',
        'transport' => 'refresh',
	));
	
    $wp_customize->add_control('theme_color', array(
        'label' => __("Theme colors:", 'bls'),
        'section' => 'theme_color_section',
        'type' => 'select',
		'transport' => 'refresh',
        'choices' => array(
            'none' 		 => '-- Select --',
            'theme-blue' => 'blue',
            'theme-light_blue' => 'light_blue',
            'theme-green' => 'green',
            'theme-red' => 'red',
            'theme-orange' => 'orange',
            'theme-gold' => 'gold',
        ),
    ));

}

add_filter( 'body_class', 'theme_color_class' );
function theme_color_class( $classes ) {
    
    $blog_id = get_current_blog_id();
    $color   = get_theme_mod( 'theme_color' );
    
    $theme_blue_ids         = array(8,49,58,95);
    $theme_light_blue_ids   = array(5,13,15,17,18,19,20,25,27,30,32,34,42,43,44,47,50,53,55,57,63,65,67,68,69,70,72,75,76,77,79,84,91,93,96,97,98,99,103,104,105,106,107,108,110,111,112,113,114,115,117,118,120,124,126,127,129,130,133,134,135,106,109,139,140,142,143,148);
    $theme_green_ids        = array(51,52,54,100,144);
    $theme_red_ids          = array(2,3,4,6,7,9,11,12,13,16,18,19,20,21,22,23,24,33,35,36,37,38,39,41,56,57,59,60,61,66,71,72,74,78,94,101,121,122,123,129);
    $theme_orange_ids       = array();
    $theme_gold_ids         = array(26);
    
    $theme_colors = array(
        'theme-blue' => $theme_blue_ids,
        'theme-light_blue' => $theme_light_blue_ids,
        'theme-green' => $theme_green_ids,
        'theme-red' => $theme_red_ids,
        'theme-orange' => $theme_orange_ids,
        'theme-gold' => $theme_gold_ids
    );
   
    foreach($theme_colors as $key => $value){
        if(in_array($blog_id,$value)){
            $classes[] = $key;
        }
    }

    return $classes;
}

function modify_home_in_nav_menu_objects( $items, $args ) {
    foreach ( $items as $k => $object ) {
        $object->title = ucfirst(strtolower($object->title)).'<i class="fas fa-chevron-right"></i>';
    }
    return $items;
}
add_filter( 'wp_nav_menu_objects', 'modify_home_in_nav_menu_objects', 10, 2 );


class Walker_Nav_Menu_Dropdown extends Walker_Nav_Menu{

    // don't output children opening tag (`<ul>`)
    public function start_lvl(&$output, $depth){}

    // don't output children closing tag    
    public function end_lvl(&$output, $depth){}

    public function start_el(&$output, $item, $depth, $args){
      global $wp;
      $current_url = home_url(add_query_arg(array(),$wp->request));
      // add spacing to the title based on the current depth
      $item->title = str_repeat("&nbsp;", $depth * 4) . $item->title;

      // call the prototype and replace the <li> tag
      // from the generated markup...
      $link = (!empty($item->url)) ? $item->url : '';
      
      parent::start_el($output, $item, $depth, $args);
      $output = str_replace('<li', '<option  data-link="'.$link.'"', $output);
    }

    // replace closing </li> with the closing option tag
    public function end_el(&$output, $item, $depth){
      $output .= "</option>\n";
    }
}