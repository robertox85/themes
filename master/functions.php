<?php

//Some simple code for our widget-enabled sidebar
if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
		 'before_title' => '<h4>',
         'after_title' => '</h4><img src="/wp-content/themes/master/images/sb_titolo.gif" />',
'before_widget' => '<div id="bloc_news"><div id="menu">',
        'after_widget' => '</div></div>',
    ));
}
	
//jquery


//Register area for custom menu
add_action( 'init', 'register_my_menus' );

function register_my_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' ),
			'secondary-menu' => __( 'Secondary Menu' ),
			'tertiary-menu' => __( 'Tertiary Menu' )
		)
	);
}

//Code for custom background support
add_theme_support( 'custom-background' );




//Enable post and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

// Enable post thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(520, 250, true);




?>