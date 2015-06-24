<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class FontAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all',
    ];
    public $js = [
    ];
    public $depends = [
    ];
    public $cssOptions = [
        'type' => 'text/css',
    ];

}
