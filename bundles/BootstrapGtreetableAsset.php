<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapGtreetableAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/';
    public $css = [
        'global/plugins/bootstrap-gtreetable/bootstrap-gtreetable.min.css',
    ];
    public $js = [
        'global/plugins/bootstrap-gtreetable/bootstrap-gtreetable.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
