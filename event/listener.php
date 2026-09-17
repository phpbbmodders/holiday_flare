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
	static public function getSubscribedEvents()
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
		$this->template->assign_vars(array(
			'S_ENABLE_XMAS'		=> $this->config['enable_xmas'],
			'S_ENABLE_VALENTINE'	=> $this->config['enable_valentine'],
		));
	}
}
