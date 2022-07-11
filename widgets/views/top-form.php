<?php

use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;
use yii\helpers\Html;

?>

<div class="modal-feedback show feedback">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header header-form-wrapper">
                <h2 class="modal-title" style="text-align: center; color: #000"><?= Yii::t('main', 'Оставьте заявку') ?></h2>
            </div>
            <div class="modal-body">
                <h5 style="color: #000"><?= Yii::t('main', 'И получите предложение на установку ручного управления на ваш автомобиль') ?></h5>
            </div>

            <?php $form = ActiveForm::begin(['id' => 'contact-form-top']); ?>

            <?= $form->field($model, 'name')
                ->textInput(['placeholder' => Yii::t('main', "Ваше имя")])
                ->label(false) ?>

            <?= $form->field($model, 'phone')
                ->widget(\yii\widgets\MaskedInput::className(), [
                    'options' => [
                        'id' => 'phone',
                        'placeholder' => Yii::t('main', 'Ваш телефон')
                    ],
                    'clientOptions' => [
                        'clearIncomplete' => true,
                        'removeMaskOnSubmit' => true,
                    ],
                    'mask' => '+38 999 9999999',
                ])->label(false) ?>

            <div class="form-group">
                <?= \yii\helpers\Html::submitButton(Yii::t('main', 'Отправить'), [
                    'class' => 'btn btn-block btn-round custom-btn btn-danger',
                    'name' => 'contact-button'
                ]) ?>
            </div>
            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
