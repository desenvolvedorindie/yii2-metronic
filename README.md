Yii2-Metronic
======================
Forked from (Yii2-Metronic)[https://github.com/hustshenl/yii2-metronic]

Yii2Metronic is a collection of Yii2 components(widgets) based on responsive and multipurpose admin theme
called Metronic (v4.0). Powered with Twitter Bootstrap v3.3.4 Framework. 

Metronic can be used for any type of web applications: custom admin panels, admin dashboards, CMS, CRM, SAAS and websites: business, corporate, portfolio, blog.
Metronic has a sleek, clean and intuitive metro style design which makes your next project look awesome and yet user
friendly. Metronic has a huge collection of plugins and UI components and works seamlessly on all major web browsers,
tablets and phones. 

Basic configuration:
```php
    'components' => [ 
        'metronic' => [
            'class' => 'wfcreations\metronic\Metronic',
            'color' => 'default',
            'layoutOption' => \wfcreations\metronic\Metronic::LAYOUT_FLUID,
            'headerOption' => 'fixed',
        ],
    ],
    'preload' => ['metronic'],
```
  
##### For more details see code documentation