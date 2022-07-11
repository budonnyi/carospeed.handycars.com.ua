<?php

use app\models\Lang;
use yii\helpers\Html;
use yii\helpers\Url;

$lang = Lang::getCurrent()->url;

?>

<nav class="navbar navbar-custom navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <!-- <button class="navbar-toggle" type="button" data-toggle="collapse"
                    data-target="#custom-collapse"><span
                        class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                        class="icon-bar"></span><span class="icon-bar"></span></button>-->
            <a class="navbar-brand text-center" style="text-align: center"
               href="<?= Url::toRoute('site/index') ?>"><?= Html::img('/assets/images/logo-white.png', ['alt' => 'HANDYcars logotype']) ?></a>
        </div>
        <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="section-scroll" href="#characteristicks"><?= Yii::t('main', 'Характеристики') ?></a></li>
<!--                <li>-->
<!--                    <a class="section-scroll" href="--><?//= Url::toRoute('site/portfolio') ?><!--"><!-#works-->
<!--                        --><?//= Yii::t('main', 'Наши работы') ?>
<!--                    </a>-->
<!--                </li>-->
                <?php if (!empty($cities)) { ?>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="<?= Url::toRoute('site/index') ?>"
                           data-toggle="dropdown">
                            <?= Yii::t('main', 'Города') ?>
                        </a>
                        <ul class="dropdown-menu">
                            <?php foreach ($cities as $city) { ?>
                                <?php if ($city->city != '') { ?>
                                    <li>
                                        <a href="<?= Url::toRoute(['site/index', 'city' => $city->city]) ?>">
                                            <?= Yii::t('main', 'Купить ручное управление') . ' ' . $city->{'city_where_' . $lang} ?>
                                        </a>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </li>
                <?php } ?>
                <li>
                    <a class="section-scroll" href="#pricing">
                        <?= Yii::t('main', 'Цены') ?>
                    </a>
                </li>
                <li>
                    <a class="section-scroll" href="#materials">
                        <?= Yii::t('main', 'Материалы') ?>
                    </a>
                </li>
                <li>
                    <a class="section-scroll" href="#contact">
                        <?= Yii::t('main', 'Контакты') ?>
                    </a>
                </li>
                <li>
                    <a class="section-scroll phone-number" href="tel:+380962010191">
                        +380962010191
                    </a>
                </li>
                <li>
                    <?= \app\widgets\LangWidget::widget() ?>
                </li>
            </ul>
        </div>
    </div>
</nav>
