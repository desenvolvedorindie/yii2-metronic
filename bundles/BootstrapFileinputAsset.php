<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapFileinputAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $css = [
        'plugins/bootstrap-fileinput/bootstrap-fileinput.css',
    ];
    public $js = [
        'plugins/bootstrap-fileinput/bootstrap-fileinput.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
