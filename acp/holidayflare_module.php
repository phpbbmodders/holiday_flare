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
			/* XMAS Start */
			$enable_xmas = $this->request->variable('enable_xmas', 0);
			$this->config->set('enable_xmas', $enable_xmas);
			/* XMAS Stop */
			
			/* Valentine Start */
			$enable_valentine = $this->request->variable('enable_valentine', 0);
			$this->config->set('enable_valentine', $enable_valentine);
			/* Valentine Stop */

			trigger_error($this->user->lang('CONFIG_UPDATED') . adm_back_link($this->u_action));
		}

		$this->template->assign_vars(array(
			/* XMAS Start */
			'S_ENABLE_XMAS'	=> isset($this->config['enable_xmas']) ? $this->config['enable_xmas'] : '',
			/* XMAS Stop */
			
			/* Valentine Start */
			'S_ENABLE_VALENTINE'	=> isset($this->config['enable_valentine']) ? $this->config['enable_valentine'] : '',
			/* Valentine Stop */

			'U_ACTION'					=> $this->u_action,
		));
	}
}
