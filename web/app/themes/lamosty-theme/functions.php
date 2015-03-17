<?php namespace Lamosty\Lamosty_Dot_Com;
/**
 * @ Lamosty.com 2015
 */

use Encase\Container;

$container = new Container();

$container
	->object('lamosty_dot_com', function() {
		return new Lamosty_Dot_Com();
	})
	->singleton('design', __NAMESPACE__ . '\Design')
	->singleton('config_init', __NAMESPACE__ . '\Config_Init');

/** @var Lamosty_Dot_Com $lamosty_dot_com */
$lamosty_dot_com = $container->lookup('lamosty_dot_com');

$lamosty_dot_com->actions_init();


