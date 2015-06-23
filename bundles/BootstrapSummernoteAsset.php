<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapSummernoteAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $css = [
        'global/plugins/bootstrap-summernote/summernote.css',
    ];
    public $js = [
        'global/plugins/bootstrap-summernote/summernote.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
