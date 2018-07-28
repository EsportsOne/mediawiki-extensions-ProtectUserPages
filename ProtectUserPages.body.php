<?php

class ProtectUserPages {

	static function saveHook( $editPage ) {
		global $wgContLang, $wgUser;

		if ($editPage->getTitle()->getNamespace() != NS_USER ) {
		    return true;
        }

        $my_username = $wgUser->getName();

		$my_pagetitle = $editPage->getText();

		if (strcasecmp($my_username, $my_pagetitle) == 0) {
		    return false;
        }

        return true;

	}
}
