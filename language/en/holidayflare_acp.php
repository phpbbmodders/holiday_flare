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

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_HOLIDAYFLARE'			=> 'Holiday Flare',
	'ACP_HOLIDAYFLARE_EXPLAIN'	=> 'Choose images from the dropdowns under each holiday. Each placement accepts one image across all holidays: selecting an image replaces the other holiday selection in that placement. Forum-list icons are independent of the header. Select None to remove an image. Decorations hide on screens 700 pixels wide or smaller.',

	'ENABLE_XMAS'				=> 'Christmas Theme',
	'ENABLE_XMAS_EXPLAIN'		=> 'Select "Yes" to show the Christmas Theme and "No" to hide it.',

	'ENABLE_VALENTINE'			=> 'Valentine Theme',
	'ENABLE_VALENTINE_EXPLAIN'	=> 'Select "Yes" to show the Valentine Theme and "No" to hide it.',
	'ENABLE_NEWYEAR'			=> 'New Year Theme',
	'ENABLE_NEWYEAR_EXPLAIN'	=> 'Select "Yes" to show the New Year Theme and "No" to hide it.',
	'HOLIDAY_POSITION_FORUM' => 'Forum-list icons',
	'HOLIDAY_VARIANT_XMAS_MINI' => 'Christmas — small Santa hats',
	'HOLIDAY_POSITION_CORNER' => 'Left corner',
	'HOLIDAY_POSITION_CENTER' => 'Center',
	'HOLIDAY_NONE' => 'None',
	'HOLIDAY_INVALID_SELECTION' => 'Choose only one valid image per placement across all holidays.',
	'HOLIDAY_VARIANT_XMAS' => 'Christmas — original Santa hat',
	'HOLIDAY_VARIANT_VALENTINE' => 'Valentine — original heart',
	'HOLIDAY_VARIANT_NEWYEAR' => 'New Year — original greeting',
	'HOLIDAY_VARIANT_NEWYEAR_MIDNIGHT' => 'New Year — midnight celebration',
	'HOLIDAY_VARIANT_PATRIOTIC_FIREWORKS' => 'Independence Day — fireworks',
	'HOLIDAY_VARIANT_HALLOWEEN_AUTUMN_PUMPKIN' => 'Halloween — autumn pumpkin',
	'HOLIDAY_VARIANT_HALLOWEEN_GLOWING_PUMPKIN' => 'Halloween — glowing pumpkin',
	'HOLIDAY_VARIANT_CHRISTMAS_ORNAMENT_CORNER' => 'Christmas — colorful ornaments',
	'HOLIDAY_VARIANT_CHRISTMAS_EVERGREEN_CORNER' => 'Christmas — evergreen corner',
	'HOLIDAY_VARIANT_CHRISTMAS_SANTA_ORNAMENTS' => 'Christmas — Santa ornaments',
	'HOLIDAY_VARIANT_CHRISTMAS_BELLS_CORNER' => 'Christmas — bells corner',
	'HOLIDAY_VARIANT_HALLOWEEN_PUMPKIN_01' => 'Halloween — pumpkin 01',
	'HOLIDAY_VARIANT_HALLOWEEN_PUMPKIN_02' => 'Halloween — pumpkin 02',
	'HOLIDAY_VARIANT_HALLOWEEN_PUMPKIN_03' => 'Halloween — pumpkin 03',
	'HOLIDAY_VARIANT_HALLOWEEN_PUMPKIN_04' => 'Halloween — pumpkin 04',
	'HOLIDAY_VARIANT_HALLOWEEN_PUMPKIN_05' => 'Halloween — pumpkin 05',
	'HOLIDAY_VARIANT_HALLOWEEN_PUMPKIN_06' => 'Halloween — pumpkin 06',
	'HOLIDAY_VARIANT_HALLOWEEN_PUMPKIN_07' => 'Halloween — pumpkin 07',
	'HOLIDAY_VARIANT_HALLOWEEN_PUMPKIN_08' => 'Halloween — pumpkin 08',
	'HOLIDAY_VARIANT_CHRISTMAS_GARLAND' => 'Christmas — ribbon corner',

	'HOLIDAY_POSITION_CENTER_TOP' => 'Center top',
	'HOLIDAY_POSITION_CENTER_BOTTOM' => 'Center bottom',
	'HOLIDAY_GROUP_CHRISTMAS' => 'Christmas',
	'HOLIDAY_GROUP_VALENTINE' => 'Valentine',
	'HOLIDAY_GROUP_NEWYEAR' => 'New Year',
	'HOLIDAY_GROUP_HALLOWEEN' => 'Halloween',
	'HOLIDAY_GROUP_INDEPENDENCE' => 'Independence Day',
	'HOLIDAY_CLEAR_PLACEMENT' => 'Clear a placement',
	'HOLIDAY_CLEAR_EXPLAIN' => 'Select None to remove the image from that placement. Choices below replace None automatically.',
	'HOLIDAY_NO_IMAGES' => 'No images are available for this placement.',

	'HOLIDAY_GROUP_EASTER' => 'Easter',
	'HOLIDAY_GROUP_STPATRICK' => 'St. Patrick’s Day',

	'HOLIDAY_VARIANT_EASTER_BUNNY_BOUQUET_CORNER' => 'Easter — bunny corner bouquet',
	'HOLIDAY_VARIANT_EASTER_BUNNY_GARDEN_CORNER' => 'Easter — bunny garden corner',
	'HOLIDAY_VARIANT_EASTER_BUNNY_FLORAL_CORNER' => 'Easter — bunny floral corner',
	'HOLIDAY_VARIANT_EASTER_BUNNY_SPRING_CORNER' => 'Easter — spring corner bouquet',
	'HOLIDAY_VARIANT_EASTER_PASTEL_BOW_GARLAND' => 'Easter — pastel bow garland',
	'HOLIDAY_VARIANT_EASTER_SPRING_GARLAND' => 'Easter — spring floral garland',
	'HOLIDAY_VARIANT_EASTER_GINGHAM_GARLAND' => 'Easter — gingham bow garland',
	'HOLIDAY_VARIANT_STPATRICK_HAT_CORNER' => 'St. Patrick’s Day — hat corner',
	'HOLIDAY_VARIANT_STPATRICK_HAT_GARLAND' => 'St. Patrick’s Day — hat garland',
	'HOLIDAY_VARIANT_STPATRICK_CLOVER_GARLAND' => 'St. Patrick’s Day — clover garland',
	'HOLIDAY_VARIANT_STPATRICK_CLOVER_CORNER' => 'St. Patrick’s Day — clover corner',
	'HOLIDAY_VARIANT_STPATRICK_CLOVER' => 'St. Patrick’s Day — four-leaf clover',

));
