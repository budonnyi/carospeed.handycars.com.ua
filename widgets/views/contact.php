<?php

use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;
use yii\helpers\Html;

?>

<section class="module" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt"><?= Yii::t('main', "Связаться с нами") ?></h2>
                <div class="module-subtitle font-serif"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="alt-features-item mt-0">

                    <div class="alt-features-icon"><span class="icon-map"></span></div>
                    <h3 class="alt-features-title font-alt"><?= Yii::t('main', 'Контакты') ?></h3>
                    <?= Yii::t('main', 'ТОВ Хендікарс') ?><br/>
                    <?= Yii::t('main', 'вул.Саперно-Слобідська, 22') ?><br/>
                    <?= Yii::t('main', 'м.Київ') ?><br/><br>
                    <a href="https://goo.gl/maps/zX8HsqF5nSVnS7WR6"
                       target="_blank" class="footer-gmap-link dashed-link"
                       rel="nofollow"><?= Yii::t('main', 'Карта проїзду в Google Maps') ?></a>
                </div>
                <div class="alt-features-item mt-xs-60">
                    <div class="alt-features-icon"><span class="icon-megaphone"></span></div>
                    <h3 class="alt-features-title font-alt"><?= Yii::t('main', "Зв'язок") ?></h3>
                    Email: <a href="mailto:info@handycars.com.ua">info@handycars.com.ua</a><br/>
                    Тел: <a href="tel:+380962010191">+380 96 2010191</a><br/>
                    Тел: <a href="tel:+380660679771">+380 66 0679771</a><br/>
                </div>
            </div>
            <div class="col-sm-8">
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')
                    ->textInput(['placeholder' => Yii::t('main', "Ваше имя")])
                    ->label(false) ?>

                <?= $form->field($model, 'phone')
                    ->widget(\yii\widgets\MaskedInput::className(), [
                        'options' => [
                            'id' => 'phone',
                            'placeholder' => Yii::t('main', 'Ваш Телефон')
                        ],
                        'clientOptions' => [
                            'clearIncomplete' => true,
                            'removeMaskOnSubmit' => true,
                        ],
                        'mask' => '+38 999 9999999',
                    ])->label(false) ?>

                <?= $form->field($model, 'email')->textInput(['placeholder' => Yii::t('main', 'Ваш Email')])->label(false) ?>

                <?= $form->field($model, 'message')
                    ->textarea(['rows' => 6, 'placeholder' => Yii::t('main', 'Ваше сообщение')])->label(false) ?>

                <div class="form-group">
                    <?= Html::submitButton(Yii::t('main', 'Відправити'), ['class' => 'btn btn-block btn-round btn-d', 'name' => 'contact-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>

                <?php if (Yii::$app->session->hasFlash('success')): ?>
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <?= Yii::$app->session->getFlash('success') ?>
                    </div>
                <?php endif; ?>

                <?php if (Yii::$app->session->hasFlash('error')): ?>
                    <div class="alert alert-danger alert-dismissable" role="alert">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <?= Yii::$app->session->getFlash('error') ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
