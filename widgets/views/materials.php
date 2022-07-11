<?php

use yii\helpers\Html;

$lang = \app\models\Lang::getCurrent()->url;

?>

<section class="module" id="materials">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt"><?= Yii::t('main', 'Материалы для скачивания') ?></h2>
                <div class="module-subtitle font-serif"><?= Yii::t('main', 'Материалы для более подробного изучения устройства ручного управления.') ?></div>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel text-center" data-items="4" data-pagination="false" data-navigation="false">
                <?php foreach ($model as $item) { ?>
                    <div class="owl-item">
                        <div class="col-sm-12 col-lg-12 col-md-12">
                            <div class="ex-product">
                                <a href="/assets/downloads/<?= $item->link ?>" target="_blank">
                                    <img src="/assets/downloads/<?= $item->image ?>"
                                         alt="<?= $item->{'title_' . $lang} ?>"/></a>
                                <h4 class="shop-item-title font-alt">
                                    <a href="/assets/downloads/<?= $item->link ?>"><?= $item->{'title_' . $lang} ?></a>
                                </h4>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<script>
    window.addEventListener('resize', function(event) {
        let currentWidth = window.innerWidth;

        if(currentWidth <= 1000) {
            $('.owl-carousel').data('items', 3);
        } else {
            $('.owl-carousel').data('items', 5);
        }
    }, true);
</script>