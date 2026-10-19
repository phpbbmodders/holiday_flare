<?php
/**
 * Bundled decorations and their supported header placement.
 * @license GNU General Public License, version 2 (GPL-2.0)
 */

namespace phpbbmodders\holidayflare;

class decoration_catalog
{
	/** Return the bundled image allowlist, keyed by stable selection IDs. */
	public static function all()
	{
		return array(
			'xmas' => array('image' => 'xmas.png', 'label' => 'HOLIDAY_VARIANT_XMAS', 'position' => 'corner', 'placements' => array('corner')),
			'valentine' => array('image' => 'valentine.png', 'label' => 'HOLIDAY_VARIANT_VALENTINE', 'position' => 'corner', 'placements' => array('corner', 'center')),
			'newyear' => array('image' => 'newyear.png', 'label' => 'HOLIDAY_VARIANT_NEWYEAR', 'position' => 'corner', 'placements' => array('corner', 'center')),
			'newyear_midnight' => array('image' => 'newyear-midnight.png', 'label' => 'HOLIDAY_VARIANT_NEWYEAR_MIDNIGHT', 'position' => 'center', 'placements' => array('center_top', 'center_bottom', 'center')),
			'patriotic_fireworks' => array('image' => 'patriotic-fireworks.png', 'label' => 'HOLIDAY_VARIANT_PATRIOTIC_FIREWORKS', 'position' => 'center', 'placements' => array('center_top', 'center_bottom', 'center')),
			'halloween_autumn_pumpkin' => array('image' => 'halloween-autumn-pumpkin.png', 'label' => 'HOLIDAY_VARIANT_HALLOWEEN_AUTUMN_PUMPKIN', 'position' => 'corner', 'placements' => array('corner', 'center', 'forum')),
			'halloween_glowing_pumpkin' => array('image' => 'halloween-glowing-pumpkin.png', 'label' => 'HOLIDAY_VARIANT_HALLOWEEN_GLOWING_PUMPKIN', 'position' => 'corner', 'placements' => array('corner', 'center', 'forum')),
			'christmas_ornament_corner' => array('image' => 'christmas-ornament-corner.png', 'label' => 'HOLIDAY_VARIANT_CHRISTMAS_ORNAMENT_CORNER', 'position' => 'corner', 'placements' => array('corner')),
			'christmas_evergreen_corner' => array('image' => 'christmas-evergreen-corner.png', 'label' => 'HOLIDAY_VARIANT_CHRISTMAS_EVERGREEN_CORNER', 'position' => 'corner', 'placements' => array('corner')),
			'christmas_santa_ornaments' => array('image' => 'christmas-santa-ornaments.png', 'label' => 'HOLIDAY_VARIANT_CHRISTMAS_SANTA_ORNAMENTS', 'position' => 'corner', 'placements' => array('corner', 'center')),
			'christmas_bells_corner' => array('image' => 'christmas-bells-corner.png', 'label' => 'HOLIDAY_VARIANT_CHRISTMAS_BELLS_CORNER', 'position' => 'corner', 'placements' => array('corner')),
			'halloween_pumpkin_01' => array('image' => 'halloween-pumpkin-01.png', 'label' => 'HOLIDAY_VARIANT_HALLOWEEN_PUMPKIN_01', 'position' => 'corner', 'placements' => array('corner', 'center', 'forum')),
			'halloween_pumpkin_02' => array('image' => 'halloween-pumpkin-02.png', 'label' => 'HOLIDAY_VARIANT_HALLOWEEN_PUMPKIN_02', 'position' => 'corner', 'placements' => array('corner', 'center', 'forum')),
			'halloween_pumpkin_03' => array('image' => 'halloween-pumpkin-03.png', 'label' => 'HOLIDAY_VARIANT_HALLOWEEN_PUMPKIN_03', 'position' => 'corner', 'placements' => array('corner', 'center', 'forum')),
			'halloween_pumpkin_04' => array('image' => 'halloween-pumpkin-04.png', 'label' => 'HOLIDAY_VARIANT_HALLOWEEN_PUMPKIN_04', 'position' => 'corner', 'placements' => array('corner', 'center', 'forum')),
			'halloween_pumpkin_05' => array('image' => 'halloween-pumpkin-05.png', 'label' => 'HOLIDAY_VARIANT_HALLOWEEN_PUMPKIN_05', 'position' => 'corner', 'placements' => array('corner', 'center', 'forum')),
			'halloween_pumpkin_06' => array('image' => 'halloween-pumpkin-06.png', 'label' => 'HOLIDAY_VARIANT_HALLOWEEN_PUMPKIN_06', 'position' => 'corner', 'placements' => array('corner', 'center', 'forum')),
			'halloween_pumpkin_07' => array('image' => 'halloween-pumpkin-07.png', 'label' => 'HOLIDAY_VARIANT_HALLOWEEN_PUMPKIN_07', 'position' => 'corner', 'placements' => array('corner', 'center', 'forum')),
			'halloween_pumpkin_08' => array('image' => 'halloween-pumpkin-08.png', 'label' => 'HOLIDAY_VARIANT_HALLOWEEN_PUMPKIN_08', 'position' => 'corner', 'placements' => array('corner', 'center', 'forum')),
			'christmas_garland' => array('image' => 'christmas-garland.png', 'label' => 'HOLIDAY_VARIANT_CHRISTMAS_GARLAND', 'position' => 'corner', 'placements' => array('corner')),
			'easter_bunny_bouquet_corner' => array('image' => 'easter-bunny-bouquet-corner.png', 'label' => 'HOLIDAY_VARIANT_EASTER_BUNNY_BOUQUET_CORNER', 'position' => 'corner', 'placements' => array('corner')),
			'easter_bunny_garden_corner' => array('image' => 'easter-bunny-garden-corner.png', 'label' => 'HOLIDAY_VARIANT_EASTER_BUNNY_GARDEN_CORNER', 'position' => 'corner', 'placements' => array('corner')),
			'easter_bunny_floral_corner' => array('image' => 'easter-bunny-floral-corner.png', 'label' => 'HOLIDAY_VARIANT_EASTER_BUNNY_FLORAL_CORNER', 'position' => 'corner', 'placements' => array('corner')),
			'easter_bunny_spring_corner' => array('image' => 'easter-bunny-spring-corner.png', 'label' => 'HOLIDAY_VARIANT_EASTER_BUNNY_SPRING_CORNER', 'position' => 'corner', 'placements' => array('corner')),
			'easter_pastel_bow_garland' => array('image' => 'easter-pastel-bow-garland.png', 'label' => 'HOLIDAY_VARIANT_EASTER_PASTEL_BOW_GARLAND', 'position' => 'center_top', 'placements' => array('center_top', 'center_bottom')),
			'easter_spring_garland' => array('image' => 'easter-spring-garland.png', 'label' => 'HOLIDAY_VARIANT_EASTER_SPRING_GARLAND', 'position' => 'center_top', 'placements' => array('center_top', 'center_bottom')),
			'easter_gingham_garland' => array('image' => 'easter-gingham-garland.png', 'label' => 'HOLIDAY_VARIANT_EASTER_GINGHAM_GARLAND', 'position' => 'center_top', 'placements' => array('center_top', 'center_bottom')),
			'stpatrick_hat_corner' => array('image' => 'stpatrick-hat-corner.png', 'label' => 'HOLIDAY_VARIANT_STPATRICK_HAT_CORNER', 'position' => 'corner', 'placements' => array('corner')),
			'stpatrick_hat_garland' => array('image' => 'stpatrick-hat-garland.png', 'label' => 'HOLIDAY_VARIANT_STPATRICK_HAT_GARLAND', 'position' => 'center_top', 'placements' => array('center_top', 'center_bottom')),
			'stpatrick_clover_garland' => array('image' => 'stpatrick-clover-garland.png', 'label' => 'HOLIDAY_VARIANT_STPATRICK_CLOVER_GARLAND', 'position' => 'center_top', 'placements' => array('center_top', 'center_bottom')),
			'stpatrick_clover_corner' => array('image' => 'stpatrick-clover-corner.png', 'label' => 'HOLIDAY_VARIANT_STPATRICK_CLOVER_CORNER', 'position' => 'corner', 'placements' => array('corner')),
			'stpatrick_clover' => array('image' => 'stpatrick-clover.png', 'label' => 'HOLIDAY_VARIANT_STPATRICK_CLOVER', 'position' => 'corner', 'placements' => array('corner', 'center', 'forum')),
		);
	}

