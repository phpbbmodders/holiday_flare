<?php
/**
 * Migrates the previously visible theme to one selection per header placement.
 * @license GNU General Public License, version 2 (GPL-2.0)
 */

namespace phpbbmodders\holidayflare\migrations;

class decoration_placements extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return array('\phpbbmodders\holidayflare\migrations\newyear_theme');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('holidayflare_corner', $this->legacy_selection())),
			array('config.add', array('holidayflare_center', '')),
		);
	}

	/** Preserve the old Christmas, Valentine, New Year display priority. */
	public function legacy_selection()
	{
		foreach (array('xmas', 'valentine', 'newyear') as $holiday)
		{
			if (!empty($this->config['enable_' . $holiday]))
			{
				return $holiday;
			}
		}
		return '';
	}

	public function revert_data()
	{
		return array(
			array('config.remove', array('holidayflare_corner')),
			array('config.remove', array('holidayflare_center')),
		);
	}
}
