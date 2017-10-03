<?php
if ( ! isset( $content_width ) ) $content_width = 1200;
define('UNFOLDID_PROCESS_EDITOR_POST', 12712);
define('UNFOLDID_PACKAGES_EDITOR_POST', 12717);

function load_includes()
{

  // Stylesheets

    wp_enqueue_style( 'Bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css' );
    wp_enqueue_style( 'owlCarousel', get_template_directory_uri() . '/stylesheets/vendor/owl-carousel/owl.carousel.min.css');
    wp_enqueue_style( 'owlCarousel-theme', get_template_directory_uri() . '/stylesheets/vendor/owl-carousel/owl.theme.default.min.css');
    wp_enqueue_style( 'fullpageMenu', get_template_directory_uri() . '/stylesheets/vendor/fullpage-menu/fullpage-menu.css');
    wp_enqueue_style( 'style', get_stylesheet_uri(), array('Bootstrap', 'fullpageMenu', 'owlCarousel', 'owlCarousel-theme') );

  // Scripts
    wp_enqueue_script( 'jQuery', 'https://code.jquery.com/jquery-3.2.1.min.js', array(), null, false);
    wp_enqueue_script( 'popperJS', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js', array(), null, true);
    wp_enqueue_script( 'Bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js', array('popperJS','jQuery'), null, true);
    wp_enqueue_script( 'FontAwesome', 'https://use.fontawesome.com/856026a2db.js', array(), null, true);

    wp_enqueue_script( 'owlCarousel', get_template_directory_uri() . '/js/vendor/owl-carousel/owl.carousel.min.js', array('jQuery'), null, false);
    wp_enqueue_script( 'fullpageMenu', get_template_directory_uri() . '/js/vendor/fullpage-menu/jquery.fullpage-menu.min.js', array('jQuery'), null, true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jQuery'), null, true);
}

add_editor_style();
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );

add_action ('wp_enqueue_scripts', 'load_includes' );
