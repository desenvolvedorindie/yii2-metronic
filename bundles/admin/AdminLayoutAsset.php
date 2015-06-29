<?php

namespace wfcreations\metronic\bundles\admin;

use yii\web\AssetBundle;

class AdminLayoutAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/admin/layout/';
    public $css = [
        'css/layout.css',
    ];
    public $js = [
        'scripts/layout.js',
    ];
    public $depends = [
        'wfcreations\metronic\bundles\CoreAsset',
        'wfcreations\metronic\bundles\globalassets\ComponentsRoundedAsset',
        'wfcreations\metronic\bundles\globalassets\PluginsAsset',
    ];

}
