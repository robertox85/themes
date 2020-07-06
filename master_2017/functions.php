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
		switch_to_blog(1);
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


