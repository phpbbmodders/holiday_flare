<?php
/**
 * Run with: php tools/check-decoration-catalog.php
 * Checks placement boundaries and bundled assets without a running board.
 * @license GNU General Public License, version 2 (GPL-2.0)
 */

require __DIR__ . '/../decoration_catalog.php';

use phpbbmodders\holidayflare\decoration_catalog;

$check = function($condition, $message)
{
	if (!$condition)
	{
		throw new RuntimeException($message);
	}
};

$check(decoration_catalog::valid('corner', ''), 'Corner must support None');
$check(decoration_catalog::valid('center', ''), 'Center must support None');
$check(decoration_catalog::valid('forum', ''), 'Forum must support None');
$check(decoration_catalog::valid('forum', 'xmas_mini'), 'Forum hats missing');
$check(decoration_catalog::valid('forum', 'halloween_glowing_pumpkin'), 'Forum pumpkin missing');
$check(!decoration_catalog::valid('forum', 'christmas_garland'), 'Garland accepted as forum icon');
$check(!decoration_catalog::valid('corner', 'xmas_mini'), 'Forum hat accepted in corner');
$check(!decoration_catalog::valid('other', ''), 'Unknown placement accepted');
$check(!decoration_catalog::valid('corner', '../newyear.png'), 'Path accepted');
$check(!decoration_catalog::valid('center', 'unknown'), 'Unknown ID accepted');

foreach (decoration_catalog::all() as $id => $item)
{
	$check(decoration_catalog::valid($item['position'], $id), 'Valid choice rejected: ' . $id);
	foreach (decoration_catalog::positions() as $position)
	{
		$expected = in_array($position, $item['placements'], true);
		$check(decoration_catalog::valid($position, $id) === $expected, 'Placement policy mismatch: ' . $id);
	}
	$check(in_array(decoration_catalog::holiday($id), decoration_catalog::holidays(), true), 'Missing holiday group: ' . $id);
	$check(is_file(__DIR__ . '/../styles/prosilver/theme/images/' . $item['image']), 'Missing image: ' . $id);
}

foreach (array('xmas', 'valentine', 'newyear') as $id)
{
	$check(decoration_catalog::valid('corner', $id), 'Legacy choice lost: ' . $id);
}

$check(!decoration_catalog::valid('center', 'xmas'), 'Santa hat offered in center');
$check(!decoration_catalog::valid('center_top', 'christmas_bells_corner'), 'Corner greenery offered at top');
$check(decoration_catalog::valid('corner', 'christmas_garland'), 'Ribbon corner missing');
$check(!decoration_catalog::valid('center_top', 'christmas_garland'), 'Ribbon corner offered at top');
$check(!decoration_catalog::valid('center_bottom', 'christmas_garland'), 'Ribbon corner offered at bottom');
$check(!decoration_catalog::valid('center_top', 'halloween_glowing_pumpkin'), 'Pumpkin offered at top');

echo "Decoration catalogue checks passed.\n";
