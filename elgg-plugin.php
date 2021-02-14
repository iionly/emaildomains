<?php

require_once(dirname(__FILE__) . '/lib/hooks.php');

return [
	'bootstrap' => \EmaildomainsBootstrap::class,
	'actions' => [
		'emaildomains/edit' => [
			'access' => 'admin',
		],
	],
];
