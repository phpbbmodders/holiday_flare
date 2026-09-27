<?php
/**
 *
 * Holiday Flare extension for the phpBB Forum Software package
 *
 * @author bonelifer (William Jacoby) bonelifer@phpbbmodders.net
 * @author VSE (Matt Friedman)
 * @author RMcGirr83 (Rich McGirr)
 * @copyright (c) 2014 phpbbmodders.net
 * @copyright (c) 2026, phpBB Modders, https://www.phpbbmodders.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbbmodders\holidayflare\migrations;

class module_data extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_HOLIDAYFLARE'
			)),
			array('module.add', array(
				'acp',
				'ACP_HOLIDAYFLARE',
				array(
					'module_basename'	=> '\phpbbmodders\holidayflare\acp\holidayflare_module',
					'modes'				=> array('settings'),
				),
			)),
		);
	}

	public function revert_data()
	{
		return array(
			array('module.remove', array(
				'acp',
				'ACP_HOLIDAYFLARE',
				array(
					'module_basename'	=> '\phpbbmodders\holidayflare\acp\holidayflare_module',
					'modes'				=> array('settings'),
				),
			)),
			array('module.remove', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_HOLIDAYFLARE'
			)),
		);
	}
}
