<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapSummernoteAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $css = [
        'plugins/bootstrap-summernote/summernote.css',
    ];
    public $js = [
        'plugins/bootstrap-summernote/summernote.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
