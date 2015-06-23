<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapWYSIHTMLl5Asset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $css = [
        'global/plugins/bootstrap-wysihtml5/wysiwyg-color.css',
        'global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css',
    ];
    public $js = [
        'global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js',
        'global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
