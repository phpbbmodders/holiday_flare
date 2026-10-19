<?php
/**
 * Adds the optional New Year header decoration.
 * @license GNU General Public License, version 2 (GPL-2.0)
 */

namespace phpbbmodders\holidayflare\migrations;

class newyear_theme extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return array('\phpbbmodders\holidayflare\migrations\xmas_valentine_split');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('enable_newyear', 0)),
		);
	}

	public function revert_data()
	{
		return array(
			array('config.remove', array('enable_newyear')),
		);
	}
}
