<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Hello Theme
 * @since 1.0.0
 */

/**
 * Enqueue the style.css file.
 *
 * @since 1.0.0
 */
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style(
    'tailwind-css-style',
    'https://cdn.tailwindcss.com',
    [],
    wp_get_theme()->get('Version')
  );
});
