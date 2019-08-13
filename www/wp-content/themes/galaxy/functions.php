<?php

function remove_more_tags($link) {

	$offset = strpos($link, '#more-');
	if ($offset)
	{$end = strpos($link, '"',$offset); 
	}
	 
	if ($end)
	{
	$link = substr_replace($link, '', $offset, $end-$offset); 
	}
	return '<div>' . $link . '</div>'; 
	}
	 
	add_filter('the_content_more_link', 'remove_more_tags');

/**
 * Регистрируем панель виджетов
 */

add_action( 'widgets_init', 'register_galaxy_widgets' );
function register_galaxy_widgets(){
	register_sidebar( array(
		'name'          => "Левый сайтбар",
		'id'            => "sidebar",
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => "</h4>\n",
	) );
}

class True_Walker_Nav_Menu extends Walker_Nav_Menu{

	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = str_repeat( $t, $depth );

		// Default class.
		$classes = array( 'sub-menu', 'dropdown-menu' );

		$class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$output .= "{$n}{$indent}<ul$class_names>{$n}";
	}

	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

		$classes   = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;
		if ( in_array( 'menu-item-has-children', $classes) ) {
			$classes[] = 'dropdown';
		}

		$args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $class_names . '>';

		$atts           = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target ) ? $item->target : '';
		if ( '_blank' === $item->target && empty( $item->xfn ) ) {
			$atts['rel'] = 'noopener noreferrer';
		} else {
			$atts['rel'] = $item->xfn;
		}
		$atts['href']         = ! empty( $item->url ) ? $item->url : '';
		$atts['aria-current'] = $item->current ? 'page' : '';

		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		/** This filter is documented in wp-includes/post-template.php */
		$title = apply_filters( 'the_title', $item->title, $item->ID );

		$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

		$caret = $args->walker->has_children == 1 ? '<span class="ecaret"></span>' : '';
		$item_output  = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . $title . $args->link_after . $caret;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

}

/**
 * Регистрируем меню
 */

register_nav_menus(array(
	'main'   => 'Главное меню',
));

/**
 * кастомная функция вывода данных
 */

if ( ! function_exists( 'dump' ) ) {
	function dump( $var ) {
		echo '<pre style="color: #c3c3c3; background-color: #282923;">';
		print_r( $var );
		echo '</pre>';
	}
}

/**
 * Выводим страницу настроек шаблона через ACF
 */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Основные настройки',
		'menu_title'	=> 'Настройки темы',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройки шапки',
		'menu_title'	=> 'Шапка',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройки подвала',
		'menu_title'	=> 'Подвал',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

	/**
	 * Подключение файлов CSS и JS шаблона
	 */

	add_action( 'wp_enqueue_scripts', 'galaxy_enqueue' );
	function galaxy_enqueue() {

		wp_enqueue_style( 'changetemplatecolormain', get_template_directory_uri() . '/css/change_color_template_main.css' );
		wp_enqueue_style( 'js_composer_min', get_template_directory_uri() . '/css/js_composer.min.css' );
		wp_enqueue_style( 'bootstrap_min', get_template_directory_uri() . '/css/bootstrap.min.css' );
		wp_enqueue_style( 'bootstrap-submenu', get_template_directory_uri() . '/css/bootstrap-submenu.css' );
		wp_enqueue_style( 'animate-min', get_template_directory_uri() . '/css/animate.min.css' );
		wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css' );
		wp_enqueue_style( 'iconfont', get_template_directory_uri() . '/css/iconfont.css' );
		wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css' );
		wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css' );
		wp_enqueue_style( 'scrolling-tabs', get_template_directory_uri() . '/css/scrolling-tabs.css' );
		wp_enqueue_style( 'galaxy', get_template_directory_uri() . '/css/style.css' );
		
		wp_enqueue_script( 'cookie-min', get_template_directory_uri() . '/js/js.cookie.min.js', array( 'jquery' ), '1.0.0', true );
		wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '1.0.0', true );
		wp_enqueue_script( 'slick-min', get_template_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '1.0.0', true );
		wp_enqueue_script( 'scrolling-tabs-min', get_template_directory_uri() . '/js/jquery.scrolling-tabs.min.js', array( 'jquery' ), '1.0.0', true );
		wp_enqueue_script( 'jquery-ui-widget' );
		wp_enqueue_script( 'jquery-ui-button' );
		wp_enqueue_script( 'jquery-ui-spinner' );
		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true );
		wp_enqueue_script( 'owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ), '1.0.0', true );
		wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), '1.0.0', true );
		wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), '1.0.0', true );
		wp_enqueue_script( 'composter', get_template_directory_uri() . '/js/composter.js', array( 'jquery' ), '1.0.0', true );
		wp_enqueue_script( 'galaxy', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0.0', true );

		wp_localize_script( 'jquery', 'ajax_object', array( 
			'site_preloader_timeout' => 500
		) );

		wp_localize_script( 'jquery', 'ajax_slickslider', array( 
			'autoplay' => "true",
			'autoplay_speed' => 3000,
			'arrows' => "true",
			'dots' => "false",
			'fade' => "true",
			'speed' => 500,
			'pause_on_hover' => "true",
			'pause_on_dots_hover' => "true",
		) );

	}


/** Do theme setup on the 'after_setup_theme' hook. */
add_action( 'after_setup_theme', 'galaxy_theme_setup' );

/** Theme setup function. */
function galaxy_theme_setup() {
	
	/** Add theme support for core framework features. */
	add_theme_support('menus');
	add_theme_support( 'custom-logo', [
		'height'      => 75,
		'width'       => 473,
		'flex-width'  => false,
		'flex-height' => false,
		'header-text' => '',
	] );
	add_theme_support('widgets');
	
	/** Add theme support for WordPress features. */
	add_theme_support( 'automatic-feed-links' );

}

?>