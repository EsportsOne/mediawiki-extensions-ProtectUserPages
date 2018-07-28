<?php

class ProtectUserPages {

	static function saveHook( $editPage ) {
		global $wgUser;

		if ( in_array( 'sysop', $wgUser->getEffectiveGroups() )) {
			// sysops can always edit.
			return true;
		}
		if ($editPage->getTitle()->getNamespace() != NS_USER ) {
			// only protect NS_USER.
			return true;
		}

		$my_username = $wgUser->getName();
		$my_pagetitle = $editPage->getTitle()->getText();

		if (strcasecmp($my_username, $my_pagetitle) == 0) {
			// user is editing his/her own page -- allow.
			return true;
		}

		// otherwise, abort the edit.
		return false;

	}
}

# vim: ts=4 sw=4 noet