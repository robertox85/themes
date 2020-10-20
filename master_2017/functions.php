<?php


use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {

    Container::make( 'post_meta', 'cards' )
    ->where( 'post_type', '=', 'page' )
    ->add_fields( array(
        Field::make( 'complex', 'crb_gruppi' )->add_fields( array(
            Field::make( 'text', 'nome_gruppo' ),
            Field::make( 'complex', 'elementi_gruppo' )
                ->set_layout( 'tabbed-horizontal' )
                ->add_fields( array(
                    Field::make( 'image', 'icona' ),
                    Field::make( 'text', 'titolo' ),
                    Field::make( 'textarea', 'contenuto' ),
                ))
        )),
    ));

   
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'vendor/autoload.php' );
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

    if(!is_download_brochure_page()){
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
        $theme_light_blue_ids   = array(5,13,14,15,17,18,19,20,25,27,30,32,34,42,43,44,47,50,53,55,57,63,65,67,68,69,70,72,75,76,77,79,84,86,91,93,96,97,98,99,103,104,105,106,107,108,110,111,112,113,114,115,117,118,120,124,126,127,128,129,130,133,134,135,106,109,139,140,142,143,148);
        $theme_green_ids        = array(51,52,54,100,144);
        $theme_red_ids          = array(2,3,4,6,7,9,11,12,13,16,21,22,23,24,33,35,36,37,38,39,41,56,57,59,60,61,66,71,74,78,94,101,121,122,123,141,145,150);
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
            }
        }
    }else{
        $classes[] = $color;
    }

    return $classes;
}

