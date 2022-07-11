<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\usersFeedback */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-feedback-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'content_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'content_ua')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'content_pl')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'author_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author_ua')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'author_pl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([
            1 => 'Показывать',
            0 => 'Скрыть',
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
