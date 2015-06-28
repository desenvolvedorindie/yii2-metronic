<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class AdminThemeAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/admin/layout/';
    public $css = [
        'css/layout.css',
        'css/themes/default.css',
        'css/custom.css',
    ];
    public $js = [
        'scripts/layout.js',
        'scripts/quick-sidebar.js',
    ];
    public $depends = [
        'wfcreations\metronic\bundles\CoreAsset',
        'wfcreations\metronic\bundles\globalassets\ComponentsRoundedAsset',
        'wfcreations\metronic\bundles\globalassets\PluginsAsset',
    ];

}
