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

echo elgg_autop(elgg_echo('emaildomains:description'));

$form_vars = [
	'action' => 'action/emaildomains/edit',
	'class' => 'elgg-form-settings',
];

echo elgg_view_form('admin/users/emaildomains', $form_vars);
