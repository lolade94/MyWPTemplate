<?php



function port_setup(){
	
	
	
	//enable support of post thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(400,400);
add_image_size('home-pic', 400,300, true);
add_image_size('single_thumb', 700);


function my_function_admin_bar(){
    return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');


//excerpt word length
function new_excerpt_length($length) {
	return 10;
}
add_filter('excerpt_length', 'new_excerpt_length');



//add thumbnail caption

function my_admin_bar_menu() {
	global $wp_admin_bar;
	if ( !is_super_admin() || !is_admin_bar_showing() )
		return;
	$wp_admin_bar->add_menu( array(
	'id' => 'custom_menu',
	'title' => __( 'Delete Cache'),
	'href' => 'http://www.omolola.me/wp-admin/options-general.php?page=wpsupercache&tab=contents' ) );
}
add_action('admin_bar_menu', 'my_admin_bar_menu');




}//end of theme functions setup





add_action('after_setup_theme', 'port_setup');



// Create Slider
require( get_template_directory() . '/inc/slider/slider.php' );

function lola_scripts() {
	


 
        
	wp_enqueue_style( 'lola-style', get_stylesheet_uri() );
	
	$headings_font = esc_html(get_theme_mod('headings_fonts'));
	$body_font = esc_html(get_theme_mod('body_fonts'));
	if( $headings_font ) {
		wp_enqueue_style( 'lola-headings-fonts', '//fonts.googleapis.com/css?family='. $headings_font );	
	} else {
		wp_enqueue_style( 'lola-headings-fonts', '//fonts.googleapis.com/css?family=Oswald:700');
	}	
	if( $body_font ) {
		wp_enqueue_style( 'lola-body-fonts', '//fonts.googleapis.com/css?family='. $body_font );	
	} else {
		wp_enqueue_style( 'lola-body-fonts', '//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700');
	}
	
	wp_enqueue_style( 'lola-font-awesome', get_template_directory_uri() . '/fonts/font-awesome.min.css' );
	
	wp_enqueue_script( 'lola-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'lola-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	
	wp_enqueue_script( 'lola-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), true );
	
	wp_enqueue_script( 'lola-fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', array('jquery'), true );
    
	wp_enqueue_style( 'flex-style', get_template_directory_uri() . '/inc/slider/css/flexslider.css' );
 
        wp_enqueue_script( 'flex-script', get_template_directory_uri() .  '/inc/slider/js/jquery.flexslider-min.js', array( 'jquery' ), false, true );
  
	
	wp_enqueue_style( 'lola-bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), true );
	
	
	
}
add_action( 'wp_enqueue_scripts', 'lola_scripts' );


function lola_html5shiv() {
    echo '<!--[if lt IE 9]>' . "\n";
    echo '<script src="' . esc_url( get_template_directory_uri() . '/js/html5shiv.js' ) . '"></script>' . "\n";
    echo '<![endif]-->' . "\n";
}
add_action( 'wp_head', 'lola_html5shiv' ); 

?>