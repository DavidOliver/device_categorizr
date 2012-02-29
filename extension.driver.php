<?php

require_once EXTENSIONS . '/devicecategorizr/lib/categorizr.php';

class Extension_DeviceCategorizr extends Extension {
	
	public function about() {
		return array(
			'name'			=> 'Device Categorizr',
			'version'		=> '0.0.1',
			'release-date'	=> '2012-02-29',
			'author'		=> array(
				'name'			=> 'David Oliver',
				'website'		=> 'http://doliver.co.uk',
				'email'			=> 'david@doliver.co.uk'
			)
		);
	}
	
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
		$context['params']['devicecategorizr'] = categorizr();
	}
	
}

?>