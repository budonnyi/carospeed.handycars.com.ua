<?php

use yii\helpers\Url;

$this->registerCssFile('/css/cities-block.css');

?>

<?php if (!empty($cities)) { ?>
    <section class="module pb-0" id="cities">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 style="margin-top: 30px" class="module-title font-alt"><?= Yii::t('main', 'Где купить ручное управление') ?></h2>
                </div>
            </div>
            <div class="soflex1">
                <?php foreach ($cities as $city) { ?>
                    <?php if ($city->city != '') { ?>
                        <div class="footer-list-item">
                            <a href="<?= Url::toRoute(['site/index', 'city' => strtolower($city->city)]) ?>">
                                <?= $city->{'city_' . $lang} ?>
                            </a>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>
