<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppAsset;
use app\models\News;
use app\components\MenuWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<body lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <link href="/assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/admin-assets/style/daterangepicker.css">
    <link rel="stylesheet" href="/admin-assets/style/daterangepicker-kv.css">
    <link rel="stylesheet" href="/admin-assets/style/style.css">
    <link rel="stylesheet" href="/admin-assets/style/karher.css?764346345">

    <link href="/assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <script src="/admin-assets/js/jquery-3.5.1.min.js"></script>
</head>
<body>
<?php $this->beginBody() ?>

<div class="container">
    <div class="header">
        <div class="navbar-aside">
            <button type="button" class="btn-aside-menu toggle-sidebar">
            </button>
        </div>
        <div class="navbar-user">
            <div class="user">
                <div class="user-wrapper show-user-dropdown">
                    <div class="icon-user" style="background-image: url(/admin-assets/img/av1.png);"></div>
                    <div class="user-name">ADMINS</div>
                </div>
                <div class="dropdown-user">
                    <ul>
                        <li>
                            <a href="#" class="logout">Выход </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar">
        <div class="menu-sidebar">
            <div class="logo">
                <a href="#">
                    <img src="/assets/images/logo.png" alt="">
                </a>
            </div>
            <div class="menu">
                <nav>
                    <ul class="sidebar-nav treeview-menu">
                        <li class="active">
                            <a href="<?= Url::toRoute(['/admin/city']) ?>">Города</a>
                        </li>
                        <li class="active">
                            <a href="<?= Url::toRoute(['/admin/automark']) ?>">Автомарки</a>
                        </li>
                        <li class="active">
                            <a href="<?= Url::toRoute(['/admin/users-feedback']) ?>">Мнение пользователей</a>
                        </li>
                        <li class="active">
                            <a href="<?= Url::toRoute(['/admin/lead-form']) ?>">Форма захвата</a>
                        </li>
                        <li class="active">
                            <a href="<?= Url::toRoute(['/admin/db']) ?>">Экспорт БД</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <style>
        .breadcrumb {
            background-color: #e2e2e2 !important;
        }
    </style>
    <div class="content">
        <div class="breadcrumps">
            <?= \yii\widgets\Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] :
                [],]); ?>
<!--            <ul>-->
<!--                <li>-->
<!--                    <a href="#">-->
<!--                        <i class="fa fa-home"></i> Главная</a> /-->
<!--                </li>-->
<!--                <li>-->
<!--                    <span>-->
<!--                            Ключевые показатели-->
<!--                    </span>-->
<!--                </li>-->
<!--            </ul>-->
        </div>
        <div class="page-content">


            <?= $content ?>

        </div>
    </div>
</div>

<div class="scrollup">
    <a href="#" class="text-white"><i class="fa fa-chevron-up"></i></a>
</div>
<div class="preloader-wrapper">
    <div class="loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="/admin-assets/js/moment.js"></script>
<script src="/admin-assets/js/daterangepicker.js"></script>
<script src="/admin-assets/js/script.js?5465454658488"></script>

<!-- charts scirpts -->
<script src="/admin-assets/js/Chart.min.js"></script>
<script src="/admin-assets/js/jquery.drawPieChart.js"></script>
<script src="/admin-assets/js/jquery.drawDoughnutChart.js"></script>
<script src="/admin-assets/js/jqueryRadialBarMultiple.js"></script>
<!-- FILTER SCRIPT  -->
<script>
    $('.content').on('change', '.filter-container select', function (e) {
        $(this).parents('form').submit();
    });
</script>
<!-- END FILTER SCRIPT  -->
<script>
    jQuery(function ($) {
        $(document).ready(function () {
            $('.field-filter-date input').daterangepicker({
                opens: 'rigth',
                locale: {
                    format: 'DD-MM-YYYY',
                    applyLabel: 'Принять',
                    cancelLabel: 'Отмена',
                    invalidDateLabel: 'Выберите дату',
                    daysOfWeek: ['Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс', 'Пн'],
                    monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
                    firstDay: 1
                }
            }, function (start, end, label) {
            });
        });
    });
</script>

<!-- !!!!after chartData!!!! -->
<script src="/admin-assets/js/charts.js"></script>

</body>
<?php $this->endBody() ?>
</html>
<?php $this->endPage() ?>
