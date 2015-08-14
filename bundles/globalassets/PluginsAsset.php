<?php

namespace wfcreations\metronic\bundles\globalassets;

use wfcreations\metronic\bundles\GlobalAsset;

class PluginsAsset extends GlobalAsset {

    public $css = [
        'css/plugins.css',
    ];
    public $depends = [
        'wfcreations\metronic\bundles\CoreAsset',
    ];

}
