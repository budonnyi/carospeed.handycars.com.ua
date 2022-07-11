<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use app\models\Lang;
use yii\widgets\MaskedInput;

$lang = Lang::getCurrent()->url;
$route = $lang == 'ua' ? '/ua' : '';

//$description = Lang::getCurrent()->url == 'ru'
//    ? 'Каталог пандусов. Безопасные и надежные пандусы для людей с инвалидностью. Большой выбор. Наличие на складе. Официальный дилер в Украине BraunAbility (Швеция)'
//    : 'Каталог пандусів. Безпечні та надійні пандуси для людей з інвалідністю. Великий вибір. Наявність на складі. Офіційний дилер BraunAbility (Швеція) на території України.';
//
//$this->params['schema'] = \yii\helpers\Json::encode([
//    "@context" => "https://schema.org/",
//    "@type" => "Product",
//    "name" => Yii::t('main', 'Ми доставляємо пандуси по Україні. Можемо доставити пандус у довільне місто'),
//    "url" => \yii\helpers\Url::canonical(),
//    "image" => "https://pandus.info/slider_images/pandus4-min.jpg",
//    "description" => Yii::t('main', 'Ми доставляємо пандуси по Україні. Можемо доставити пандус у довільне місто'),
//    "brand" => Yii::t('main', 'Хендікарс ТОВ'),
//    "aggregateRating" => [
//        "@type" => "AggregateRating",
//        "ratingValue" => "5",
//        "ratingCount" => "56",
//        "bestRating" => "5"
//    ]
//]);

?>

<section class="module bg-dark-60 blog-page-header" data-background="/slider_images/pandus4-min.jpg">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-md-10 col-md-offset-1 col-sm-offset-1">
                <h1 class="module-title font-alt">
                    <?= Yii::t('main', 'Купить ручное управление с доставкой по Украине') ?>
                </h1>
                <div class="module-subtitle font-serif">
                    <?= Yii::t('main', 'Шведское ручное управление Carospeed для людей с инвалидностью и пожилых людей с доставкой по Украине. Опыт с 2015 года') ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="module pb-0" id="services">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt"><?= Yii::t('main', 'Как купить ручное управление с доставкой по Украине?') ?></h2>
                <div class="module-subtitle font-serif">
                </div>
            </div>
        </div>
        <div class="row multi-columns-row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="features-item">
                    <div class="features-icon"><span class="icon-lightbulb"></span></div>
                    <h3 class="features-title font-alt"><?= Yii::t('main', 'Простота') ?></h3>
                    <p><?= Yii::t('main', 'Купити пандуси просто, швидко та безпечно') ?></p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="features-item">
                    <div class="features-icon"><span class="icon-genius"></span></div>
                    <h3 class="features-title font-alt"><?= Yii::t('main', 'Гарантія поставки') ?></h3>
                    <p><?= Yii::t('main', 'Наше підприємство вже 5 років успішно поставляє пандуси та інші товари для людей з інвалідністю') ?></p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="features-item">
                    <div class="features-icon"><span class="icon-bike"></span></div>
                    <h3 class="features-title font-alt"><?= Yii::t('main', 'Курєрська доставка пандуса протягом доби') ?></h3>
                    <p><?= Yii::t('main', 'Ми доставляємо пандуси по Україні. Можемо доставити пандус у довільне місто') ?></p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="features-item">
                    <div class="features-icon"><span class="icon-tools"></span></div>
                    <h3 class="features-title font-alt"><?= Yii::t('main', 'Технічна консультація фахівця') ?></h3>
                    <p><?= Yii::t('main', 'При замовлені пандуса є можливість отримати технічну консультацію фахівця') ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="module pb-0" id="cities">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt"><?= Yii::t('main', 'Основні міста з котрими працює Пандус.Інфо') ?></h2>
            </div>
        </div>

        <div class="soflex1">
            <?php if (isset($cities)) { ?>
                <?php foreach ($cities as $city) { ?>
                    <div class="footer-list-item">
                        <a href="<?= $route ?>/kupit-pandus-v-gorode/<?= $city->city ?>.html">
                            <?= $city->{'city_' . $lang} ?>
                        </a>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>

    </div>
</section>

<section class="module pb-0">
    <div class="container">
        <?php if (!empty($products)) { ?>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt"><?= Yii::t("main", "Пандуси в наявності які завтра ви можете отримати") ?></h2>
                </div>
            </div>
            <div class="row">
                <?php foreach ($products as $item) { ?>
                    <div class="col-md-4" style="margin-bottom: 30px">
                        <div class="card" style="border: 1px solid #ccc">
                            <a href="<?= Url::to(['product/view', 'url' => $item->url]) ?>"
                               style="text-decoration: none;">
                                <?= Html::img(('/product/' . $item->image), ['class' => 'card-img-top', 'alt' => Yii::t('main', 'Купити') . ' ' . $item->{'name_' . $lang} . ' ' . Yii::t('main', 'з доставкою по Україні')]) ?>
                                <div class="card-body" style="/*border-top: 1px solid #ccc*/">
                                    <h4 class="card-text text-center"><?= Yii::t('main', 'Купити') . ' ' . $item->{'name_' . $lang} . ' ' . Yii::t('main', 'з доставкою по Україні') ?></h4>
                                </div>
                            </a>
                            <h5 class="text-center" style="color: green"><?= Yii::t("main", "В наявності") ?></h5>
                            <div class="card-body" style="padding-left: 10px; border-top: 1px solid #ccc">
                                <div class="price">
                                    <h4 class="card-text">
                                        <?= Yii::t('main', 'Ціна: ') ?>
                                        <?= number_format($item->price, 2, ',', '\'') ?></h4>
                                    <a class="add-to-cart btn btn-lg btn-round btn-b" data-id="<?= $item->id ?>"
                                       href="<?= Url::to(['cart/add/', 'id' => $item->id]) ?>">
                                        <?= Yii::t('main', 'Купити') ?>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body" style="padding: 0 10px; border-top: 1px solid #ccc">
                                <p class="card-text">
                                    <?= $item->{'technical_' . $lang} ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>

