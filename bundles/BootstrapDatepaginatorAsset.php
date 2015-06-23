<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapDatepaginatorAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/';
    public $css = [
        'global/plugins/bootstrap-datepaginator/bootstrap-datepaginator.min.css',
    ];
    public $js = [
        'global/plugins/bootstrap-datepaginator/bootstrap-datepaginator.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
        'wfcreations\metronic\bundles\BootstrapDatepickerAsset',
        'wfcreations\metronic\bundles\MomentAsset',
    ];

}
