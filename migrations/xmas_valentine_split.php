<?php
/**
 *
 * @package Holiday Flare extension
 * @author bonelifer (William Jacoby) bonelifer@phpbbmodders.net
 * @author VSE (Matt Friedman)
 * @copyright (c) 2014 phpbbmodders.net
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbbmodders\holidayflare\migrations;

/**
* Renames the original enable_hohohatcorner config to enable_xmas and
* adds enable_valentine, so upgrading installs keep their existing
* Christmas setting instead of losing it when the config key changes.
*/
class xmas_valentine_split extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\phpbbmodders\holidayflare\migrations\config_data');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('enable_valentine', 0)),
			array('custom', array(array($this, 'rename_xmas_config'))),
		);
	}

	public function rename_xmas_config()
	{
		if (isset($this->config['enable_hohohatcorner']))
		{
			$this->config->set('enable_xmas', (int) $this->config['enable_hohohatcorner']);
			$this->config->delete('enable_hohohatcorner');
		}
		else if (!isset($this->config['enable_xmas']))
		{
			$this->config->set('enable_xmas', 0);
		}
	}

	public function revert_data()
	{
		return array(
			array('config.remove', array('enable_valentine')),
			array('custom', array(array($this, 'restore_hohohatcorner_config'))),
		);
	}

	public function restore_hohohatcorner_config()
	{
		if (isset($this->config['enable_xmas']))
		{
			$this->config->set('enable_hohohatcorner', (int) $this->config['enable_xmas']);
			$this->config->delete('enable_xmas');
		}
	}
}