	/** Holiday groups displayed in the ACP. */
	public static function holidays()
	{
		return array('christmas', 'valentine', 'newyear', 'halloween', 'independence', 'easter', 'stpatrick');
	}

	/** Stable placement keys shared by the ACP, validation and renderer. */
	public static function positions()
	{
		return array('corner', 'center_top', 'center_bottom', 'center', 'forum');
	}

	/** Return the holiday group for a bundled decoration. */
	public static function holiday($id)
	{
		if ($id === 'xmas' || $id === 'xmas_mini' || strpos($id, 'christmas_') === 0)
		{
			return 'christmas';
		}
		if (strpos($id, 'halloween_') === 0)
		{
			return 'halloween';
		}
		if (strpos($id, 'newyear') === 0)
		{
			return 'newyear';
		}
		if (strpos($id, 'easter_') === 0)
		{
			return 'easter';
		}
		if (strpos($id, 'stpatrick_') === 0)
		{
			return 'stpatrick';
		}
		return $id === 'valentine' ? 'valentine' : 'independence';
	}

	/** Offer only artwork curated for the requested placement. */
	public static function for_position($position)
	{
		$items = array();
		if ($position === 'forum')
		{
			$items['xmas_mini'] = array('image' => 'xmas_mini.png', 'label' => 'HOLIDAY_VARIANT_XMAS_MINI');
		}
		foreach (self::all() as $id => $item)
		{
			if (in_array($position, $item['placements'], true))
			{
				$items[$id] = $item;
			}
		}
		return $items;
	}

	/** Validate a selection for one placement; an empty ID means None. */
	public static function valid($position, $id)
	{
		$items = self::for_position($position);
		return in_array($position, self::positions(), true) && ($id === '' || isset($items[$id]));
	}
}
