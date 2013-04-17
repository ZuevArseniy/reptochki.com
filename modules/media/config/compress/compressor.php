<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'yui'					=> array
	(
		'java'				=> 'java',
		'jar'				=> 'vendor/yui/yuicompressor-2.4.6.jar',
	),
	'closure_application'	=> array
	(
		'java'				=> 'java',
		'jar'				=> 'vendor/closure/closure-1346.jar',
		'compilation_level'	=> 'SIMPLE_OPTIMIZATIONS',
	),
	'closure_service'		=> array
	(
		'url'				=> 'http://closure-compiler.appspot.com/compile',
		'compilation_level'	=> 'SIMPLE_OPTIMIZATIONS',
	),
	'cssmin'				=> array
	(
		'exe'				=> 'vendor/cssmin/cssmin-v3.0.1-minified.php',
		'options'			=> array
		(
			"remove-empty-blocks"			=> FALSE,
			"remove-empty-rulesets"			=> FALSE,
			"remove-last-semicolons"		=> FALSE,
			"convert-css3-properties"		=> FALSE,
			"convert-font-weight-values"	=> FALSE,
			"convert-named-color-values"	=> FALSE,
			"convert-hsl-color-values"		=> FALSE,
			"convert-rgb-color-values"		=> FALSE,
			"compress-color-values"			=> FALSE,
			"compress-unit-values"			=> FALSE,
			"emulate-css3-variables"		=> FALSE,
			"import-imports"				=> FALSE,
			"import-base-path"				=> NULL,
			"import-remove-invalid"			=> FALSE
		),
	),
);
