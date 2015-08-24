Yii2-Metronic (in development)
======================

[![Latest Stable Version](https://poser.pugx.org/wfcreations/yii2-metronic/v/stable)](https://packagist.org/packages/wfcreations/yii2-metronic) [![Total Downloads](https://poser.pugx.org/wfcreations/yii2-metronic/downloads)](https://packagist.org/packages/wfcreations/yii2-metronic) [![Latest Unstable Version](https://poser.pugx.org/wfcreations/yii2-metronic/v/unstable)](https://packagist.org/packages/wfcreations/yii2-metronic) [![License](https://poser.pugx.org/wfcreations/yii2-metronic/license)](https://packagist.org/packages/wfcreations/yii2-metronic)

Forked from [Yii2-Metronic](https://github.com/hustshenl/yii2-metronic)

Yii2Metronic is a collection of Yii2 components(widgets) based on responsive and multipurpose admin theme
called [Metronic](http://www.keenthemes.com/preview/index.php?theme=metronic) (v4.0). Powered with [Twitter Bootstrap](http://getbootstrap.com/) v3.3.5 Framework.

Metronic can be used for any type of web applications: custom admin panels, admin dashboards, CMS, CRM, SAAS and websites: business, corporate, portfolio, blog.
Metronic has a sleek, clean and intuitive metro style design which makes your next project look awesome and yet user
friendly. Metronic has a huge collection of plugins and UI components and works seamlessly on all major web browsers,
tablets and phones.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/). Check the [composer.json](https://github.com/wfcreations/yii2-metronic/blob/master/composer.json) for this extension's requirements and dependencies. Read this [web tip /wiki](http://webtips.krajee.com/setting-composer-minimum-stability-application/) on setting the `minimum-stability` settings for your application's composer.json.

To install, either run

```
$ composer require wfcreations/yii2-metronic
```

or add

```
"wfcreations/yii2-metronic": "*"
```

to the ```require``` section of your `composer.json` file.

## Basic configuration:
```php
    'bootstrap' => ['metronic'],
    'components' => [ 
        'metronic' => [
            'class' => 'wfcreations\metronic\Metronic',
        ],
    ],
```

## Plugins

- [ ] amcharts
  - [x] amcharts - ```$ composer require``` [speixoto/yii2-amcharts](https://github.com/speixoto/yii2-amcharts)
  - [ ] ammap
  - [ ] amstockcharts
- [ ] angularjs
- [x] autosize - ```$ composer require``` [hiqdev/yii2-asset-autosize](https://github.com/hiqdev/yii2-asset-autosize)
- [ ] backstretch
- [ ] bootbox
- [x] bootstrap - [yiisoft/yii2-bootstrap](https://github.com/yiisoft/yii2-bootstrap)
- [ ] bootstrap-colorpicker
- [ ] bootstrap-confirmation
- [x] bootstrap-contextmenu - ```$ composer require``` [kartik-v/yii2-context-menu](https://github.com/kartik-v/yii2-context-menu)
- [ ] bootstrap-datepaginator
- [x] bootstrap-datepicker - ```$ composer require``` [2amigos/yii2-date-picker-widget](https://github.com/2amigos/yii2-date-picker-widget)
- [x] bootstrap-daterangepicker - ```$ composer require``` [kartik-v/yii2-date-range](https://github.com/kartik-v/yii2-date-range)
- [x] bootstrap-datetimepicker - ```$ composer require``` [2amigos/yii2-date-time-picker-widget](https://github.com/2amigos/yii2-date-time-picker-widget)
- [x] bootstrap-editable - ```$ composer require``` [2amigos/yii2-editable-widget](https://github.com/2amigos/yii2-editable-widget)
- [x] bootstrap-fileinput - ```$ composer require``` [kartik-v/yii2-widget-fileinput](https://github.com/kartik-v/yii2-widget-fileinput)
- [x] bootstrap-growl - ```$ composer require``` [kartik-v/yii2-widget-growl](https://github.com/kartik-v/yii2-widget-growl)
- [ ] bootstrap-gtreetable
- [ ] bootstrap-hover-dropdown
- [x] bootstrap-markdown - ```$ composer require``` [kartik-v/yii2-markdown](https://github.com/kartik-v/yii2-markdown)
- [ ] bootstrap-maxlength
- [ ] bootstrap-modal
- [ ] bootstrap-pwstrength
- [ ] bootstrap-select
- [ ] bootstrap-selectsplitter
- [ ] bootstrap-sessiontimeout
- [ ] bootstrap-summernote
- [x] bootstrap-switch - ```$ composer require``` [2amigos/yii2-switch-widget](https://github.com/2amigos/yii2-switch-widget)
- [ ] bootstrap-tabdrop
- [ ] bootstrap-timepicker
- [ ] bootstrap-toastr
- [x] bootstrap-touchspin - ```$ composer require``` [kartik-v/yii2-widget-touchspin](https://github.com/kartik-v/yii2-widget-touchspin)
- [ ] bootstrap-wizard
- [ ] bootstrap-wysihtml5
- [ ] carousel-owl-carousel
- [x] ckeditor - ```$ composer require``` [2amigos/yii2-ckeditor-widget](https://github.com/2amigos/yii2-ckeditor-widget)
- [ ] clockface
- [ ] countdown
- [ ] cubeportfolio
- [ ] datatables
- [ ] dropzone
- [x] fancybox  - ```$ composer require``` [newerton/yii2-fancybox](https://github.com/newerton/yii2-fancybox)
- [ ] flot
- [x] font-awesome - [rmrevin/yii2-fontawesome](https://github.com/rmrevin/yii2-fontawesome)
- [ ] fuelux
- [ ] fullcalendar
- [ ] gmaps
- [ ] gritter
- [x] icheck - ```$ composer require``` [hiqdev/yii2-asset-icheck](https://github.com/hiqdev/yii2-asset-icheck)
- [ ] ion.rangeslider
- [ ] jcrop
- [ ] jquery-bootpag
- [ ] jquery-easypiechart
- [x] jquery-file-upload - ```$ composer require``` [2amigos/yii2-file-upload-widget](https://github.com/2amigos/yii2-file-upload-widget)
- [ ] jquery-idle-timeout
- [ ] jquery-inputmask
- [ ] jquery-knob
- [ ] jquery-minicolors
- [ ] jquery-mixitup
- [x] jquery-multi-select - ```$ composer require``` [2amigos/yii2-multi-select-widget](https://github.com/2amigos/yii2-multi-select-widget)
- [x] jquery-nestable - [thesabbir/jquery-nestable](https://github.com/thesabbir/jquery-nestable)
- [ ] jquery-notific8
- [x] jquery-slimscroll - own
- [ ] jquery-tags-input
- [x] jquery-ui - [yiisoft/yii2-jui](https://github.com/yiisoft/yii2-jui)
- [ ] jquery-ui-touch-punch
- [ ] jquery-validation
- [ ] jqvmap
- [ ] jstree
- [ ] morris
- [ ] nouislider
- [ ] owl.carousel
- [ ] pace
- [ ] plupload
- [ ] rateit
- [x] select2 - ```$ composer require``` [yii2-widget-select2](https://github.com/kartik-v/yii2-widget-select2)
- [ ] simple-line-icons - [wfcreations/yii2-simple-line-icons](https://github.com/wfcreations/yii2-simple-line-icons)
- [ ] slider-layer-slider
- [ ] slider-revolution-slider
- [ ] smooth-scroll
- [ ] tabdrop
- [x] typeahead - ```$ composer require``` [kartik-v/yii2-widget-typeahead](https://github.com/kartik-v/yii2-widget-typeahead)
- [ ] uniform
- [ ] zoom
- [x] excanvas - [yii2-asset-legacy](https://github.com/wfcreations/yii2-asset-legacy)
- [x] jquery.blockui - own
- [ ] jquery.cokie
- [ ] jquery.easing
- [ ] jquery.input-ip-address-control
- [x] jquery
- [ ] jquery.mockjax
- [ ] jquery.parallax
- [ ] jquery.pulsate
- [ ] jquery.scrollTo
- [ ] jquery.sparkline
- [ ] jquery-migrate
- [x] moment - [omnilight/yii2-momentjs](https://github.com/omnilight/yii2-momentjs)
- [x] respond - [wfcreations/yii2-asset-legacy](https://github.com/wfcreations/yii2-asset-legacy)

##Comercial Plugins

- [amcharts](http://www.amcharts.com/)
- [Cube Portfolio](http://scriptpie.com/cubeportfolio/live-preview/)
- [LayerSlider](http://kreaturamedia.com/layerslider-responsive-jquery-slider-plugin/)
- [Slider Revolution Responsive](http://themes.themepunch.com/?theme=revolution_jq)