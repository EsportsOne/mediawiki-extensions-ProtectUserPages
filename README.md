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

License
-------

Copyright 2018 Esports One.

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.