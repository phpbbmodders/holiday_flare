<?php
/**
 * Moves the compact Christmas ribbon to its appropriate corner slot.
 * @license GNU General Public License, version 2 (GPL-2.0)
 */

namespace phpbbmodders\holidayflare\migrations;

class curated_artwork extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\phpbbmodders\holidayflare\migrations\header_positions');
	}

	public function update_data()
	{
		return array(
			array('custom', array(array($this, 'move_ribbon'))),
		);
	}

	public function move_ribbon()
	{
		$found = false;
		foreach (array('center_top', 'center_bottom', 'center') as $position)
		{
			$key = 'holidayflare_' . $position;
			if (isset($this->config[$key]) && $this->config[$key] === 'christmas_garland')
			{
				$this->config->set($key, '');
				$found = true;
			}
		}
		if ($found && empty($this->config['holidayflare_corner']))
		{
			$this->config->set('holidayflare_corner', 'christmas_garland');
		}
	}
}
