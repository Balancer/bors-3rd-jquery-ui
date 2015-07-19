<?php

class jquery_ui extends jquery_plugin
{
	static function load()
	{
//		parent::load('jquery-ui', 'jquery.jquery-ui', 'balancer/bors-3rd-jquery-ui');
		jquery::plugin('http://code.jquery.com/ui/1.8.3/jquery-ui.min.js');
		bors_use('http://code.jquery.com/ui/1.8.3/themes/base/jquery-ui.css');
	}
}
