<?php

use Elgg\DefaultPluginBootstrap;

class EmaildomainsBootstrap extends DefaultPluginBootstrap {

	public function init() {
		elgg_register_menu_item('page', [
			'name' => 'users:emaildomains',
			'href' => 'admin/users/emaildomains',
			'text' => elgg_echo('admin:users:emaildomains'),
			'context' => 'admin',
			'parent_name' => 'users',
			'section' => 'administer'
		]);

		// Register a hook to validate email for new users
		elgg_register_plugin_hook_handler('registeruser:validate:email', 'all', 'emaildomains_validate_email', 999);
	}
}
