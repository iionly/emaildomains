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

$emaildomains = sanitize_string(get_input('emaildomains', ''));
$emaildomains_blocked = sanitize_string(get_input('emaildomains_blocked', ''));

$site = elgg_get_config('site');
$site->emaildomains = $emaildomains;
$site->emaildomains_blocked = $emaildomains_blocked;

return elgg_ok_response('', elgg_echo('emaildomains:save:success'), REFERER);
