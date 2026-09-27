<?php
/**
 *
 * Holiday Flare extension for the phpBB Forum Software package
 *
 * @author bonelifer (William Jacoby) bonelifer@phpbbmodders.net
 * @author VSE (Matt Friedman)
 * @copyright (c) 2014 phpbbmodders.net
 * @copyright (c) 2026, phpBB Modders, https://www.phpbbmodders.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbbmodders\holidayflare\acp;

/**
* @package module_install
*/
class holidayflare_info
{
	function module()
	{
		return array(
			'filename'	=> '\phpbbmodders\holidayflare\acp\holidayflare_module',
			'title'		=> 'ACP_HOLIDAYFLARE',
			'modes'		=> array(
				'settings'	=> array(
					'title' => 'ACP_HOLIDAYFLARE_SETTINGS',
					'auth' => 'ext_phpbbmodders/holidayflare && acl_a_board',
					'cat' => array('ACP_HOLIDAYFLARE')
				),
			),
		);
	}
}
