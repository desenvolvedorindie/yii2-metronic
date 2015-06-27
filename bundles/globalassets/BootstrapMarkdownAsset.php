<?php

namespace wfcreations\metronic\bundles\globalassets;

use yii\web\AssetBundle;

class BootstrapMarkdownAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $css = [
        'plugins/bootstrap-markdown/css/bootstrap-markdown.min.css',
    ];
    public $js = [
        'plugins/bootstrap-markdown/lib/markdown.js',
        'plugins/bootstrap-markdown/js/bootstrap-markdown.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
