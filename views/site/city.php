<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use app\models\Lang;
use yii\widgets\MaskedInput;

$lang = Lang::getCurrent()->url;
$route = $lang == 'ua' ? '/ua' : '';

//$description = Lang::getCurrent()->url == 'ru'
//    ? 'Безопасные и надежные пандусы для людей с инвалидностью. Большой выбор. Наличие на складе. Официальный дилер в Украине BraunAbility (Швеция)'
//    : 'Безпечні та надійні пандуси для людей з інвалідністю. Великий вибір. Наявність на складі. Офіційний дилер BraunAbility (Швеція) на території України.';
//
//$this->params['schema'] = \yii\helpers\Json::encode([
//    "@context" => "https://schema.org/",
//    "@type" => "Product",
//    "name" => Yii::t('main', 'Купити пандус') . ' ' . $model->{'city_where_' . $lang},
//    "url" => \yii\helpers\Url::canonical(),
//    "image" => "https://pandus.info/slider_images/pandus4-min.jpg",
//    "description" => Yii::t('main', 'купити пандуси з каталогу') . ' ' . $model->{'city_where_' . $lang},
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
                    <?= Yii::t('main', 'Купить ручное управление') . ' ' . $model->{'city_where_' . $lang} ?>
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
                <h2 class="module-title font-alt"><?= Yii::t('main', 'Как купить ручное управление') . ' ' . $model->{'city_where_' . $lang} ?></h2>
                <div class="module-subtitle font-serif">
                </div>
            </div>
        </div>
        <div class="row multi-columns-row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="features-item">
                    <div class="features-icon"><span class="icon-lightbulb"></span></div>
                    <h3 class="features-title font-alt"><?= Yii::t('main', 'Простота') ?></h3>
                    <p><?= Yii::t('main', 'Купить ручное управление') . ' ' . $model->{'city_where_' . $lang} . ' ' . Yii::t('main', 'просто, быстро и безопасно') ?></p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="features-item">
                    <div class="features-icon"><span class="icon-genius"></span></div>
                    <h3 class="features-title font-alt"><?= Yii::t('main', 'Гарантия поставки') ?></h3>
                    <p><?= Yii::t('main', 'У нас вы начиная с 2015 года можете купить и установить ручное управление и другие товары для людей с инвалидностью') ?></p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="features-item">
                    <div class="features-icon"><span class="icon-bike"></span></div>
                    <h3 class="features-title font-alt"><?= Yii::t('main', 'Доставка и покупка ручного управления') . ' ' . $model->{'city_where_' . $lang} ?></h3>
                    <p><?= Yii::t('main', 'Мы доставляем и устанавливаем ручные управления по Украине. Можете купить и установить ручное управление даже') . ' ' . $model->{'city_' . $lang} ?></p>
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

<?php if (!empty($model->{'content_' . $lang})) { ?>
    <section class="module pb-0">
        <div class="" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-1">
                        <h2 class="module-title font-alt"><?= Yii::t('main', 'Купить ручное управление') . ' ' . $model->{'city_where_' . $lang} ?></h2>
                        <div class="module-subtitle font-serif"></div>
                    </div>
                    <div class="col-sm-12 cities-text">
                        <?= $model->{'content_' . $lang} ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
