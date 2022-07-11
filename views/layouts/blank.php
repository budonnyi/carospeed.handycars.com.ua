<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\widgets\Alert;

AppAsset::register($this);

$lang = \app\models\Lang::getCurrent()->url;

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= $lang ?? Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <!-- Default stylesheets-->
    <link href="/assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="/assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="/assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="/assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <link href="/assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="/assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="/assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link id="color-scheme" href="/assets/css/colors/default.css" rel="stylesheet">
    <link rel="canonical" href="https://carospeed.handycars.com.ua" />

    <?php $this->head() ?>

    <link rel="manifest" href="/favicons/site.webmanifest">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#111121">
    <link rel="shortcut icon" href="/favicons/favicon.ico" type="image/x-icon">

</head>
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
<?php $this->beginBody() ?>

<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
