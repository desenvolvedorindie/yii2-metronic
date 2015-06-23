<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class NotificationAsset extends AssetBundle {

    public $sourcePath = '@dlds/metronic/assets';
    public $js = [
        'global/plugins/bootstrap-toastr/toastr.min.js',
    ];
    public $css = [
        'global/plugins/bootstrap-toastr/toastr.min.css',
    ];
    public $depends = [
        'dlds\metronic\bundles\CoreAsset',
    ];

}
