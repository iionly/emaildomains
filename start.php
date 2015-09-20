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

elgg_register_event_handler('init','system','emaildomains_init');

/**
 * Initialise the emaildomains tool
 *
 */
function emaildomains_init(){

	// Register some actions
	elgg_register_action("emaildomains/edit", elgg_get_plugins_path() . "emaildomains/actions/edit.php", "admin");

	// Register a hook to validate email for new users
	elgg_register_plugin_hook_handler('registeruser:validate:email', 'all', 'emaildomains_validate_email', 999);

	elgg_register_admin_menu_item('administer', 'emaildomains', 'users');
}


/**
 * Validate email address against email domains.
 *
 * @param unknown_type $hook
 * @param unknown_type $entity_type
 * @param unknown_type $returnvalue
 * @param unknown_type $params
 */
function emaildomains_validate_email($hook, $entity_type, $returnvalue, $params){

	$site = elgg_get_config('site');
	$email = $params['email'];

	if (($site) && (($site->emaildomains) || ($site->emaildomains_blocked))) {
		// Check whether an address is banned
		if ($site->emaildomains_blocked) {

			$domains_blocked = explode(',', $site->emaildomains_blocked);

			foreach ($domains_blocked as $domain) {
				$domain = trim($domain);

				if (stripos($email, $domain) !== false) {
					return false;
				}
			}
		}

		// Check whether an address is permitted
		if ($site->emaildomains) {

			$domains = explode(',', $site->emaildomains);

			foreach ($domains as $domain) {
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
}
