<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class JQVMAPAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $js = [
        'global/plugins/jqvmap/jqvmap/jquery.vmap.js',
        'global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js',
        'global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js',
        'global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js',
        'global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js',
        'global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js',
        'global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js',
    ];
    public $css = [
        'global/plugins/jqvmap/jqvmap/jqvmap.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
