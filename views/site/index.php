<?php

/* @var $this yii\web\View */

use app\models\Lang;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

//$this->title = 'Ручное управление на автомобиль для инвалида или пожилого человека';
$lang = Lang::getCurrent()->url;

$this->params['schema'] = \yii\helpers\Json::encode([
    "@context" => "https://schema.org/",
    "@type" => "Product",
    "name" => Yii::t('main', 'Ручное управление на авто для инвалида'),
    "image" => [
        "https://carospeed.handycars.com.ua/assets/images/slider-1.jpg"
    ],
    "description" => Yii::t('main', 'Ручное управление на авто для инвалида'),
    "sku" => '0962010191',
    "priceCurrency" => "UAH",
    "price" => 28000,
    "url" => \yii\helpers\Url::canonical(),
    "priceValidUntil" => date('Y-m-d', time()),
    "brand" => [
        "@type" => "Thing",
        "name" => 'BraunAbility'
    ],
    "aggregateRating" => [
        "@type" => "AggregateRating",
        "ratingValue" => "5",
        "reviewCount" => "89"
    ],
    "offers" => [
        "@type" => "Offer",
        "url" => "https://carospeed.handycars.com.ua/",
        "priceCurrency" => "UAH",
        "price" => 28000,
        "priceValidUntil" => date('Y-m-d', time()),
        "itemCondition" => "https://schema.org/NewCondition",
        "availability" => "https://schema.org/InStock",
        "seller" => [
            "@type" => "Organization",
            "name" => "Интернет-магазин HANDYcars Carospeed"
        ]
    ]
]);

?>

<section class="home-section home-parallax home-fade" id="home">
    <div class="hero-slider">
        <!--<div class="top-contact-form">
            <?/*= \app\widgets\TopFormWidget::widget() */?>
        </div>-->

        <!--        <style>-->
        <!--            .caption-content {-->
        <!--                text-align: left;-->
        <!--                margin-left: 10%;-->
        <!--            }-->
        <!--        </style>-->
        <ul class="slides">
            <li class="bg-dark-30 bg-dark" style="background-image:url(/assets/images/slider-1.jpg);">
                <div class="titan-caption">
                    <div class="caption-content">
                        <div class="mobilecontent"></div>
                        <div class="font-alt mb-30 titan-title-size-1"><h1><?= Yii::t('main', 'Ручное управление на авто для инвалида') ?></h1></div>
                        <div class="font-alt mb-40 titan-title-size-4">Carospeed Classic</div>
                        <a class="section-scroll btn btn-border-w btn-round" href="#pricing"><?= Yii::t('main', 'Купить ручное управление') ?></a>
                    </div>
                </div>
            </li>
            <li class="bg-dark-30 bg-dark" style="background-image:url(/assets/images/slider-2.jpg);">
                <div class="titan-caption">
                    <div class="caption-content">
                        <div class="mobilecontent"></div>
                        <div class="font-alt mb-30 titan-title-size-2"><?= Yii::t('main', 'Ручное управление') ?>
                            <br/><?= Yii::t('main', 'устанавливается в любой автомобиль') ?>
                        </div>
                        <a class="section-scroll btn btn-border-w btn-round" href="#pricing"><?= Yii::t('main', 'Купить ручное управление') ?></a>
                    </div>
                </div>
            </li>
            <li class="bg-dark-30 bg-dark" style="background-image:url(/assets/images/slider-3.jpg);">
                <div class="titan-caption">
                    <div class="caption-content">
                        <div class="mobilecontent"></div>
                        <div class="font-alt mb-30 titan-title-size-1"><?= Yii::t('main', 'Купить ручное управление с доставкой по Украине') ?></div>
                        <div class="font-alt mb-40 titan-title-size-3">HANDYcars</div>
                        <a class="section-scroll btn btn-border-w btn-round" href="#pricing"><?= Yii::t('main', 'Купить ручное управление') ?></a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>

