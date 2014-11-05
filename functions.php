<?php

function theme_styles(){
    wp_enqueue_style('normalize','//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css');
    wp_enqueue_style('googleFontLobster','http://fonts.googleapis.com/css?family=Lobster');
     wp_enqueue_style('googleFontJosefinSlab','http://fonts.googleapis.com/css?family=Josefin+Slab:400,600');
     wp_enqueue_style('googleFontDroidSans','http://fonts.googleapis.com/css?family=Droid+Sans:400,700');
     wp_enqueue_style('main', get_template_directory_uri().'/style.css');
     }

add_action('wp_enqueue_scripts', 'theme_styles');


function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">&hellip; ' . __('continue', 'stitches') . '</a>';
}

add_filter( 'excerpt_more', 'new_excerpt_more' );

function register_menus() {
        register_nav_menu('header-menu', __('Header Menu'));
}

add_action('init', 'register_menus');
?>
