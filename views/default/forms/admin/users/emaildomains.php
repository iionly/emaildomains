<?php

$site = elgg_get_site_entity();
$emaildomains = $site->emaildomains;
$emaildomains_blocked = $site->emaildomains_blocked;

echo elgg_view_field([
	'#type' => 'text',
	'#label' => elgg_echo('emaildomains:allow'),
	'name' => 'emaildomains',
	'value' => $emaildomains,
]);

echo elgg_view_field([
	'#type' => 'text',
	'#label' => elgg_echo('emaildomains:deny'),
	'name' => 'emaildomains_blocked',
	'value' => $emaildomains_blocked,
]);

$footer = elgg_view_field([
	'#type' => 'submit',
	'value' => elgg_echo('save'),
]);

elgg_set_form_footer($footer);