<div>
    <div class="main">

        <!--        todo cities materials  -->

        <section class="module pb-0" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt"><?= Yii::t('main', 'О нас') ?></h2>
                        <div class="module-subtitle font-serif"><?= Yii::t('main', 'Мы устанавливаем ручное управление на авто для инвалида более') . ' ' ?><?= date('Y') - 2015 ?><?= ' ' . Yii::t('main', 'лет') ?>
                        </div>
                    </div>
                </div>
                <div class="row multi-columns-row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon"><span class="icon-speedometer"></span></div>
                            <h3 class="features-title font-alt"><?= Yii::t('main', 'Надежность') ?></h3>
                            <p><?= Yii::t('main', 'Надежность устройств Carospeed подтверждена многолетним опытом использования во всем мире.') ?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon"><span class="icon-gears"></span></div>
                            <h3 class="features-title font-alt"><?= Yii::t('main', 'Качество') ?></h3>
                            <p><?= Yii::t('main', 'Производится в Швеции. Шведское качество устройства в каждой детали. Квалифицированный мастер-установщик.') ?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon"><span class="icon-clock"></span></div>
                            <h3 class="features-title font-alt"><?= Yii::t('main', 'Быстрая установка') ?></h3>
                            <p><?= Yii::t('main', 'Установка ручного управления на') ?> <span style="color:red;"><b><?= Yii::t('main', 'любой') ?></b></span>
                                <?= Yii::t('main', 'автомобиль занимает менее чем 3 часа. При установке ручного управления не сверлятся отверстия в салоне. Внутренний дизайн остается без изменений') ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon"><span class="icon-happy"></span></div>
                            <h3 class="features-title font-alt"><?= Yii::t('main', 'Гарантия') ?></h3>
                            <p><?= Yii::t('main', 'Гарантия производителя на все устройстваручного управления. Каждое устройство маркируется специальным номером и вносится в базу данных производителя.') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="module">
            <div class="cities-text" id="about">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="module-title font-alt">
                                <?= Yii::t('main', 'Ручное управление Carospeed') . ' ' . ($automarkModel->car ?? $citiesModel->{'city_where_' . $lang}) ?> </h2>
                            <div class="module-subtitle font-serif"></div>
                        </div>

                        <div class="col-sm-12">
                            <?php if (!empty($automarkModel->{'content_' . $lang})) { ?>
                                <p style="float: left">
                                <img src="/assets/images/automarks/<?= strtolower($automarkModel->image) ?>"
                                     width="150"
                                     height="150"
                                     style="margin: 0px 25px 10px 0px"
                                     alt="Ручное управление в <?= $automarkModel->{'car_' . $lang} ?>"/>
                                <?= $automarkModel->{'content_' . $lang} ?>
                                </p>
                            <?php } else if (!empty($citiesModel->{'content_' . $lang})) { ?>
                                <?= $citiesModel->{'content_' . $lang} ?>
                            <?php } ?>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <div class="module bg-dark-90  parallax-bg testimonial" data-background="/assets/images/slider-3.jpg">
            <div class="container">
                <div class="row">
<!--                    <div class="col-md-12">-->
                        <div class="col-sm-6 col-sm-offset-3">
