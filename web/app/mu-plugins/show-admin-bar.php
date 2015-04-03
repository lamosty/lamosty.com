<?php
/**
 * @ Lamosty.com 2015
 */

if ( WP_ENV !== 'production' ) {
	add_filter( 'show_admin_bar', '__return_true' );
}