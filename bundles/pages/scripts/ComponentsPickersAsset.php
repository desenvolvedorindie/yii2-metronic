<?php

namespace wfcreations\metronic\bundles\pages\scripts;

use yii\web\AssetBundle;

class ComponentsPickersAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/admin/pages/';
    public $js = [
        'scripts/components-pickers.js',
    ];
    public $depends = [
        'dosamigos\datepicker\DatePickerAsset',
    ];

}
