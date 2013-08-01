<?php
	if ($CurrentUser->logged_in()) {
		$this->register_app('spicy_analytics', 'Analytics', 5, 'Google Analytics dashboard widgit', '1.0.0');
		$this->require_version('spicy_analytics', '2.2.7');
		$this->add_setting('spicy_analytics_ooapi', 'OOcharts API Key', 'text', '');
		$this->add_setting('spicy_analytics_gaid', 'Google Analytics Profile ID', 'text', '');
	}
?>