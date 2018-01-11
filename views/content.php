<?php
require_once '../browser-composer/BrowserComposer.php';

use tonisormisson\browsercomposer\BrowserComposer;


// needs COMPOSER_HOME environment variable set
$composer = new BrowserComposer();
?>

<?php include 'form.php';?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['composer-install'])) {
    $composer->doInstall = true;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['composer-install-dry'])) {
    $composer->doInstall = true;
    $composer->dryRun = true;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['composer-install-reset'])) {
    $composer->deleteCurrent = true;
}
?>
<pre id = "composer-installer-container"><?php $composer->run();?></pre>

