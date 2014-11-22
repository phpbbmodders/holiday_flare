<?php
/**
 *
 * Holiday Flare extension
 *
 * @copyright (c) 2014 bonelifer & VSE
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
