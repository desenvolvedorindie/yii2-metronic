<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class BootstrapWizardAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $js = [
        'global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
