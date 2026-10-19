<?php
/**
 *
 * Holiday Flare extension for the phpBB Forum Software package
 *
 * @author bonelifer (William Jacoby) bonelifer@phpbbmodders.net
 * @author VSE (Matt Friedman)
 * @copyright (c) 2014 phpbbmodders.net
 * @copyright (c) 2026, phpBB Modders, https://www.phpbbmodders.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbbmodders\holidayflare\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\template */
	protected $template;

	/**
	* Constructor
	*
	* @param \phpbb\config\config        $config             Config object
	* @param \phpbb\template\template    $template           Template object
	* @return \phpbbmodders\holidayflare\event\listener
	* @access public
	*/
	public function __construct(\phpbb\config\config $config, \phpbb\template\template $template)
	{
		$this->config = $config;
		$this->template = $template;
	}

	/**
	* Assign functions defined in this class to event listeners in the core
	*
	* @return array
	* @static
	* @access public
	*/
	public static function getSubscribedEvents()
	{
		return array(
			'core.page_header'					=> 'get_holiday_config',
		);
	}

	/**
	* Get config vars
	*
	* @return null
	* @access public
	*/
	public function get_holiday_config()
	{
		$active = false;
		foreach (\phpbbmodders\holidayflare\decoration_catalog::positions() as $position)
		{
			$items = \phpbbmodders\holidayflare\decoration_catalog::for_position($position);
			$id = isset($this->config['holidayflare_' . $position]) ? $this->config['holidayflare_' . $position] : '';
			if ($id !== '' && \phpbbmodders\holidayflare\decoration_catalog::valid($position, $id))
			{
				$this->template->assign_var('HOLIDAY_' . strtoupper($position) . '_IMAGE', $items[$id]['image']);
				$this->template->assign_var('HOLIDAY_' . strtoupper($position) . '_VARIANT', $id);
				$active = true;
			}
		}
		$this->template->assign_vars(array(
			'S_HOLIDAY_ACTIVE' => $active,
		));
	}
}
