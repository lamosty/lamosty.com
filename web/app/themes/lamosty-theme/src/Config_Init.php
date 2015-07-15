<?php namespace Lamosty\Lamosty_Dot_Com;
/**
 * @ Lamosty.com 2015
 */

class Config_Init {

	public function actions_init() {

		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );

		add_filter( 'make_social_links', array( $this, 'make_social_links' ) );
	}

	public function enqueue_scripts() {

	}

	public function enqueue_styles() {
		wp_enqueue_style( 'parent-theme-css', get_template_directory_uri() . '/style.css' );

		wp_register_style( 'ttfmake-main-style', get_stylesheet_directory_uri() . '/style.css',
			array(), '1.0.1' );
	}

	public function make_social_links( $services_with_links ) {
		$services_with_links['github'] = array(
			'title' => 'GitHub',
			'url'   => 'https://github.com/lamosty',
			'class' => 'fa-github',
		);

		return $services_with_links;
	}

}
