<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class AdminTheme3Asset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/admin/layout3/';
    public $css = [
        'css/themes/default.css',
        'css/custom.css',
    ];
    public $depends = [
        'wfcreations\metronic\bundles\CoreAsset',
        'wfcreations\metronic\bundles\globalassets\MetronicAsset',
        'wfcreations\metronic\bundles\globalassets\ComponentsAsset',
        'wfcreations\metronic\bundles\globalassets\PluginsAsset',
        'wfcreations\metronic\bundles\admin\AdminLayout3Asset',
        'wfcreations\metronic\bundles\admin\QuickSidebarAsset',
    ];

}
