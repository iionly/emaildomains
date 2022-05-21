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

class EmaildomainsHooks {

	/**
	 * Add a menu item to the page menu
	 *
	 * @param \Elgg\Hook $hook 'register', 'menu:page'
	 *
	 * @return void|MenuItems
	 */
	public static function EmaildomainsAdministerUsers(\Elgg\Hook $hook) {
		$return_value = $hook->getValue();
		$return_value[] = \ElggMenuItem::factory([
			'name' => 'users:emaildomains',
			'text' => elgg_echo('admin:users:emaildomains'),
			'href' => 'admin/users/emaildomains',
			'context' => 'admin',
			'parent_name' => 'users',
			'section' => 'administer'
		]);
		
		return $return_value;
	}

	/**
	* Validate email address against email domains.
	*
	* @param \Elgg\Hook $hook Hook
	* @return bool
	*/
	function emaildomains_validate_email(\Elgg\Hook $hook) {
		$site = elgg_get_config('site');
		$email = $hook->getParam('email', false);

		if (($site) && $email && (($site->emaildomains) || ($site->emaildomains_blocked))) {
			// Check whether an address is banned
			if ($site->emaildomains_blocked) {

				$domains_blocked = explode(',', $site->emaildomains_blocked);

				foreach($domains_blocked as $domain) {
					$domain = trim($domain);

					if (stripos($email, $domain) !== false) {
						return false;
					}
				}
			}

			// Check whether an address is permitted
			if ($site->emaildomains) {

				$domains = explode(',', $site->emaildomains);

				foreach($domains as $domain) {
					$domain = trim($domain);

					if (stripos($email, $domain) !== false) {
						return true;
					}
				}
			}

			// We got here so we need to check the logic
			// If no emaildomains have been provided, then we actually want to return true - since we want to allow for
			// allow from all except denied domains
			if (strcmp(trim($site->emaildomains),"") == 0) {
				return true;
			}

			return false;
		}

		return $hook->getValue();
	}
}