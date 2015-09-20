<?php
/**
 * Elgg email domains
 *
 * @package ElggEmailDomains
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Curverider Ltd
 * @copyright Curverider Ltd 2008
 * @link http://elgg.com/
 *
 * Updated for Elgg 1.8 and newer by iionly
 * iionly@gmx.de
 */

$site = elgg_get_config('site');

$emaildomains = $site->emaildomains;
$emaildomains_blocked = $site->emaildomains_blocked;

echo "<p class='margin_top'>".elgg_echo('emaildomains:description')."</p>";

$b1desc = elgg_echo('emaildomains:allow');
$b2desc = elgg_echo('emaildomains:deny');

$box = elgg_view('input/text', array('value' => $emaildomains, 'name' => 'emaildomains'));
$box2 = elgg_view('input/text', array('value' => $emaildomains_blocked, 'name' => 'emaildomains_blocked'));
$button = elgg_view('input/submit', array('value' => elgg_echo('save')));

$form_body = <<< END
    <p><label>$b1desc $box</label></p>
    <p><label>$b2desc $box2</label></p> 
    $button
END;
echo elgg_view('input/form', array('body' => $form_body, 'action' => elgg_get_site_url() . "action/emaildomains/edit"));
