<?php
/**
 * @ Lamosty.com 2015
 */

namespace Lamosty\Lamosty_Dot_Com;


class Posts {

	public function init() {
		$this->add_wp_actions();
	}

	private function add_wp_actions() {
		add_action( 'p2p_init', [ $this, 'register_posts_series' ] );

	}

	public function register_posts_series() {
		p2p_register_connection_type( [
			'name' => 'posts_series',
			'from' => 'post',
			'to'   => 'post',
			'reciprocal' => 'true',
			'title' => 'Article series'
		] );
	}

}
