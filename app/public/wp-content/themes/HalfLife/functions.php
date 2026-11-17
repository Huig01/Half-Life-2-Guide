<?php

function mijn_footer_text() {
    echo '<p>&copy; ' . date('Y') . ' HalfLife. All rights reserved.</p>';
}
add_action('wp_footer', 'mijn_footer_text');

function register_achievement_post_type() {

    register_post_type('achievement', array(
        'labels' => array(
            'name' => 'Achievements',
            'singular_name' => 'Achievement',
            'add_new' => 'Add New Achievement',
            'add_new_item' => 'Add New Achievement',
            'edit_item' => 'Edit Achievement',
        ),

        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-awards',

        'rewrite' => array(
            'slug' => 'achievement'
        ),

        'taxonomies' => array(
            'category',
            'post_tag'
        ),

        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'excerpt'
        ),
    ));
}
add_action('init', 'register_achievement_post_type');

function mijn_theme_styles() {
    wp_enqueue_style(
        'main-style',
        get_stylesheet_uri()
    );
}
add_action('wp_enqueue_scripts', 'mijn_theme_styles');
