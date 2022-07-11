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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->registerCsrfMetaTags() ?>

    <link id="color-scheme" href="/assets/css/colors/default.css" rel="stylesheet">
    <link rel="canonical" href="https://carospeed.handycars.com.ua"/>

    <?php $this->head() ?>

    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="194x194" href="/favicons/favicon-194x194.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/favicons/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">

    <link rel="manifest" href="/favicons/site.webmanifest">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#111121">
    <link rel="shortcut icon" href="/favicons/favicon.ico" type="image/x-icon">

    <?php if ($lang === 'ru') { ?>
        <meta property="og:site_name" content="Ручное управление для людей с инвалидностью">
        <meta property="og:title" content="Ручное управление для людей с инвалидностью в Киеве – Хендикарс - Доставляем по Украине">
        <meta property="og:description"
              content="Ручное управление для людей с инвалидностью ✅ Carospeed ✅ 100% гарантия качества ✅ Всегда в наличии ➜ Заходите!">
    <?php } else { ?>
        <meta property="og:site_name" content="Ручне управління для людей з інвалідністю">
        <meta property="og:title" content="Ручне управління для людей з інвалідністю у Києві – Хендикарс - Доставляємо по Україні">
        <meta property="og:description"
              content="Ручне управління для людей з інвалідністю ✅ Carospeed ✅ 100% гарантія якості ✅ Завжди в наявності ➜ Заходьте!">
    <?php } ?>
    <meta property="og:url" content="https://carospeed.handycars.com.ua/"/>
    <meta property="og:image" content="<?= Yii::$app->params['image'] ?? '/assets/images/slider-1.jpg' ?>">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="630"/>
    <meta property="og:type" content="website">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Ручное управление на автомобиль для инвалида">
    <meta name="application-name" content="Пандусы">

    <meta name="facebook-domain-verification" content="91niq477yvmu8cfozkpis7od44p1il"/>

    <?php $description = $lang == 'ru'
        ? 'Безопасное и надежное ручное управление для людей с инвалидностью. Большой выбор. Наличие на складе. Официальный дилер в Украине BraunAbility (Швеция)'
        : 'Безпечне та надійне ручне управління для людей з інвалідністю. Великий вибір. Наявність на складі. Офіційний дилер BraunAbility (Швеція) на території України.';
    ?>

    <?= \yii\helpers\Html::script(isset($this->params['schema'])
        ? $this->params['schema']
        : \yii\helpers\Json::encode([
            '@context' => 'https://schema.org',
            '@type' => 'Thing',
            'name' => Yii::t('main', 'Ручное управление для людей с инвалидностью'),
            'image' => "https://carospeed.handycars.com.ua/assets/images/slider-1.jpg",
            'url' => Url::canonical(),
            'descriptions' => $description,
            'author' => [
                '@type' => 'Organization',
                'name' => Yii::t('main', 'Хендікарс ТОВ'),
                'url' => 'https://carospeed.handycars.com.ua',
                'telephone' => '+380962010191',
            ]
        ]), [
        'type' => 'application/ld+json',
    ]) ?>

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TSZFB6F');</script>
    <!-- End Google Tag Manager -->

    <!-- pinterest verify -->
    <meta name="p:domain_verify" content="c68303539bfe44e2f9787be99fc735e0"/>
</head>
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
<?php $this->beginBody() ?>

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TSZFB6F"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<main>
    <div class="page-loader">
        <div class="loader">Loading...</div>
    </div>

    <?= \app\widgets\NavbarWidget::widget() ?>

</main>

<?= $content ?>

<footer class="footer">
    <div class="footer-top icon-maps position-relative">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                            <span class="footer-phone icon-phone" itemprop="telephone">
                                <a href="tel:+380962010191">+38 /096/ 201-01-91</a>
                            </span>
                    <span class="footer-phone icon icon-phone" itemprop="telephone">
                                <a href="tel:+380660679771">+38 /066/ 067-97-71</a>
                            </span>
                </div>
                <div class="col-md-4 text-center" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                    <meta itemprop="addressCountry" content="UA">
                    <meta itemprop="addressLocality" content="Украина, Киев, Саперно-Слободская 22">
                    <meta itemprop="postalCode" content="03124">
                    <div class="footer-address" itemprop="streetAddress"><?= Yii::t('main', 'Украина, Киев, Саперно-Слободская 22') ?></div>
                    <a href="https://goo.gl/maps/zX8HsqF5nSVnS7WR6" target="_blank" class="footer-gmap-link dashed-link"
                       rel="nofollow"><?= Yii::t('main', 'Карта проезда в Google Maps') ?></a>
                </div>
                <div class="col-md-4 text-center">
                    <span class="footer-work-time">ПН-СБ: 9.00 - 19:00</span>
                    <span class="footer-work-time icon icon-work-time"><?= Yii::t('main', 'ВС: Выходной') ?></span>
                </div>
            </div>
            <div class="text-center"><?= Yii::t('main', 'Остались вопросы, пишите нам!') ?></div>
            <div class="social-buttons text-center mt-1">
                <a class="" href="viber://chat?number=%2B380962010191"
                   title="Перейти в чат Viber">
                    <img src="/images/social_icon/viber.png" alt="Перейти в чат Viber"></a>
                <a class="" href="tg://resolve?number=%2B380962010191"
                   title="Перейти в чат Telegram">
                    <img src="/images/social_icon/telegram.png" alt="Перейти в чат Telegram"></a>
            </div>
        </div>
    </div>
</footer>

<?= \app\widgets\CitiesWidget::widget() ?>

<footer class="footer" style="margin-top: 200px">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <p class="copyright font-alt">&copy; 2015&nbsp;<a href="<?= Url::toRoute(['']) ?>">HANDYcars</a>, <?= Yii::t('main', 'Все права защищены') ?></p>
            </div>
            <div class="col-sm-6">
                <div class="footer-social-links" style="margin: auto; font-size: 22px; margin-top: -10px">
                    <a href="https://www.facebook.com/handycarsltd" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/handycars.com.ua" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UC4eXRfe0dY8F5L8Ik4zUR3w" target="_blank">
                        <i class="fa fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="scroll-up">
    <a href="#totop">
        <i class="fa fa-angle-double-up"></i>
    </a>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
