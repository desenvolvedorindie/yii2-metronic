<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class AdminAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $css = [
        'admin/layout/css/layout.css',
        'admin/layout/css/themes/darkblue.css',
        'admin/layout/css/custom.css',
    ];
    public $js = [
        'admin/layout/scripts/layout.js',
        'admin/layout/scripts/quick-sidebar.js',
    ];
    public $depends = [
        'wfcreations\metronic\bundles\CoreAsset',
        'wfcreations\metronic\bundles\MetronicComponentsAsset',
        'wfcreations\metronic\bundles\MetronicPluginsAsset',
    ];

}
