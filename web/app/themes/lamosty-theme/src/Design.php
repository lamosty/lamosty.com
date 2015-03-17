<?php namespace Lamosty\Lamosty_Dot_Com;
/**
 * @ Lamosty.com 2015
 */

class Design {
	public function filters_init() {
		add_filter( 'make_has_sidebar', array( $this, 'remove_inactive_sidebars' ), 10, 2 );
	}


	public function remove_inactive_sidebars( $show_sidebar, $location ) {
		if ($location != 'right') {
			return $show_sidebar;
		}

		if ( ! is_active_sidebar( 'sidebar-right' ) ) {
			return false;
		}

		return true;
	}
}