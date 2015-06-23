<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapFileinputAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/';
    public $css = [
        'global/plugins/bootstrap-fileinput/bootstrap-fileinput.css',
    ];
    public $js = [
        'global/plugins/bootstrap-fileinput/bootstrap-fileinput.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
