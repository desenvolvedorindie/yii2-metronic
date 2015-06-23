<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class AMMapAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/';
    public $css = [
        'style.css',
    ];
    public $js = [
        'global/plugins/amcharts/amstockcharts/exporting/amexport.js',
        'global/plugins/amcharts/amstockcharts/exporting/canvg.js',
        'global/plugins/amcharts/amstockcharts/exporting/filesaver.js',
        'global/plugins/amcharts/amstockcharts/exporting/jspdf.js',
        'global/plugins/amcharts/amstockcharts/exporting/jspdf.plugin.addimage.js',
        'global/plugins/amcharts/amstockcharts/exporting/rgbcolor.js',
        'global/plugins/amcharts/amstockcharts/amcharts.js',
        'global/plugins/amcharts/amstockcharts/amstock.js',
        'global/plugins/amcharts/amstockcharts/serial.js',
    ];

}
