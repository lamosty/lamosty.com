<?php namespace Lamosty\Lamosty_Dot_Com;
/**
 * @ Lamosty.com 2015
 */

class Lamosty_Dot_Com {
	const TEXT_DOMAIN = 'lamosty.com-theme';

	public static function init() {
		static $instance = null;

		if ( ! $instance ) {
			$instance = new Lamosty_Dot_Com();
		}

		return $instance;
	}

}