<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapWYSIHTMLl5Asset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $css = [
        'plugins/bootstrap-wysihtml5/wysiwyg-color.css',
        'plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css',
    ];
    public $js = [
        'plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js',
        'plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
