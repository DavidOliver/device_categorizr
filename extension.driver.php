<?php

require_once EXTENSIONS . '/device_categorizr/lib/categorizr.php';

class Extension_Device_Categorizr extends Extension {

	public function getSubscribedDelegates() {
		return array(
			array(
				'page'		=> '/frontend/',
				'delegate'	=> 'FrontendParamsResolve',
				'callback'	=> 'addParam'
			)
		);
	}

	public function addParam(&$context) {
		$context['params']['device-categorizr'] = categorizr();
	}

}
