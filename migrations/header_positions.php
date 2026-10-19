<?php
/**
 * Separates top, bottom and middle header slots while preserving existing top artwork.
 * @license GNU General Public License, version 2 (GPL-2.0)
 */

namespace phpbbmodders\holidayflare\migrations;

class header_positions extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return array('\phpbbmodders\holidayflare\migrations\forum_decorations');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('holidayflare_center_top', isset($this->config['holidayflare_center']) ? $this->config['holidayflare_center'] : '')),
			array('config.add', array('holidayflare_center_bottom', '')),
			array('config.update', array('holidayflare_center', '')),
		);
	}

	public function revert_data()
	{
		return array(
			array('custom', array(array($this, 'restore_top'))),
			array('config.remove', array('holidayflare_center_top')),
			array('config.remove', array('holidayflare_center_bottom')),
		);
	}

	public function restore_top()
	{
		$this->config->set('holidayflare_center', $this->config['holidayflare_center_top']);
	}
}
