<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class AMMapAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $css = [
        'amcharts/ammap/style.css',
    ];
    public $js = [
        'amcharts/ammap/exporting/amexport.js',
        'amcharts/ammap/exporting/canvg.js',
        'amcharts/ammap/exporting/filesaver.js',
        'amcharts/ammap/exporting/jspdf.js',
        'amcharts/ammap/exporting/jspdf.plugin.addimage.js',
        'amcharts/ammap/exporting/rgbcolor.js',
        'amcharts/ammap/ammap.js',
        'amcharts/ammap/ammap_amcharts_extension.js',
    ];

}
