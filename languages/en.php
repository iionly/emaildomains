<?php
/**
 * Elgg email domains language pack.
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

return [
	'admin:users:emaildomains' => 'Emaildomains',
	'emaildomains:description' => 'If you like, you can only let people with certain email addresses register for your site ("Allow only" = Whitelist). For example, you could restrict the site to users with email addresses from yourcompany.com.

	Or you could deny the creation of accounts if certain email addresses are provided on registration ("Deny from" = Blacklist). For example, spammers might create accounts again and again with email addresses from a certain domain. By adding this email domain to the Blacklist you can stop them already on account creation.
	
	To create a Whitelist or Blacklist, enter the email domain (the part after the \'@\') in the corresponding input field below. To use more than one, separate them with commas.',

	'emaildomains:allow' => 'Allow only',
	'emaildomains:deny' => 'Deny from',

	'emaildomains:save:success' => 'Email domains saved.',
];