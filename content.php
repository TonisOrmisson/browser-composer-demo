<?php
require_once 'browser-composer/BrowserComposer.php';

use tonisormisson\browsercomposer\BrowserComposer;

//
// Run composer with a PHP script in browser
//
// http://stackoverflow.com/questions/17219436/run-composer-with-a-php-script-in-browser



// needs COMPOSER_HOME environment variable set
putenv('COMPOSER_HOME=' . __DIR__ . '/vendor/bin/composer');
// Improve performance when the xdebug extension is enabled
putenv('COMPOSER_DISABLE_XDEBUG_WARN=1');
$composer = new BrowserComposer();
?>
<pre id = "composer-installer-container"><?php $composer->run();?></pre>

