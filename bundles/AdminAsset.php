<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class AdminAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/admin/layout/';
    public $css = [
        'css/layout.css',
        'css/themes/darkblue.css',
        'css/custom.css',
    ];
    public $js = [
        'scripts/layout.js',
        'scripts/quick-sidebar.js',
    ];
    public $depends = [
        'wfcreations\metronic\bundles\CoreAsset',
        'wfcreations\metronic\bundles\MetronicComponentsAsset',
        'wfcreations\metronic\bundles\MetronicPluginsAsset',
    ];

}