function modify_home_in_nav_menu_objects( $items, $args )
{
    foreach ( $items as $k => $object ) {
        $object->title = ucfirst(strtolower($object->title)).'<i class="fas fa-chevron-right"></i>';
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



/**
 * Repeatable Custom Fields in a Metabox
 * Author: Helen Hou-Sandi
 *
 * From a bespoke system, so currently not modular - will fix soon
 * Note that this particular metadata is saved as one multidimensional array (serialized)
 */
 
function hhs_get_sample_options() {
	$options = array (
		'Option 1' => 'option1',
		'Option 2' => 'option2',
		'Option 3' => 'option3',
		'Option 4' => 'option4',
	);
	
	return $options;
}

add_action('admin_head', 'hhs_add_meta_boxes', 1);
function hhs_add_meta_boxes() {
    global $post;
    $blog_id = get_current_blog_id();
    $post_id = get_the_ID();
    
    if($blog_id === 124 && $post_id === 2){
        // add_meta_box( 'repeatable-fields', 'Collapse', 'hhs_repeatable_meta_box_display', 'page', 'normal', 'default');
        // add_action('admin_print_scripts', 'my_admin_scripts');
        // add_action('admin_print_styles', 'my_admin_styles');  
    }	
      
}

function hhs_repeatable_meta_box_display() {
	global $post;

	$repeatable_fields = get_post_meta($post->ID, 'repeatable_fields', true);
	

	wp_nonce_field( 'hhs_repeatable_meta_box_nonce', 'hhs_repeatable_meta_box_nonce' );
	?>
<script type="text/javascript">
function myFunction() {
    var tables = $('#repeatable-fieldset-one tbody:not(.empty-row)');
    var filtered = tables.filter(function(el) {
        return el != null;
    });

    return filtered.length;

}

function upload_button(element) {
    var button = jQuery(element);
    var formfield = button.prev('#upload_image');
    tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
    window.send_to_editor = function(html) {
        imgurl = $(html).attr('src');
        $(formfield).val(imgurl);
        tb_remove();
    }
    return false;
}
jQuery(document).ready(function($) {

    $('.add-group').on('click', function() {
        var row = $('.empty-row.screen-reader-text').clone(true);
        row.removeClass('empty-row screen-reader-text');

        var childs = row[0].children;
        var tIndex = myFunction();
        for (i = 0; i < childs.length; i++) {


            childs[i].id.replace(/0/gi, tIndex);

            var res = childs[i].innerHTML.replace(/0/gi, tIndex);
            childs[i].innerHTML = res;

            console.log(childs[i]);
        }



        row.insertBefore('#repeatable-fieldset-one tbody:last');



        return false;
    });

    $('.add-row').on('click', function() {
        var row = $('.empty-row.screen-reader-text').clone(true);
        row.removeClass('empty-row screen-reader-text');
        row.insertBefore('#repeatable-fieldset-one tbody:last');

        row[0].children[0].remove();
        return false;
    });

    $('.remove-row').on('click', function() {

        var index = $(this).data('index');

        $(this).parent().parent().parent().find('#tr_nome_gruppo_' + index).remove();
        $(this).parent().parent().parent().find('#tr_titolo_' + index).remove();
        $(this).parent().parent().parent().find('#tr_contenuto_' + index).remove();
        $(this).parent().parent().parent().find('#tr_icona_' + index).remove();
        $(this).parent().parent().parent().find('#tr_azioni_' + index).remove();


        return false;
    });

});
</script>


<style>
#repeatable-fieldset-one th {
    text-align: right;
}

tr.nome_gruppo:before {
    /* content: '';
            display: block;
            width: 100%;
            position: absolute;
            height: 2px;
            background-color: red; */
}
</style>
<table id="repeatable-fieldset-one" width="100%">


    <?php
	$i = 0;
	if ( $repeatable_fields ) :
	
	foreach ( $repeatable_fields as $field ) {
    ?>


    <tbody>

        <tr id="tr_nome_gruppo_<?php echo $i ?>" class="visible nome_gruppo" style="border-top:3px solid red">
            <th style="color:red">Nome gruppo</th>
            <td style="padding-top: 20px;">
                <input type="text" class="widefat nome_gruppo" name="repetable[<?php echo $i ?>][nome_gruppo]"
                    value="<?php if($field['nome_gruppo'] != '') echo esc_attr( $field['nome_gruppo'] ); ?>" />
            </td>
        </tr>

        <tr id="tr_titolo_<?php echo $i ?>" class="visible">
            <th>Titolo</th>
            <td>
                <input type="text" class="widefat" name="repetable[<?php echo $i ?>][name]"
                    value="<?php if($field['name'] != '') echo esc_attr( $field['name'] ); ?>" />
            </td>

        </tr>

        <tr id="tr_contenuto_<?php echo $i ?>" class="visible">
            <th>Contenuto</th>
            <td>

                <textarea class="widefat" name="repetable[<?php echo $i ?>][contenuto]" id="contenuto" cols="30"
                    rows="10"><?php if($field['contenuto'] != '') echo esc_attr( $field['contenuto'] ); ?></textarea>

            </td>
        </tr>

        <tr id="tr_icona_<?php echo $i ?>" class="visible">
            <th>Icona</th>
            <td>
                <!-- <input type="text" class="widefat" name="url[]" value="<?php //if ($field['url'] != '') echo esc_attr( $field['url'] ); else echo 'http://'; ?>" /> -->
                <input id="upload_image" type="text" size="36" name="upload_image[]"
                    value="<?php if ($field['upload_image'] != '') echo esc_attr( $field['upload_image'] ); else echo 'http://'; ?>" />
                <input id="upload_image_button" type="button" name="repetable[<?php echo $i ?>][upload_image_button]"
                    onclick="upload_button(this)" value="Upload Image" />

            </td>
        </tr>

        <tr id="tr_azioni_<?php echo $i ?>" class="visible">
            <th style="padding-bottom:20px">Azioni</th>
            <td style="padding-bottom:20px">
                <a class="button remove-row" data-index="<?php echo $i ?>" href="#">Rimuovi</a>
                <a class="button add-row" data-index="<?php echo $i ?>" href="#">Aggiungi</a>
            </td>
        </tr>
    </tbody>

    <?php
    $i++;
	}
	else :
	// show a blank one
    ?>

    <tbody>

        <tr id="tr_nome_gruppo_<?php echo $i ?>" class="blank nome_gruppo" style="border-top:3px solid red">
            <th style="color:red">Nome gruppo</th>
            <td style="padding-top: 20px;">
                <input type="text" class="widefat" name="repetable[<?php echo $i ?>][nome_gruppo]" />
            </td>
        </tr>

        <tr id="tr_titolo_<?php echo $i ?>" class="blank">
            <th>Titolo</th>
            <td><input type="text" class="widefat" name="repetable[<?php echo $i ?>][name]" /></td>
        </tr>

        <tr id="tr_contenuto_<?php echo $i ?>" class="blank">
            <th>Contenuto</th>
            <td><textarea class="widefat" name="repetable[<?php echo $i ?>][contenuto]" id="contenuto" cols="30"
                    rows="10"></textarea></td>
        </tr>

        <tr id="tr_icona_<?php echo $i ?>">
            <th>Icona</th>
            <td>
                <input id="upload_image" type="text" size="36" name="repetable[<?php echo $i ?>][upload_image]"
                    value="http://" />
                <input id="upload_image_button" type="button" name="repetable[<?php echo $i ?>][upload_image_button]"
                    onclick="upload_button(this)" value="Upload Image" />
            </td>
        </tr>

        <tr id="tr_azioni_<?php echo $i ?>" class="blank">
            <th style="padding-bottom:20px">Azioni</th>
            <td style="padding-bottom:20px">
                <a class="button remove-row" data-index="<?php echo $i ?>" href="#">Rimuovi</a>
                <a class="button add-row" data-index="<?php echo $i ?>" href="#">Aggiungi</a>
            </td>
        </tr>

    </tbody>

    <?php endif; ?>


    <!-- empty hidden one for jQuery -->


    <tbody class="empty-row screen-reader-text">

        <tr class="nome_gruppo" id="tr_nome_gruppo_<?php echo $i ?>">
            <th style="color:red">Nome gruppo</th>
            <td style="padding-top: 20px;">
                <input type="text" class="widefat" name="repetable[<?php echo $i; ?>][nome_gruppo]" />
            </td>
        </tr>

        <tr id="tr_titolo_<?php echo $i ?>">
            <th>Titolo</th>
            <td><input type="text" class="widefat" name="repetable[<?php echo $i; ?>][name]" /></td>
        </tr>

        <tr id="tr_contenuto_<?php echo $i ?>">
            <th>Contenuto</th>
            <td><textarea class="widefat" name="repetable[<?php echo $i; ?>][contenuto]" id="contenuto" cols="30"
                    rows="10"></textarea></td>
        </tr>

        <tr id="tr_icona_<?php echo $i ?>">
            <th>Icona</th>
            <td>
                <input id="upload_image" type="text" size="36" name="repetable[<?php echo $i; ?>][upload_image]"
                    value="http://" />
                <input id="upload_image_button" type="button" name="repetable[<?php echo $i; ?>][upload_image_button]"
                    onclick="upload_button(this)" value="Upload Image" />
            </td>
        </tr>

        <tr id="tr_azioni_<?php echo $i ?>">
            <th style="padding-bottom:20px">Azioni</th>
            <td style="padding-bottom:20px">
                <a class="button remove-row" data-index="<?php echo $i ?>" href="#">Rimuovi</a>
                <a class="button add-row" data-index="<?php echo $i ?>" href="#">Aggiungi</a>
            </td>
        </tr>

    </tbody>

</table>

<p><a id="add-group" class="add-group button" href="#">Aggiungi gruppo</a></p>
<?php
}

add_action('save_post', 'hhs_repeatable_meta_box_save');
function hhs_repeatable_meta_box_save($post_id) {
	if ( ! isset( $_POST['hhs_repeatable_meta_box_nonce'] ) ||
	! wp_verify_nonce( $_POST['hhs_repeatable_meta_box_nonce'], 'hhs_repeatable_meta_box_nonce' ) )
		return;
	
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return;
	
	if (!current_user_can('edit_post', $post_id))
		return;
	
	$old = get_post_meta($post_id, 'repeatable_fields', true);
	$new = array();
	
	
    $names = $_POST['repetable'];
    $nome_gruppo = $_POST['nome_gruppo'];
	$contenuti = $_POST['contenuto'];
	$images = $_POST['upload_image'];
	
	$count = count( $names );
  

	for ( $i = 0; $i < $count; $i++ ) {
		if ( $names[$i] != '' ) :
			$new[$i]['name'] = stripslashes( strip_tags( $names[$i] ) );
            
            
			if ( $nome_gruppo[$i] != '' )
                $new[$i]['nome_gruppo'] = $nome_gruppo[$i];
            else
                $new[$i]['contenuto'] = '';
            
			if ( $contenuti[$i] != '' )
				$new[$i]['contenuto'] = $contenuti[$i];
			else
				$new[$i]['contenuto'] = '';
		
			if ( $images[$i] == 'https://' )
				$new[$i]['upload_image'] = '';
			else
				$new[$i]['upload_image'] = stripslashes( $images[$i] ); // and however you want to sanitize
		endif;
	}

	if ( !empty( $new ) && $new != $old )
		update_post_meta( $post_id, 'repeatable_fields', $new );
	elseif ( empty($new) && $old )
		delete_post_meta( $post_id, 'repeatable_fields', $old );
}


function my_admin_scripts() {    
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');

    
}

function my_admin_styles() {

    wp_enqueue_style('thickbox');
}