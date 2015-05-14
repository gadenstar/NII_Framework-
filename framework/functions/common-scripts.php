<?php 

add_action( 'wp_enqueue_scripts', 'nii_register' ); 

function nii_register() {
	
	wp_enqueue_style( 'uikit', get_template_directory_uri().'/uikit/css/uikit.min.css' , array(), '', 'all' );
	wp_register_style( 'nii-style', get_stylesheet_uri() , array(), '', 'all' );
	wp_enqueue_style( 'nii-style' );
	
	wp_register_script( 'tie-ilightbox',	get_template_directory_uri() . '/js/ilightbox.packed.js' , array( 'jquery' ), false, true );  

	wp_enqueue_script( 'uikit',	get_template_directory_uri() . '/uikit/js/uikit.min.js' , array( 'jquery' ), false ); 
	
	## Get Global Scripts
    wp_enqueue_script( 'tie-scripts' );
	wp_enqueue_script( 'tie-ilightbox' );
	
	// ## Register WooCommerce css file
	// wp_register_style( 'tie-woocommerce', get_template_directory_uri().'/css/woocommerce.css' , array(), '', 'all' );
	// if (class_exists('Woocommerce')) 
	// 	wp_enqueue_style( 'tie-woocommerce' );
		
	// ## Register bbPress css file
	// wp_register_style( 'tie-bbpress', get_template_directory_uri().'/css/bbpress.css' , array(), '', 'all' );
	// if ( class_exists( 'bbpress' ) ) 
	// 	wp_enqueue_style( 'tie-bbpress' );
		
	// ## Register buddyPress css file
	// wp_register_style( 'tie-buddypress', get_template_directory_uri().'/css/buddypress.css' , array(), '', 'all' );
	// if ( class_exists( 'buddypress' ) ) 
	// 	wp_enqueue_style( 'tie-buddypress' );
		
	## Get Validation Script
	// if( tie_get_option('comment_validation') && is_singular() && comments_open() )
	// 	wp_enqueue_script( 'tie-validation' );
	
	
	// $lightbox_skin = 'dark';
	// if( tie_get_option( 'lightbox_skin' ) ) $lightbox_skin = tie_get_option( 'lightbox_skin' );
	// wp_enqueue_style('tie-ilightbox-skin',  get_template_directory_uri() . '/css/ilightbox/'.$lightbox_skin.'-skin/skin.css' );
		
	// ## For facebook & Google + share
	// if( is_singular() && tie_get_option('post_og_cards') && ( !function_exists('bp_current_component') || (function_exists('bp_current_component') && !bp_current_component() ) ) ) tie_og_data();

	// ## Sticky Sidebars
	// $sticky_sidebar = false ;
	// if( tie_get_option( 'sticky_sidebar' ) ) {
	// 	$sticky_sidebar = true ;

	// 	if(
	// 	( ( is_home() || is_front_page() ) && tie_get_option( 'sticky_sidebar_disable_homepage' ) ) ||
	// 	(   is_page() && tie_get_option( 'sticky_sidebar_disable_pages' ) ) ||
	// 	(   is_single() && tie_get_option( 'sticky_sidebar_disable_posts' ) ) ||
	// 	(   is_tag() && tie_get_option( 'sticky_sidebar_disable_tag' ) ) ||
	// 	(   is_category() && tie_get_option( 'sticky_sidebar_disable_cat' ) ) ) $sticky_sidebar = false ;
	// }
	
	// ## Inline Vars
	// $tie_js_vars = array(
	// 	"mobile_menu_active"	=> tie_get_option('mobile_menu_active'), 
	// 	"mobile_menu_top"		=> tie_get_option('mobile_menu_top'), 
	// 	"lightbox_all"			=> tie_get_option('lightbox_all'), 
	// 	"lightbox_gallery"		=> tie_get_option('lightbox_gallery'), 
	// 	"lightbox_skin"			=> $lightbox_skin, 
	// 	"lightbox_thumb"		=> tie_get_option('lightbox_thumbs'), 
	// 	"lightbox_arrows"		=> tie_get_option('lightbox_arrows'), 
	// 	"sticky_sidebar"		=> $sticky_sidebar  , 
	// 	"lang_no_results"		=> __ti( 'No Results' ), 
	// 	"lang_results_found"	=> __ti( 'Results Found' ), 
	// );
	// wp_localize_script( 'tie-scripts', 'tie', $tie_js_vars );
	
}