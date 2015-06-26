<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapGtreetableAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $css = [
        'plugins/bootstrap-gtreetable/bootstrap-gtreetable.min.css',
    ];
    public $js = [
        'plugins/bootstrap-gtreetable/bootstrap-gtreetable.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
