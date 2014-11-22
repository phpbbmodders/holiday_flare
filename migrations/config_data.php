<?php
/**
 *
 * Holiday Flare extension
 *
 * @copyright (c) 2014 bonelifer & VSE
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbbmodders\holidayflare\migrations;

class config_data extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			array('config.add', array('enable_hohohatcorner', 0)),
		);
	}
}
