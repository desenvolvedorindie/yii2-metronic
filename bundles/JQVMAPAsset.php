<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class JQVMAPAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $js = [
        'plugins/jqvmap/jqvmap/jquery.vmap.js',
        'plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js',
        'plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js',
        'plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js',
        'plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js',
        'plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js',
        'plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js',
    ];
    public $css = [
        'plugins/jqvmap/jqvmap/jqvmap.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
