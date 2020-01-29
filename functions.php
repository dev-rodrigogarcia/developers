<?php
    function developers_wp_styled() {
        
        wp_enqueue_style('style_css', get_stylesheet_directory_uri());
        wp_enqueue_style('normalize_css', get_stylesheet_directory_uri() . '/assets/css/normalize.css');
        wp_enqueue_style('components_css', get_stylesheet_directory_uri() . '/assets/css/components.css');
        wp_enqueue_style('developers_css', get_stylesheet_directory_uri() . '/assets/css/developers.css');
        
        wp_enqueue_style('fonts', 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js');
        wp_enqueue_style('fontawesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

        wp_enqueue_script('jquery-3.4.1.min_js', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js');
        wp_enqueue_script('developers_js', get_template_directory_uri() . '/assets/js/developers.js', array('jquery'), '', true);
    }

    add_action('wp_enqueue_scripts', 'developers_wp_styled');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('menus');

?>