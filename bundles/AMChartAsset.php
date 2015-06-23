<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class AMChartAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/';
    public $js = [
        'global/plugins/amcharts/amcharts/exporting/amexport.js',
        'global/plugins/amcharts/amcharts/exporting/canvg.js',
        'global/plugins/amcharts/amcharts/exporting/filesaver.js',
        'global/plugins/amcharts/amcharts/exporting/jspdf.js',
        'global/plugins/amcharts/amcharts/exporting/jspdf.plugin.addimage.js',
        'global/plugins/amcharts/amcharts/exporting/rgbcolor.js',
        'global/plugins/amcharts/amcharts/amcharts.js',
        'global/plugins/amcharts/amcharts/funnel.js',
        'global/plugins/amcharts/amcharts/gauge.js',
        'global/plugins/amcharts/amcharts/pie.js',
        'global/plugins/amcharts/amcharts/radar.js',
        'global/plugins/amcharts/amcharts/serial.js',
        'global/plugins/amcharts/amcharts/xy.js',
    ];

}
