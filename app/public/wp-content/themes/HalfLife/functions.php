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
        'rewrite' => array(
            'slug' => 'achievement'
        ),
        
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        ),
    ));
}

add_action('init', 'register_achievement_post_type');