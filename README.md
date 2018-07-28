ProtectUserPages MediaWiki Extension
====================================

This simple MediaWiki extension protects pages in the NS_USER (User) namespace from being edited by anyone but their owner.
So for example, only "Joe" would be able to edit User:Joe. All other edits are silently ignored.

The one exception to this rule is that sysops are able to bypass this restriction.


Installation
------------

To install, perform the following steps:

    $ cd /mywiki/extensions
    $ git clone https://github.com/EsportsOne/mediawiki-extensions-ProtectUserPages ProtectUserPages

Then add the following to `LocalSettings.php`:

    ```php
    wfLoadExtension('ProtectUserPages');
    ```
    
Or, alternatively , if using MediaWiki earlier than 1.25:

    ```php
    require_once("$IP/extensions/ProtectUserPages/ProtectUserPages.php");
    ```
    
Enjoy!