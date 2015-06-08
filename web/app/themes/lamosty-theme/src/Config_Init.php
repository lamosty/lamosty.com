<?php namespace Lamosty\Lamosty_Dot_Com;
/**
 * @ Lamosty.com 2015
 */

class Config_Init {

	public function actions_init() {

		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );
	}

	public function enqueue_scripts() {

	}

	public function enqueue_styles() {
		wp_enqueue_style( 'parent-theme-css', get_template_directory_uri() . '/style.css' );

         wp_register_style( 'ttfmake-main-style', get_stylesheet_directory_uri() . '/style.css',
             array(), '1.0.1' );
	}

}
