<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapHoverDropdownAsset extends AssetBundle {

    public $sourcePath = '@bower/bootstrap-hover-dropdown';
    public $js = [
        'bootstrap-hover-dropdown.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
