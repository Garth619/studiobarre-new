<?php 



/* jQuery from Google
-------------------------------------------------------------- */


if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", false, null,true);
   wp_enqueue_script('jquery');
}


/* Enqueued Scripts
-------------------------------------------------------------- */



 function load_my_styles_scripts() {
     // Load my stylesheet
     wp_enqueue_style( 'styles', get_template_directory_uri() . '/style.css', '', 4, 'all' ); 

     // Load my global javascripts from "studiobarrecorporate" theme 
     wp_enqueue_script( 'jquery-addon', '../../wp-content/themes/studiobarrecorporate/js/custom-min.js', array('jquery'), '', true );
 }
 
 add_action( 'wp_enqueue_scripts', 'load_my_styles_scripts', 20 );
 
 
 // Critical Styles in the header
 
 
/*
 function internal_css_print() {
    echo '<style type="text/css">';
    include_once get_template_directory() . '/critical.css';
    echo '</style>';
}
 
 
 
 add_action( 'wp_head', 'internal_css_print' );
*/



/* Force Gravity Forms to init scripts in the footer and ensure that the DOM is loaded before scripts are executed
-------------------------------------------------------------- */


add_filter( 'gform_init_scripts_footer', '__return_true' );
add_filter( 'gform_cdata_open', 'wrap_gform_cdata_open', 1 );
function wrap_gform_cdata_open( $content = '' ) {
if ( ( defined('DOING_AJAX') && DOING_AJAX ) || isset( $_POST['gform_ajax'] ) ) {
return $content;
}
$content = 'document.addEventListener( "DOMContentLoaded", function() { ';
return $content;
}
add_filter( 'gform_cdata_close', 'wrap_gform_cdata_close', 99 );
function wrap_gform_cdata_close( $content = '' ) {
if ( ( defined('DOING_AJAX') && DOING_AJAX ) || isset( $_POST['gform_ajax'] ) ) {
return $content;
}
$content = ' }, false );';
return $content;
}




/* Remove Unnecessary Scripts
-------------------------------------------------------------- */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

/* Register Nav-Menus
-------------------------------------------------------------- */

register_nav_menus(array(
    'local_menu_classes' => 'Local Menu Classes',
    'local_menu_our_studio' => 'Local Menu Our Studio',
 ));

/* Widgets
-------------------------------------------------------------- */

if (function_exists('register_sidebars')) {

    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ));

 }

/* Add Theme Support Page Thumbnails
-------------------------------------------------------------- */

add_theme_support('post-thumbnails');

/* Modify the_excerpt() " read more "
-------------------------------------------------------------- */

function new_excerpt_more($more)
{
    global $post;
    return '... <a href="' . get_permalink($post->ID) . '">' . 'read more' . '</a>';
}

add_filter('excerpt_more', 'new_excerpt_more');

/* Add Page Slug to Body Class
-------------------------------------------------------------- */
function add_slug_body_class($classes)
{
    global $post;
    if (isset($post)) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}

add_filter('body_class', 'add_slug_body_class');



