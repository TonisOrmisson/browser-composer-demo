<?php
require_once '../browser-composer/BrowserComposer.php';

use tonisormisson\browsercomposer\BrowserComposer;


// needs COMPOSER_HOME environment variable set
$composer = new BrowserComposer();

$json = file_get_contents ('../composer.json');
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

<div class="container content">

    <div class="row">
        <div class="col">
            <h1>Browser-composer demo            <span class="float-right">
                <a href="https://github.com/TonisOrmisson/browser-composer-demo" class="btn btn-primary">Demo source</a>
                <a href="https://github.com/TonisOrmisson/browser-composer" class="btn btn-primary">Source</a>
            </span>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php include 'form.php';?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <pre id = "composer-installer-container"><?php $composer->run();?></pre>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h4 class="card-title">The "require" section from composer.json:</h4>
            <div class="card">
                <div class="card-block bg-inverse text-white" >
                    <pre class=" text-white">
"require": {
    "php": ">=5.4.0",
    "yiisoft/yii":"~1.1.19",
    "andmemasin/yii2-emails-validator":"dev-master",
    "twig/twig":"2.4.4",
    "html2text/html2text": "~4.1.0",
    "szymach/c-pchart":"~3.0.5",
    "tecnickcom/tcpdf":"~6.2.13",
    "mso/idna-convert":"~1.1.0",
    "pclzip/pclzip":"~2.8.2",
    "codeception/codeception":"dev-master"
},</pre>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
</div>
