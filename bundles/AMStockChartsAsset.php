<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class AMStockChartsAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/';
    public $css = [
        'global/plugins/amcharts/ammap/ammap.css',
    ];
    public $js = [
        'global/plugins/amcharts/ammap/exporting/amexport.js',
        'global/plugins/amcharts/ammap/exporting/canvg.js',
        'global/plugins/amcharts/ammap/exporting/filesaver.js',
        'global/plugins/amcharts/ammap/exporting/jspdf.js',
        'global/plugins/amcharts/ammap/exporting/jspdf.plugin.addimage.js',
        'global/plugins/amcharts/ammap/exporting/rgbcolor.js',
        'global/plugins/amcharts/ammap/ammap.js',
        'global/plugins/amcharts/ammap/ammap_amcharts_extension.js',
    ];

}
