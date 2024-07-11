<?php
function sipm_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('tailwind', 'https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'sipm_enqueue_styles');
?>
