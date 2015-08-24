<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class CoreAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $depends = [
        'wfcreations\legacy\RespondAsset',
        'wfcreations\legacy\ExcanvasAsset',
        'wfcreations\legacy\HTML5ShivAsset',
        'wfcreations\metronic\bundles\FontAsset',
        'yii\web\JqueryAsset',
        'wfcreations\metronic\bundles\globalassets\plugins\JqueryBlockUIAsset',
        'wfcreations\metronic\bundles\globalassets\plugins\JqueySlimScroolAsset',
        //'wfcreations\metronic\bundles\globalassets\JqueryMigrateAsset',
        'yii\jui\JuiAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    public function init() {
        parent::init();
    }

}
