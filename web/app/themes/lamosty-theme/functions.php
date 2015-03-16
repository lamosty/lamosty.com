<?php
/**
 * @ Lamosty.com 2015
 */

add_action( 'wp_enqueue_scripts', 'lamosty_child_theme_scripts' );

function lamosty_child_theme_scripts() {
	wp_enqueue_style( 'parent-theme-css', get_template_directory_uri() . '/style.css' );
}