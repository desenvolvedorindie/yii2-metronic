<?php

namespace wfcreations\metronic\bundles\globalassets;

use wfcreations\metronic\bundles\GlobalAsset;

class ComponentsAsset extends GlobalAsset {

    public $css = [
        'css/components.css',
    ];
    public $depends = [
        'wfcreations\metronic\bundles\CoreAsset',
    ];

}
