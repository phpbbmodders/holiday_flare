<?php
/**
 * Gives forum-list decorations an independent selection.
 * @license GNU General Public License, version 2 (GPL-2.0)
 */

namespace phpbbmodders\holidayflare\migrations;

class forum_decorations extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\phpbbmodders\holidayflare\migrations\decoration_placements');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('holidayflare_forum', $this->previous_forum_selection())),
		);
	}

	/** Keep hats only where the previous placement renderer showed them. */
	public function previous_forum_selection()
	{
		foreach (array('corner', 'center') as $position)
		{
			$id = isset($this->config['holidayflare_' . $position]) ? $this->config['holidayflare_' . $position] : '';
			if (\phpbbmodders\holidayflare\decoration_catalog::valid($position, $id) && ($id === 'xmas' || strpos($id, 'christmas_') === 0))
			{
				return 'xmas_mini';
			}
		}
		return '';
	}

	public function revert_data()
	{
		return array(
			array('config.remove', array('holidayflare_forum')),
		);
	}
}
