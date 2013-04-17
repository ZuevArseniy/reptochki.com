<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'default' => array
	(
		'root'			=> DOCROOT . 'media/',
		'dir'			=> DOCROOT.'media/cache',
		'gc'			=> TRUE,
		'filemtime'		=> TRUE,
		'compressor'	=> 'closure_service',
	),
	'javascripts' => array
	(
		'root'			=> DOCROOT,
		'dir'			=> DOCROOT.'media/cache',
		'gc'			=> TRUE,
		'filemtime'		=> TRUE,
		'compressor'	=> 'closure_service',
	),
	'stylesheets' => array
	(
		'root'			=> DOCROOT,
		'dir'			=> DOCROOT.'media/cache',
		'gc'			=> TRUE,
		'filemtime'		=> TRUE,
		'compressor'	=> 'cssmin',
	),
);
