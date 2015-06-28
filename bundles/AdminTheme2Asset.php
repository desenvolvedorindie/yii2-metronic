<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class AdminTheme2Asset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/admin/layout2/';
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
        'wfcreations\metronic\bundles\globalassets\ComponentsAsset',
        'wfcreations\metronic\bundles\globalassets\PluginsAsset',
    ];

}