<!--                            <h2 class="module-title font-alt">-->
                        <div class="module-title font-alt video-text text-header"><?= Yii::t('main', 'Видеопрезентация') ?></div>
                        <div class="video-subtitle font-alt video-text"><?= Yii::t('main', 'Посмотреть видео о вариантах ручного управления в автомобиль') ?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="video-box">
                            <div class="video-box-icon">
                                <a class="video-pop-up" href="https://www.youtube.com/watch?v=-RjxrWNRZ-U">
                                    <img alt="Video Carospeed Classic E" src="/images/handcontrol_1.jpg" width="400" height="300"/>
                                </a>
                            </div>
                            <div class="video-subtitle font-alt">Carospeed Classic E</div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="video-box">
                            <div class="video-box-icon">
                                <a class="video-pop-up" href="https://player.vimeo.com/video/128142292">
                                    <img alt="Video Carospeed Menox" src="/images/handcontrol_2.jpg" width="400" height="300"/>
                                </a>
                            </div>
                            <div class="video-subtitle font-alt">Carospeed Menox</div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="video-box">
                            <div class="video-box-icon">
                                <a class="video-pop-up" href="https://player.vimeo.com/video/181482322">
                                    <img alt="Video Carospeed Classic" src="/images/handcontrol_3.jpg" width="400" height="300"/>
                                </a>
                            </div>
                            <div class="video-subtitle font-alt">Carospeed Classic</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="characteristicks" class="module pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="module-title font-alt text-header"><?= Yii::t('main', 'Характеристики ручного управления') ?></h2>
                        <div class="module-subtitle font-serif"><?= Yii::t('main', 'Какой бы комплект ручного управления вы не выбрали он точно будет надежным и удобным.') ?></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="module-small pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="post-images-slider">
                            <ul class="slides">
                                <?php for ($i = 2; $i < 10; $i++) { ?>
                                    <li><img class="center-block" src="/assets/slider/sl-<?= $i ?>.jpg" width="800" height="800"
                                             alt="<?= Yii::t('main', 'Ручное управление Carospeed') ?>"/></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        <div class="work-details">
                            <h5 class="work-details-title font-alt"><?= Yii::t('main', 'Ручное управление Carospeed') ?></h5>
                            <p><?= Yii::t('main', 'Универсальное устройство ручного управления. Позволяет управлять педалями газа и тормоза рукой - просто потянуть на себя для набора скорости и так же просто нажать для торможения. Монтаж производится к специальному кронштейну. Нет необходимости сверлить отверстий в салоне автомобиля.') ?></p>
                            <p><?= Yii::t('main', 'Модели Carospeed:') ?></p>
                            <ul>
                                <li><strong>Carospeed Classic: </strong>
                                    <span class="font-serif"><p style="color: #2b669a; font-style: italic;"><?= Yii::t('main', 'базовые функции газа и тормоза') ?></p></span>
                                </li>
                                <li><strong>Carospeed Menox: </strong>
                                    <span class="font-serif"><p style="color: #2b669a; font-style: italic;"><?= Yii::t('main', 'базовые функции газа и тормоза. Ручка регулируется по высоте и наклону') ?></p></span>
                                </li>
                                <li><strong>Carospeed Classic E: </strong>
                                    <span class="font-serif"><p style="color: #2b669a; font-style: italic;"><?= Yii::t('main', 'встроенные функции индикатора поворота, управления щетками стеклоочистителя, омывателя стекла, переключение ближнего и дальнего света, подача звукового сигнала.') ?></p></span>
                                </li>
                            </ul>
                            <p><?= Yii::t('main', 'возможно подключение штатного круиз-контроля') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="module pb-0" id="auto">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="module-title font-alt text-header"><?= Yii::t('main', 'В какие автомобили устанавливается ручное управление') ?></h2>
                        <div class="module-subtitle font-serif"></div>
                    </div>
                </div>
            </div>
        </section>

        <?= \app\widgets\AutomarksWidget::widget() ?>

        <section class="module-small bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-8 col-lg-6 col-lg-offset-2">
                        <div class="callout-text font-alt">
                            <h3 class="callout-title"><?= Yii::t('main', 'Хотите увидеть больше нащих работ?') ?></h3>
                            <p><?= Yii::t('main', 'Мы всегда готовы показать больше наших работ.') ?></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-2">
                        <div class="callout-btn-box"><a class="btn btn-w btn-round" href="<?= Url::toRoute('portfolio') ?>"><?= Yii::t('main', 'Перейти к портфолио') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="module" id="pricing">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt text-header"><?= Yii::t('main', 'Цена ручного управления') ?></h2>
                        <div class="module-subtitle font-serif"><?= Yii::t('main', 'Цены на комплекты ручного управления Carospeed.') ?>
                        </div>
                    </div>
                </div>
                <div class="row multi-columns-row">
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="price-table font-alt">
                            <div class="main-price-info">
                                <h4>Carospeed Classic</h4>
                                <div class="borderline"></div>
                                <img src="/assets/images/carospeed/car-7.jpg" width="400" height="400" alt="Carospeed Classic">

                                <p class="price">33'000<span>грн</span>
                                </p>
                                <ul class="price-details">
                                    <li><?= Yii::t('main', 'Ручное управление педалями газа и тормоза') ?>
                                    </li>
                                    <li><?= Yii::t('main', 'Противооткатный тормоз') ?></li>
                                    <li>&nbsp</li>
                                    <li>&nbsp</li>
                                </ul>
                            </div>
                            <a class="btn btn-d btn-round section-scroll" href="#contact"><?= Yii::t('main', 'Купить') ?></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="price-table font-alt">
                            <div class="main-price-info">
                                <h4>Carospeed Menox</h4>
                                <div class="borderline"></div>
                                <img src="/assets/images/carospeed/car-9.jpg" width="400" height="400" alt="Carospeed Classic">

                                <p class="price">33'000<span>грн</span>
                                </p>
                                <ul class="price-details">
                                    <li><?= Yii::t('main', 'Ручное управление педалями газа и тормоза') ?>
                                    </li>
                                    <li><?= Yii::t('main', 'Противооткатный тормоз') ?></li>
                                    <li><?= Yii::t('main', 'Регулируется по высоте') ?></li>
                                    <li>&nbsp</li>
                                </ul>
                            </div>
                            <a class="btn btn-d btn-round section-scroll" href="#contact"><?= Yii::t('main', 'Купить') ?></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="price-table font-alt">
                            <div class="main-price-info">
                                <h4>Carospeed Classic E</h4>
                                <div class="borderline"></div>
                                <img src="/assets/images/carospeed/car-8.jpg" width="400" height="400" alt="Carospeed Classic">
                                <p class="price">41'000<span>грн</span>
                                </p>
                                <ul class="price-details">
                                    <li><?= Yii::t('main', 'Ручное управление педалями газа и тормоза') ?>
                                    </li>
                                    <li><?= Yii::t('main', 'Противооткатный тормоз') ?></li>
                                    <li><?= Yii::t('main', 'Электрические функции: дворники, переключение света, индикатор поворота') ?>
                                    </li>
                                </ul>
                            </div>
                            <a class="btn btn-d btn-round section-scroll" href="#contact"><?= Yii::t('main', 'Купить') ?></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="price-table font-alt">
                            <div class="main-price-info">
                                <h4><?= Yii::t('main', 'Установка') ?></h4>
                                <div class="borderline"></div>
                                <img src="/assets/images/carospeed/install.jpg" width="400" height="400" alt="Carospeed Classic">

                                <p class="price">100<span>$</span>
                                </p>
                                <ul class="price-details install-details">
                                    <li><?= Yii::t('main', 'Опытный мастер') ?></li>
                                    <li><?= Yii::t('main', 'Установка за 3 часа') ?></li>
                                    <li><?= Yii::t('main', 'Возможен выезд в любой город по договоренности') ?></li>
                                </ul>
                            </div>
                            <a class="btn btn-d btn-round section-scroll" href="#contact"><?= Yii::t('main', 'Записаться') ?></a>
                        </div>
                    </div>
                </div>
                <div class="row mt-40">
                    <div class="col-sm-7 col-sm-offset-3 align-center">
                        <h4><?= Yii::t('main', 'Ручное управление Carospeed обеспечено противооткатным тормозом.') ?>
                            <br/> <?= Yii::t('main', 'Стильная удобная ручка обеспечит безопасное и комфортное вождение.') ?></h4>
                    </div>
                </div>
            </div>
        </section>

        <?= \app\widgets\UsersFeedbackWidget::widget() ?>

        <?= \app\widgets\MaterialsWidget::widget() ?>

        <!--        <div class="module-small bg-dark">-->
        <!--            <div class="container">-->
        <!--                <div class="row">-->
        <!--                    <div class="col-sm-6 col-md-6 col-lg-4 col-lg-offset-2">-->
        <!--                        <div class="callout-text font-alt">-->
        <!--                            <h3 class="callout-title">Subscribe now</h3>-->
        <!--                            <p>We will not spam your email.</p>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="col-sm-6 col-md-6 col-lg-4">-->
        <!--                        <div class="callout-btn-box">-->
        <!--                            <form id="subscription-form" role="form" method="post" action="/php/subscribe.php">-->
        <!--                                <div class="input-group">-->
        <!--                                    <input class="form-control" type="email" id="semail" name="semail" placeholder="Your Email"-->
        <!--                                           data-validation-required-message="Please enter your email address." required="required"/><span class="input-group-btn">-->
        <!--                        <button class="btn btn-g btn-round" id="subscription-form-submit" type="submit">Submit</button></span>-->
        <!--                                </div>-->
        <!--                            </form>-->
        <!--                            <div class="text-center" id="subscription-response"></div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->


        <?= \app\widgets\ContactWidget::widget() ?>

        <?= $this->render('/partials/socials') ?>

        <!--        <div class="mb-4"></div>-->

    </div>

    <!--    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDK2Axt8xiFYMBMDwwG1XzBQvEbYpzCvFU"></script>-->
</div>
