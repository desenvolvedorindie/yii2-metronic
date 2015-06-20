<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapHoverDropdownAsset extends AssetBundle {

    public $sourcePath = '@wfcretions/metronic/assets';
    public $js = [
        'global/plugins/bootstrap-datepicker-extended/js/bootstrap-datepicker.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
