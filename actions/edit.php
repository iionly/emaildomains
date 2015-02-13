<?php
/**
 * Elgg email domains
 *
 * @package ElggEmailDomains
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Curverider Ltd
 * @copyright Curverider Ltd 2008-2013
 * @link http://elgg.com/
 *
 * Updated for Elgg 1.9 by iionly
 * iionly@gmx.de
 */

$emaildomains = sanitise_string(get_input('emaildomains'));
$emaildomains_blocked = sanitise_string(get_input('emaildomains_blocked'));

$site = elgg_get_config('site');
$site->emaildomains = $emaildomains;
$site->emaildomains_blocked = $emaildomains_blocked;

system_message(elgg_echo('emaildomains:save:success'));

forward(REFERER);
