<?php

return [
	'admin:users:emaildomains' => 'Emaildomains',
	'emaildomains:description' => 'Wenn Du willst, kannst Du die Registrierung von Accounts auf Deiner Community-Seite auf Leute mit bestimmten Email-Adressen beschränken ("Erlauben von" = Whitelist). Beispielsweise könntest Du die Seite auf Benutzer mit Email-Adressen von deinefirma.com limitieren.

	Im umgekehrten Fall kannst Du die Registrierung von Accounts unter Verwendung bestimmter Email-Adressen verbieten ("Verweigern von" = Blacklist). Beispielsweise könnten Spammer wieder und wieder Accounts unter Verwendung der immergleichen Emaildomäne erstellen. Wenn Du diese Domäne auf die Blacklist setzt, werden die Spammer schon bei dem Versuch, einen Account zu erstellen, gestoppt.

	Um eine Whitelist oder Blacklist von erlaubten oder unerlaubten Email-Adressen zu erstellen, gebe im Folgenden in das jeweilige Eingabefeld die entsprechende Emaildomäne ein (der Teil nach dem \'@\'). Wenn Du mehr als eine Domäne eingeben willst, trenne die Einträge mit Kommas.',

	'emaildomains:allow' => 'Erlauben von',
	'emaildomains:deny' => 'Verweigern von',

	'emaildomains:save:success' => 'Die Emaildomänen wurden gespeichert.',
];