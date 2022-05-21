<?php

return [
	'plugin' => [
		'name' => 'Emaildomains',
		'version' => '4.0.0',
	],
	'hooks' => [
		'register' => [
			'menu:page' => [
				'\EmaildomainsHooks::EmaildomainsAdministerUsers' => [],
			],
		],
		'registeruser:validate:email' => [
			'all' => [
				'\EmaildomainsHooks::emaildomains_validate_email' => [
					'priority' => 999,
				],
			],
		],
	],
	'actions' => [
		'emaildomains/edit' => [
			'access' => 'admin',
		],
	],
];
