<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapMarkdownAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $css = [
        'global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css',
    ];
    public $js = [
        'global/plugins/bootstrap-markdown/lib/markdown.js',
        'global/plugins/bootstrap-markdown/js/bootstrap-markdown.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
