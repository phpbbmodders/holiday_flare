acp/holidayflare_module.php
			
			/* Valentine Start */
			$enable_valentine = $this->request->variable('enable_valentine', 0);
			$this->config->set('enable_valentine', $enable_valentine);
			/* Valentine Stop */
			
			/* Valentine Start */
			'S_ENABLE_VALENTINE'	=> isset($this->config['enable_valentine']) ? $this->config['enable_valentine'] : '',
			/* Valentine Stop */

adm/style/acp_holidayflare.html

		<dl>
			<dt><label for="enable_valentine">{L_ENABLE_VALENTINE}{L_COLON}</label><br /><span>{L_ENABLE_VALENTINE_EXPLAIN}</span></dt>
			<dd>
				<label><input type="radio" class="radio" name="enable_valentine" id="enable_valentine" value="1"<!-- IF S_ENABLE_VALENTINE --> checked="checked"<!-- ENDIF --> /> {L_YES}</label>
				<label><input type="radio" class="radio" name="enable_valentine" value="0"<!-- IF not S_ENABLE_VALENTINE --> checked="checked"<!-- ENDIF --> /> {L_NO}</label>
			</dd>
		</dl>

event\listener.php

		/* VALENTINE Start */
		$this->template->assign_var('S_ENABLE_VALENTINE', $this->config['enable_valentine']);
		/* VALENTINE Stop */	

language\en\holidayflare_acp.php

	/* VALENTINE Start */
	'ENABLE_VALENTINE'			=> 'Valentine Theme',
	'ENABLE_VALENTINE_EXPLAIN'	=> 'Select "Yes" to show the Valentine Theme and "No" to hide it.',
	/* VALENTINE Stop */	

language\nl\holidayflare_acp.php

	/* VALENTINE Start */
	'ENABLE_VALENTINE'			=> 'Valentijn thema',
	'ENABLE_VALENTINE_EXPLAIN'	=> 'Selecteer "Ja" om het Valentijnthema te zien en "Nee" om het te verbergen.',
	/* VALENTINE Stop */	
	
migrations\config_data.php

			/* VALENTINE Start */
			array('config.add', array('enable_valentine', 0)),
			/* VALENTINE Stop */
			
-------------------------------------------------------------------------------------------------------------------			
			
			/* VALENTINE Start */
			array('config.remove', array('enable_valentine')),
			/* VALENTINE Stop */

styles\prosilver\template\event\overall_header_head_append.html
			
<!-- ELSEIF S_ENABLE_VALENTINE -->
	<!-- INCLUDECSS @phpbbmodders_holidayflare/../theme/valentine.css -->

styles\prosilver\template\event\overall_header_page_body_before.html

<!-- ELSEIF S_ENABLE_VALENTINE -->
	<div id="banner-valentine"></div>

