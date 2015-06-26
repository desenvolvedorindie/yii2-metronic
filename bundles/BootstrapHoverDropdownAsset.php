<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapHoverDropdownAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $js = [
        'plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
