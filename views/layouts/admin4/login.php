<?php

use yii\helpers\Html;

wfcreations\metronic\bundles\AdminTheme4Asset::register($this);
wfcreations\metronic\bundles\pages\styles\LoginAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="<?= Yii::$app->language ?>" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="<?= Yii::$app->language ?>" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="<?= Yii::$app->language ?>" class="no-js">
    <!--<![endif]-->
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <body class="login">
        <?php $this->beginBody() ?>
        <div class="content">
            <?= $content ?>
        </div>
        <div class="copyright">
            <?= date('Y') ?> © My Company
        </div>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>