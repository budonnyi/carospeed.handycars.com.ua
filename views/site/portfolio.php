<?php

/* @var $this yii\web\View */

use app\models\Lang;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = 'Ручное управление на автомобиль для инвалида или пожилого человека';
$lang = Lang::getCurrent()->url;

?>

<section class="home-section home-parallax home-fade" id="home">
    <div class="hero-slider">
        <ul class="slides">
            <li class="bg-dark-30 bg-dark" style="background-image:url(/assets/images/slider-1.jpg);">
                <div class="titan-caption">
                    <div class="caption-content">
                        <div class="font-alt mb-30 titan-title-size-1"><?= Yii::t('main', 'Ручное управление на авто для инвалида') ?></div>
                        <div class="font-alt mb-40 titan-title-size-4">Carospeed Classic</div>
                        <a class="section-scroll btn btn-border-w btn-round" href="#contact"><?= Yii::t('main', 'Купить ручное управление') ?></a>
                    </div>
                </div>
            </li>
            <li class="bg-dark-30 bg-dark" style="background-image:url(/assets/images/slider-2.jpg);">
                <div class="titan-caption">
                    <div class="caption-content">
                        <div class="font-alt mb-30 titan-title-size-2"><?= Yii::t('main', 'Ручное управление') ?>
                            <br/><?= Yii::t('main', 'устанавливается в любой автомобиль') ?>
                        </div>
                        <a class="btn btn-border-w btn-round" href="#contact"><?= Yii::t('main', 'Купить ручное управление') ?></a>
                    </div>
                </div>
            </li>
            <li class="bg-dark-30 bg-dark" style="background-image:url(/assets/images/slider-3.jpg);">
                <div class="titan-caption">
                    <div class="caption-content">
                        <div class="font-alt mb-30 titan-title-size-1"><?= Yii::t('main', 'Купить ручное управление с доставкой по Украине') ?></div>
                        <div class="font-alt mb-40 titan-title-size-3">HANDYcars</div>
                        <a class="section-scroll btn btn-border-w btn-round" href="#contact"><?= Yii::t('main', 'Купить ручное управление') ?></a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>

<main>
    <div class="main">

        <section class="module pb-0" id="works">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt"><?= Yii::t('main', 'Примеры наших работ') ?></h2>
                        <div class="module-subtitle font-serif"></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="filter font-alt" id="filters">
                            <li><a class="current wow fadeInUp" href="#" data-filter="*">Все</a></li>
                            <li><a class="wow fadeInUp" href="#" data-filter=".classic" data-wow-delay="0.2s">Carospeed Classic</a></li>
                            <li><a class="wow fadeInUp" href="#" data-filter=".classic-e" data-wow-delay="0.4s">Carospeed Classic E</a></li>
                            <li><a class="wow fadeInUp" href="#" data-filter=".menox" data-wow-delay="0.6s">Carospeed Menox</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <ul class="works-grid works-grid-gut works-grid-3 works-hover-w" id="works-grid">
                    <?php foreach ($portfolio as $item) { ?>
                        <li class="work-item <?= $item->device ?> webdesign">
                            <a href="#">
                                <div class="work-image">
                                    <img src="/assets/portfolio/<?= $item->image ?>" alt="Portfolio Item"/>
                                </div>
                                <div class="work-caption font-alt">
                                    <h3 class="work-title"><?= $item->vehicle ?></h3>
                                    <div class="work-descr">classic</div>
                                </div>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </section>

        <?= \app\widgets\ContactWidget::widget() ?>

        <?= $this->render('/partials/socials') ?>

    </div>

    <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    <!--    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDK2Axt8xiFYMBMDwwG1XzBQvEbYpzCvFU"></script>-->
</main>
