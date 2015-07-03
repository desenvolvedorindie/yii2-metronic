<?php

namespace wfcreations\metronic\bundles\admin;

use yii\web\AssetBundle;

class QuickSidebar2Asset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/admin/layout2/';
    public $js = [
        'scripts/quick-sidebar.js',
    ];
    public $depends = [
        'wfcreations\metronic\bundles\CoreAsset',
    ];

}
