<?php 

function verd_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'bootstrap' );
}
add_action( 'wp_enqueue_scripts', 'verd_scripts_with_jquery' );

function verd_theme_init(){
    add_theme_support( 'post-thumbnails' );    
}
add_action( 'after_setup_theme', 'verd_theme_init' );

function verd_register_sidebars() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1'
	) );

}
add_action( 'widgets_init', 'verd_register_sidebars' );

function register_my_menu() {
  register_nav_menu('navmenu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

?>