<?php

use yii\helpers\Html;
use yii\helpers\Url;

$lang = \app\models\Lang::getCurrent()->url;

$this->registerCssFile('/assets/css/automarks.css');

?>

<div class="module" id="automarks-flex">
    <div class="container">
        <div class="box">
            <?php if (isset($model)) { ?>
                <?php foreach ($model as $item) { ?>

                    <a href="<?= Url::toRoute(['site/index', 'car' => strtolower($item->car)]) ?>">
                        <div class="automark">
                            <div class="automark-image">
                                <img src="/assets/images/automarks/<?= strtolower($item->image) ?>"
                                     width="60"
                                     height="60"
                                     alt="Ручное управление в <?= $item->{'car_' . $lang} ?>"/>
                            </div>
                            <div class="automark-title"><?= $item->{'car_' . $lang} ?></div>
                        </div>
                    </a>

                <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>


