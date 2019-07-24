<?php

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