<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class CoreAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $js = [
        'global/plugins/jquery-migrate.min.js',
    ];
    public $depends = [
        'wfcreations\metronic\bundles\LegacyAsset',
        'wfcreations\metronic\bundles\FontAsset',
        'wfcreations\metronic\bundles\JuiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
    ];
}
