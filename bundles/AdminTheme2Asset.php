<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class AdminTheme2Asset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/admin/layout2/';
    public $css = [
        'css/themes/default.css',
        'css/custom.css',
    ];
    public $depends = [
        'wfcreations\metronic\bundles\CoreAsset',
        'wfcreations\metronic\bundles\globalassets\MetronicAsset',
        'wfcreations\metronic\bundles\globalassets\ComponentsAsset',
        'wfcreations\metronic\bundles\globalassets\PluginsAsset',
        'wfcreations\metronic\bundles\admin\AdminLayout2Asset',
        'wfcreations\metronic\bundles\admin\QuickSidebarAsset',
        'wfcreations\metronic\bundles\InitAsset',
    ];

}
