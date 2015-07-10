<?php

/**
 * @copyright Copyright (c) 2012 - 2015 SHENL.COM
 * @license http://www.shenl.com/license/
 */

namespace hustshenl\metronic\widgets;

use yii\helpers\Html;
use yii\widgets\InputWidget;

/**
 * TextInputWidget renders text input widget.
 *
 * An input widget can be associated with a data model and an attribute,
 * or a name and a value. If the former, the name and the value will
 * be generated automatically.
 */
class TextInputWidget extends InputWidget {

    /**
     * Executes the widget.
     */
    public function run() {
        if ($this->hasModel()) {
            echo Html::activeTextInput($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textInput($this->name, $this->value, $this->options);
        }
    }

}