/* ACF: CREATE OPTIONS PAGE
-------------------------------------------------------------- */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Header',
        'menu_title' => 'Header',
        'menu_slug' => 'theme-header-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
    acf_add_options_page(array(
        'page_title' => 'Sidebar',
        'menu_title' => 'Sidebar',
        'menu_slug' => 'theme-sidebar-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
    acf_add_options_page(array(
        'page_title' => 'Footer',
        'menu_title' => 'Footer',
        'menu_slug' => 'theme-footer-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

}

/* ALLOW SVGs IN MEDIA UPLOAD
-------------------------------------------------------------- */
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');



function custom_menu_page_removing() {
    remove_menu_page( $menu_slug );
}
add_action( 'admin_menu', 'custom_menu_page_removing' );


// menu pulled in from main site page


function my_global_menu() {
	
	switch_to_blog(1);
	
	
		wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) );
	
		
	restore_current_blog();

}



// footer links


function my_global_footer_links() {
	
	switch_to_blog(1);
	
		$teachers = get_the_permalink(92);
		$owners = get_the_permalink(89);
		
		print '<li><a href="'.$teachers.'">barre {tender} login</a></li><li><a href="'.$owners.'">owners login</a></li>';
		
	
	restore_current_blog();

}


// Main Site template tag url

function my_main_site_link() {
	
	switch_to_blog(1);
	
		$main_url = get_bloginfo('url');
		
		
		print $main_url;
		
	
	restore_current_blog();

}



// Events


  add_action('init', 'events');    
   	 
	function events() {    
    	$args = array(    
        	'label' => __('Events'),    
        	'singular_label' => __('Event'),    
        	'public' => true,    
        	'show_ui' => true,
        	'has_archive' => false,	 
        	'capability_type' => 'post',    
        	'hierarchical' => false,    
        	'rewrite' => array('with_front' => false,'slug' => 'events'),   
        	'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )    
       	);    
   	 
    	register_post_type( 'events' , $args );    
	}    
	
	
	// Remove Posts
	

add_action('admin_menu', 'post_remove'); 
	
	function post_remove ()    
{ 
   remove_menu_page('edit.php');
}

add_action( 'admin_bar_menu', 'remove_wp_nodes', 999 );

function remove_wp_nodes() 
{
    global $wp_admin_bar;   
    $wp_admin_bar->remove_node( 'new-post' );
    $wp_admin_bar->remove_node( 'new-link' );
    $wp_admin_bar->remove_node( 'new-media' );
}




if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_59d1a9da29e80',
	'title' => 'Inner Banner',
	'fields' => array (
		array (
			'key' => 'field_59d1a9dec2f69',
			'label' => 'Desktop Banner',
			'name' => 'inner_banner',
			'type' => 'image',
			'value' => NULL,
			'instructions' => 'Image must be 885px wide by 448px high and a jpg',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'full',
			'library' => 'all',
			'min_width' => 884,
			'min_height' => 447,
			'min_size' => '',
			'max_width' => 886,
			'max_height' => 449,
			'max_size' => '.4',
			'mime_types' => 'jpg',
		),
		array (
			'key' => 'field_59d1b94346a98',
			'label' => 'Mobile Banner',
			'name' => 'mobile_banner',
			'type' => 'image',
			'value' => NULL,
			'instructions' => 'Image needs to be 651px wide by 594px high and a jpg',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => 650,
			'min_height' => 593,
			'min_size' => '',
			'max_width' => 652,
			'max_height' => 595,
			'max_size' => '.4',
			'mime_types' => 'jpg',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'page-home.php',
			),
		),
	),
	'menu_order' => -1,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'excerpt',
		1 => 'featured_image',
		2 => 'categories',
		3 => 'tags',
	),
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_59d19e7912588',
	'title' => 'About',
	'fields' => array (
		array (
			'key' => 'field_59d19e7de86b7',
			'label' => 'About Slideshow',
			'name' => 'about_slideshow',
			'type' => 'repeater',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'add slide',
			'sub_fields' => array (
				array (
					'key' => 'field_59d19e90e86b8',
					'label' => 'Slide',
					'name' => 'slide',
					'type' => 'image',
					'value' => NULL,
					'instructions' => 'Image must be 1024px wide by 682px high and a jpg',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'medium',
					'library' => 'all',
					'min_width' => 1023,
					'min_height' => 681,
					'min_size' => '',
					'max_width' => 1025,
					'max_height' => 683,
					'max_size' => '.4',
					'mime_types' => 'jpg',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'page-about.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'excerpt',
		1 => 'featured_image',
		2 => 'categories',
		3 => 'tags',
	),
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_59d12a532e58c',
	'title' => 'Bio Grid',
	'fields' => array (
		array (
			'key' => 'field_59d12a5c5aabc',
			'label' => 'Bio Grid',
			'name' => 'bio_grid',
			'type' => 'repeater',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'Add Bio',
			'sub_fields' => array (
				array (
					'key' => 'field_59d12a765aabd',
					'label' => 'Bio Image',
					'name' => 'bio_image',
					'type' => 'image',
					'value' => NULL,
					'instructions' => 'Image needs to be 249px wide by 302px high and a jpg',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'id',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '.6',
					'mime_types' => 'jpg',
				),
				array (
					'key' => 'field_59d12f1744a56',
					'label' => 'Black and White Image',
					'name' => 'black_and_white_image',
					'type' => 'image',
					'value' => NULL,
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'id',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array (
					'key' => 'field_59d12d3586f45',
					'label' => 'Name',
					'name' => 'name',
					'type' => 'text',
					'value' => NULL,
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_59d12d3b86f46',
					'label' => 'Position',
					'name' => 'position',
					'type' => 'text',
					'value' => NULL,
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_59d12d8c86f49',
					'label' => 'Bio Content',
					'name' => 'bio_content',
					'type' => 'wysiwyg',
					'value' => NULL,
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
					'delay' => 0,
				),
				array (
					'key' => 'field_59d12d9986f4a',
					'label' => 'Connect',
					'name' => 'connect',
					'type' => 'wysiwyg',
					'value' => NULL,
					'instructions' => 'Social Media Content and Links',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
					'delay' => 0,
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'page-barretenders.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'excerpt',
		2 => 'featured_image',
		3 => 'categories',
		4 => 'tags',
	),
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_59c89b262c30d',
	'title' => 'Events',
	'fields' => array (
		array (
			'key' => 'field_59c89b29d3a91',
			'label' => 'Events',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'To create events, click "Events" on the left hand side of the dashboard',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'page-events.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'excerpt',
		2 => 'featured_image',
		3 => 'categories',
		4 => 'tags',
	),
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_59d17bf31d657',
	'title' => 'Footer',
	'fields' => array (
		array (
			'key' => 'field_59d17bf7a48ef',
			'label' => 'Footer',
			'name' => 'footer',
			'type' => 'textarea',
			'value' => NULL,
			'instructions' => 'Place scripts here that need to be placed before the closing body tag',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'theme-footer-settings',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_59d17a8481dfd',
	'title' => 'Header',
	'fields' => array (
		array (
			'key' => 'field_59d17a88d3d28',
			'label' => 'Header Scripts',
			'name' => 'header_scripts',
			'type' => 'textarea',
			'value' => NULL,
			'instructions' => 'Place scripts here that need to be placed before the closing head tag',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 20,
			'new_lines' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'theme-header-settings',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_59d1855729ba8',
	'title' => 'Home Page Title',
	'fields' => array (
		array (
			'key' => 'field_59d18598257b1',
			'label' => 'Home Page Title',
			'name' => 'home_page_title',
			'type' => 'text',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'page-home.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'excerpt',
		1 => 'featured_image',
		2 => 'categories',
		3 => 'tags',
	),
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_59d18b9446a7a',
	'title' => 'Pricing',
	'fields' => array (
		array (
			'key' => 'field_59d18b98b9606',
			'label' => 'Most Popular Item One',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_59d18ba8b9607',
			'label' => 'Most Popular Title',
			'name' => 'most_popular_title',
			'type' => 'text',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59d18bc3b9608',
			'label' => 'Most Popular Description',
			'name' => 'most_popular_description',
			'type' => 'text',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59d18bd4b9609',
			'label' => 'Most Popular Price',
			'name' => 'most_popular_price',
			'type' => 'text',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59d18be5b960a',
			'label' => 'Most Popular Description',
			'name' => 'most_popular_single_line_description',
			'type' => 'textarea',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Leave blank If not in use',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => 'br',
		),
		array (
			'key' => 'field_59d18c00b960b',
			'label' => 'Most Popular Asterisk',
			'name' => 'most_popular_asterisk',
			'type' => 'textarea',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => 'br',
		),
		array (
			'key' => 'field_5a657b59e70a9',
			'label' => 'Most Popular Item Two',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_5a657b7ae70aa',
			'label' => 'Most Popular Yellow Button',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_59d18d284cb8d',
			'label' => 'Most Popular Link',
			'name' => 'most_popular_link',
			'type' => 'text',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59d18d5bdc8f3',
			'label' => 'New to the Studio',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_59d18d6cdc8f4',
			'label' => 'New to the Studio Title',
			'name' => 'new_to_the_studio_title',
			'type' => 'text',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59d18d82dc8f5',
			'label' => 'New to the Studio Description',
			'name' => 'new_to_the_studio_description',
			'type' => 'text',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59d18d98dc8f6',
			'label' => 'New to the Studio Price',
			'name' => 'new_to_the_studio_price',
			'type' => 'text',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59d18daedc8f7',
			'label' => 'New to the Studio Description',
			'name' => 'new_to_the_studio_single_line_description',
			'type' => 'textarea',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Leave blank If not in use',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => 'br',
		),
		array (
			'key' => 'field_59d18dc1dc8f8',
			'label' => 'New to the Studio Asterisk',
			'name' => 'new_to_the_studio_asterisk',
			'type' => 'textarea',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => 'br',
		),
		array (
			'key' => 'field_59d18dd2dc8f9',
			'label' => 'New to the Studio Link',
			'name' => 'new_to_the_studio_link',
			'type' => 'text',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59d18ece8bbda',
			'label' => 'Regular Pricing',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_59d18ee98bbdb',
			'label' => 'Regular Pricing',
			'name' => 'regular_pricing',
			'type' => 'repeater',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'Add Regular Price',
			'sub_fields' => array (
				array (
					'key' => 'field_59d18ef58bbdc',
					'label' => 'Regular Title',
					'name' => 'regular_title',
					'type' => 'text',
					'value' => NULL,
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_59d194d92a1b5',
					'label' => 'Regular Description and Price',
					'name' => 'regular_description_and_price',
					'type' => 'repeater',
					'value' => NULL,
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'collapsed' => '',
					'min' => 0,
					'max' => 0,
					'layout' => 'table',
					'button_label' => 'Add New Line',
					'sub_fields' => array (
						array (
							'key' => 'field_59d194f52a1b6',
							'label' => 'Regular Line Description',
							'name' => 'regular_line_description',
							'type' => 'text',
							'value' => NULL,
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array (
							'key' => 'field_59d195102a1b7',
							'label' => 'Regular Line Price',
							'name' => 'regular_line_price',
							'type' => 'text',
							'value' => NULL,
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
					),
				),
				array (
					'key' => 'field_59d194a10f584',
					'label' => 'Regular Description',
					'name' => 'regular_single_line_description',
					'type' => 'textarea',
					'value' => NULL,
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 'Leave blank If not in use',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => 'br',
				),
				array (
					'key' => 'field_59d18f3b8bbe0',
					'label' => 'Regular Asterisk',
					'name' => 'regular_asterisk',
					'type' => 'textarea',
					'value' => NULL,
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 'Leave blank If not in use',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => 'br',
				),
			),
		),
		array (
			'key' => 'field_59d1997adf015',
			'label' => 'Buttons',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 1,
		),
		array (
			'key' => 'field_59d19992d0d8f',
			'label' => 'Shop all packages',
			'name' => 'shop_all_packages',
			'type' => 'text',
			'value' => NULL,
			'instructions' => 'Copy and Paste External URL',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59d19a1275c83',
			'label' => 'Shop Gift Cards',
			'name' => 'shop_gift_cards',
			'type' => 'text',
			'value' => NULL,
			'instructions' => 'Copy and Paste External URL',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'page-pricing.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'excerpt',
		2 => 'featured_image',
		3 => 'categories',
		4 => 'tags',
	),
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_59d19c27982ac',
	'title' => 'Promos',
	'fields' => array (
		array (
			'key' => 'field_59d19cd9a9e32',
			'label' => 'Promo',
			'name' => 'promo',
			'type' => 'repeater',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_59d19ce2a9e33',
					'label' => 'Promo Title',
					'name' => 'promo_title',
					'type' => 'text',
					'value' => NULL,
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_59d19ce7a9e34',
					'label' => 'Promo Image',
					'name' => 'promo_image',
					'type' => 'image',
					'value' => NULL,
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'medium',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '.75',
					'mime_types' => '',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'page-promos.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'excerpt',
		2 => 'featured_image',
		3 => 'categories',
		4 => 'tags',
	),
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_59d18752a6f08',
	'title' => 'Schedule',
	'fields' => array (
		array (
			'key' => 'field_59d1875628463',
			'label' => 'MB Code - Login',
			'name' => 'mb_code',
			'type' => 'textarea',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
		array (
			'key' => 'field_59d1877628464',
			'label' => 'MB Code - Schedule',
			'name' => 'mb_code_-_schedule',
			'type' => 'textarea',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'page-schedule.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'excerpt',
		2 => 'featured_image',
		3 => 'categories',
		4 => 'tags',
	),
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_59d17ed9595e2',
	'title' => 'Sidebar',
	'fields' => array (
		array (
			'key' => 'field_59d17edd4e5d0',
			'label' => 'Sidebar Location Title',
			'name' => 'sidebar_location_title',
			'type' => 'text',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59d17f7be2d1a',
			'label' => 'Mobile Menu Location Dropdown Title',
			'name' => 'mobile_menu_location_dropdown_title',
			'type' => 'text',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59d17eff4e5d1',
			'label' => 'Twitter',
			'name' => 'twitter',
			'type' => 'text',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59d17f0b4e5d2',
			'label' => 'Pinterest',
			'name' => 'pinterest',
			'type' => 'text',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59d17f104e5d3',
			'label' => 'Instagram',
			'name' => 'instagram',
			'type' => 'text',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59d17f194e5d4',
			'label' => 'Facebook',
			'name' => 'facebook',
			'type' => 'text',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59d17f214e5d5',
			'label' => 'Google +',
			'name' => 'google_+',
			'type' => 'text',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59d17f2a4e5d6',
			'label' => 'Email',
			'name' => 'email',
			'type' => 'text',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59d180d91ccae',
			'label' => 'Store Hours',
			'name' => 'store_hours',
			'type' => 'repeater',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_59d181151ccaf',
					'label' => 'Days',
					'name' => 'days',
					'type' => 'text',
					'value' => NULL,
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_59d181221ccb0',
					'label' => 'Hours',
					'name' => 'hours',
					'type' => 'textarea',
					'value' => NULL,
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => 'br',
				),
			),
		),
		array (
			'key' => 'field_59d183d3393e3',
			'label' => 'Street Address',
			'name' => 'street_address',
			'type' => 'text',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59d183df393e4',
			'label' => 'City',
			'name' => 'city',
			'type' => 'text',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59d183e9393e5',
			'label' => 'State Abr',
			'name' => 'state_abr',
			'type' => 'text',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59d183f6393e6',
			'label' => 'Zip Code',
			'name' => 'zip_code',
			'type' => 'text',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59d43f08da5ff',
			'label' => 'Google Maps Link',
			'name' => 'google_maps_link',
			'type' => 'text',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59d183fc393e7',
			'label' => 'Phone',
			'name' => 'phone',
			'type' => 'text',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'theme-sidebar-settings',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;