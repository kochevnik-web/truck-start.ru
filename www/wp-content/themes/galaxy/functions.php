<?php

	/**
	 * Подключение файлов CSS и JS шаблона
	 */

	add_action( 'wp_enqueue_scripts', 'galaxy_enqueue' );
	function galaxy_enqueue() {

		if ( MINIFY ) {
			wp_enqueue_style( 'block', get_template_directory_uri() . '/css/block.css' );
			wp_enqueue_style( 'galaxy', get_template_directory_uri() . '/css/style.min.css' );

			wp_enqueue_script( 'galaxy', get_template_directory_uri() . '/js/scripts.min.js', array( 'jquery' ), '1.0.0', true );
		} else {
			wp_enqueue_style( 'block', get_template_directory_uri() . '/css/block.css' );
			wp_enqueue_style( 'galaxy', get_template_directory_uri() . '/css/style.css' );
			
			wp_enqueue_script( 'galaxy', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true );

		}

	}


/** Do theme setup on the 'after_setup_theme' hook. */
add_action( 'after_setup_theme', 'galaxy_theme_setup' );

/** Theme setup function. */
function galaxy_theme_setup() {
	
	/** Add theme support for core framework features. */
	add_theme_support( 'galaxy-core-menus', array( 'galaxy-primary-menu' ) );
	add_theme_support( 'galaxy-core-sidebars', array( 'galaxy-primary-sidebar' ) );
	add_theme_support( 'galaxy-core-featured-image' );
	add_theme_support( 'galaxy-core-custom-header' );
	
	/** Add theme support for WordPress features. */
	add_theme_support( 'automatic-feed-links' );
	

}

?>