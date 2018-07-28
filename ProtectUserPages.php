<?php

$wgExtensionCredits['parserhook'][] = [
	'name' => 'ProtectUserPages',
	'url' => 'https://github.com/EsportsOne/mediawiki-extensions-ProtectUserPages',
	'version' => '1.0',
	'descriptionmsg' => 'pup-desc',
	'license-name' => 'GPL-2.0-or-later',
	'author' => [
		'[mailto:drobbins@funtoo.org Daniel Robbins]'
	],
];

$wgMessagesDirs['ProtectUserPages'] = __DIR__ . '/i18n';
$wgAutoloadClasses['ProtectUserPages'] = __DIR__ . '/ProtectUserPages.body.php';
$wgHooks['EditPage::attemptSave'][] = 'ProtectUserPages::saveHook';
