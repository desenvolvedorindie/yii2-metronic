<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class CoreAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/dist/';
    public $js = [
        'js/init.js'
    ];
    public $depends = [
        'wfcreations\legacy\RespondAsset',
        'wfcreations\legacy\ExcanvasAsset',
        'wfcreations\legacy\HTML5ShivAsset',
        'wfcreations\metronic\bundles\FontAsset',
        'yii\web\JqueryAsset',
        //'wfcreations\metronic\bundles\globalassets\JqueryMigrateAsset',
        'yii\jui\JuiAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    public function init() {
        parent::init();
    }

}
