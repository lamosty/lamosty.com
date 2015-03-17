<?php namespace Lamosty\Lamosty_Dot_Com;
/**
 * @ Lamosty.com 2015
 */



class Lamosty_Dot_Com {
	const TEXT_DOMAIN = 'lamosty.com-theme';

	public function needs() {
		return array(
			'design', 'config_init'
		);
	}

	public function actions_init() {
		$this->config_init->actions_init();
	}

	public function filters_init() {
		$this->design->filters_init();
	}


}

