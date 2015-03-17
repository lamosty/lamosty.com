<?php namespace Lamosty\Lamosty_Dot_Com;
/**
 * @ Lamosty.com 2015
 */

class Design {
	public function filters_init() {
		/*
		 * Get rid of sidebars with zero widgets taking up space.
		 */
		add_filter( 'make_has_sidebar', array( $this, 'remove_inactive_sidebars' ), 10, 2 );

		/*
		 * Remove Make credits.
		 */
		add_filter( 'make_show_footer_credit', '__return_false' );
	}


	public function remove_inactive_sidebars( $show_sidebar, $location ) {
		if ( $location != 'right' ) {
			return $show_sidebar;
		}

		if ( ! is_active_sidebar( 'sidebar-right' ) ) {
			return false;
		}

		return true;
	}
}