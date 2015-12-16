<?php
/**
 *
 * @package Holiday Flare extension
 * @author bonelifer (William Jacoby) bonelifer@phpbbmodders.net
 * @author VSE (Matt Friedman)
 * @author RMcGirr83 (Rich McGirr)
 * @copyright (c) 2014 phpbbmodders.net
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbbmodders\holidayflare\migrations;

class config_data extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			/* XMAS Start */
			array('config.add', array('enable_xmas', 0)),
			/* XMAS Stop */
			/* VALENTINE Start */
			array('config.add', array('enable_valentine', 0)),
			/* VALENTINE Stop */
		);
	}

	public function revert_data()
	{
		return array(
			/* XMAS Start */
			array('config.remove', array('enable_xmas')),
			/* XMAS Stop */
			/* VALENTINE Start */
			array('config.remove', array('enable_valentine')),
			/* VALENTINE Stop */
		);
	}
}
