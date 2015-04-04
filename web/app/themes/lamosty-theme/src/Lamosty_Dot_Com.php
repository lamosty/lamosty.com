<?php namespace Lamosty\Lamosty_Dot_Com;
/**
 * @ Lamosty.com 2015
 */



class Lamosty_Dot_Com {
	const TEXT_DOMAIN = 'lamosty.com-theme';

	/** @var Posts $posts */
	public $posts;

	/** @var Design $design */
	public $design;

	/** @var Config_Init $config_init */
	public $config_init;

	public function needs() {
		return array(
			'design',
			'config_init',
			'posts'
		);
	}

	public function actions_init() {
		$this->config_init->actions_init();
		$this->posts->init();
	}

	public function filters_init() {
		$this->design->filters_init();
	}


}

