<?php
    function my_scripts() {
        wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/about.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/contact.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'style-name', get_template_directory_uri() . '/slick/slick.css', array(), '1.0.0', 'all' );
      }
      add_action( 'wp_enqueue_scripts', 'my_scripts' );
?>
