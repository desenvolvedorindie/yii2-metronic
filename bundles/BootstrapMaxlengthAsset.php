<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapMarkdownAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $js = [
        'global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
