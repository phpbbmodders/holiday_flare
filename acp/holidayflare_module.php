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

namespace phpbbmodders\holidayflare\acp;

/**
* @package acp
*/
class holidayflare_module
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\request\request */
	protected $request;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var string */
	public $u_action;

	public function main($id, $mode)
	{
		global $config, $request,  $template, $user;

		$this->config = $config;
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;

		$this->user->add_lang('acp/common');
		$this->user->add_lang_ext('phpbbmodders/holidayflare', 'holidayflare_acp');

		$this->tpl_name = 'acp_holidayflare';
		$this->page_title = $this->user->lang('ACP_HOLIDAYFLARE');

		$form_key = 'acp_holidayflare';
		add_form_key($form_key);

		if ($this->request->is_set_post('submit'))
		{
			if (!check_form_key($form_key))
			{
				trigger_error($user->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
			}

			$selections = array();
			foreach (\phpbbmodders\holidayflare\decoration_catalog::positions() as $position)
			{
				$id = '';
				foreach (\phpbbmodders\holidayflare\decoration_catalog::holidays() as $holiday)
				{
					$choice = $this->request->variable('holidayflare_' . $holiday . '_' . $position, '');
					if ($choice === '')
					{
						continue;
					}
					if ($id !== '' || !\phpbbmodders\holidayflare\decoration_catalog::valid($position, $choice) || \phpbbmodders\holidayflare\decoration_catalog::holiday($choice) !== $holiday)
					{
						trigger_error($this->user->lang('HOLIDAY_INVALID_SELECTION') . adm_back_link($this->u_action), E_USER_WARNING);
					}
					$id = $choice;
				}
				$selections[$position] = $id;
			}
			foreach ($selections as $position => $id)
			{
				$this->config->set('holidayflare_' . $position, $id);
			}

			trigger_error($this->user->lang('CONFIG_UPDATED') . adm_back_link($this->u_action));
		}

		foreach (\phpbbmodders\holidayflare\decoration_catalog::holidays() as $holiday)
		{
			$this->template->assign_block_vars('holidays', array(
				'ID' => $holiday,
				'LABEL' => $this->user->lang('HOLIDAY_GROUP_' . strtoupper($holiday)),
			));
			foreach (\phpbbmodders\holidayflare\decoration_catalog::positions() as $position)
			{
				$this->template->assign_block_vars('holidays.placements', array(
					'ID' => $position,
					'LABEL' => $this->user->lang('HOLIDAY_POSITION_' . strtoupper($position)),
				));
				$items = \phpbbmodders\holidayflare\decoration_catalog::for_position($position);
				foreach ($items as $id => $item)
				{
					if (\phpbbmodders\holidayflare\decoration_catalog::holiday($id) === $holiday)
					{
						$this->template->assign_block_vars('holidays.placements.options', array(
							'ID' => $id,
							'LABEL' => $this->user->lang($item['label']),
							'IMAGE' => $item['image'],
							'S_SELECTED' => isset($this->config['holidayflare_' . $position]) && $this->config['holidayflare_' . $position] === $id,
						));
					}
				}
			}
		}
		$this->template->assign_var('U_ACTION', $this->u_action);
	}
}
