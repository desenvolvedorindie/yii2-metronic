<?php

namespace wfcreations\metronic\bundles\globalassets;

use wfcreations\metronic\bundles\GlobalAsset;

class ComponentsRoundedAsset extends GlobalAsset {

    public $css = [
        'css/components-rounded.css',
    ];
    public $depends = [
        'wfcreations\metronic\bundles\CoreAsset',
    ];

}
