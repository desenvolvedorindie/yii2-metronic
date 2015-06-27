<?php

namespace wfcreations\metronic\bundles\globalassets;

use yii\web\AssetBundle;

class BootstrapDatepaginatorAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $css = [
        'plugins/bootstrap-datepaginator/bootstrap-datepaginator.min.css',
    ];
    public $js = [
        'plugins/bootstrap-datepaginator/bootstrap-datepaginator.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
        'wfcreations\metronic\bundles\globalassets\BootstrapDatepickerAsset',
        'wfcreations\metronic\bundles\globalassets\MomentAsset',
    ];

}
