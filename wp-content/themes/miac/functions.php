<?php

if (! function_exists('miac_setup')) {
	function miac_setup(){
		add_theme_support( 'custom-logo', [
			'height'      => 87,
			'width'       => 200,
			'flex-width'  => false,
			'flex-height' => false,
			'header-text' => '',
		] );

		add_theme_support('title-tag');
	}
	add_action('after_setup_theme', 'miac_setup');
}

add_action( 'wp_enqueue_scripts', 'miac_scripts' );

function miac_scripts() {
	wp_enqueue_style( 'main', get_stylesheet_uri());
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/plagins/bootstrap-5.3.3-dist/css/bootstrap.css', array('main'), null);
	wp_enqueue_style( 'miac', get_template_directory_uri() . '/style.css', array('bootstrap'), null);

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/plagins/bootstrap-5.3.3-dist/js/bootstrap.bundle.js', true );
}

function miac_menu() {
	$locations = array(
		'header'=> __('Header Menu', 'miac')
	);
	register_nav_menus($locations);
}
add_action('init', 'miac_menu');

class bootstrap_4_walker_nav_menu extends Walker_Nav_menu {
    
    function start_lvl( &$output, $depth = 0, $args = null ){ // ul
        $indent = str_repeat("\t",$depth); // indents the outputted HTML
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
    }
  
  	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ){ // li a span
        
    $indent = ( $depth ) ? str_repeat("\t",$depth) : '';
    
    $li_attributes = '';
        $class_names = $value = '';
    
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        
        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = ($item->current || $item->current_item_anchestor) ? 'active' : '';
        $classes[] = 'nav-item';
        $classes[] = 'nav-item-' . $item->ID;
        if( $depth && $args->walker->has_children ){
            $classes[] = 'dropdown-menu';
        }
        
        $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = ' class="' . esc_attr($class_names) . '"';
        
        $id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
        
        $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';
        
        $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';
        
        $attributes .= ( $args->walker->has_children ) ? ' class="nav-link dropdown-toggle"  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="nav-link"';
        
        $item_output = $args->before;
        $item_output .= ( $depth > 0 ) ? '<a class="dropdown-item"' . $attributes . '>' : '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
        
        $output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    
    }
    
}
