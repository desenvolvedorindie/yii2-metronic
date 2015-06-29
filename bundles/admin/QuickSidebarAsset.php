<?php

namespace wfcreations\metronic\bundles\admin;

use yii\web\AssetBundle;

class QuickSidebarAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/admin/layout/';
    public $js = [
        'scripts/quick-sidebar.js',
    ];
    public $depends = [
        'wfcreations\metronic\bundles\CoreAsset',
    ];

}
