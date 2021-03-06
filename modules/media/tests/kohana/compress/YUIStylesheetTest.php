<?php defined('SYSPATH') OR die('Kohana bootstrap needs to be included before tests run');
/**
 * Tests YUI stylesheet compression.
 *
 * @package    Compress
 * @author     Aaron Zampaglione <azampagl@azampagl.com>
 * @copyright  (c) 2011 Aaron Zampaglione
 * @license    ISC
 */
include_once(Kohana::find_file('tests/kohana/compress', 'StylesheetTest'));

class Kohana_Compress_YUIStylesheetTest extends Kohana_Compress_StylesheetTest
{
	/**
	 * @see parent
	 */
	public function provider_instances()
	{
		return array(
			Compress::instance('test_yui_stylesheet_1', array(
				'root'			=> DOCROOT,
				'dir'			=> DOCROOT,
				'gc'			=> TRUE,
				'filemtime'		=> TRUE,
				'compressor'	=> 'yui',
				)
			),
		);
	}
}
