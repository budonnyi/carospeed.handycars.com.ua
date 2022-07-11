<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model app\models\City */
/* @var $form yii\widgets\ActiveForm */
?>

<div>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true])->label('Город') ?>

    <?= $form->field($model, 'city_ru')->textInput(['maxlength' => true])->label("город РУ") ?>

    <?= $form->field($model, 'city_ua')->textInput(['maxlength' => true])->label("город УА") ?>
    <?= $form->field($model, 'city_pl')->textInput(['maxlength' => true])->label("город PL") ?>

    <?= $form->field($model, 'city_where_ru')->textInput(['maxlength' => true])->label("город из РУ") ?>

    <?= $form->field($model, 'city_where_ua')->textInput(['maxlength' => true])->label("город из УА") ?>
    <?= $form->field($model, 'city_where_pl')->textInput(['maxlength' => true])->label("город из PL") ?>

    <div class="row">
        <div class="col-md-4"><?= $form->field($model, 'content_ru')
                ->widget(CKEditor::className(), [
                    'editorOptions' => ElFinder::ckeditorOptions('elfinder', [
                        'preset' => 'full',
                        'inline' => false,
                    ]),
                ]); ?></div>
        <div class="col-md-4"><?= $form->field($model, 'content_ua')
                ->widget(CKEditor::className(), [
                    'editorOptions' => ElFinder::ckeditorOptions('elfinder', [
                        'preset' => 'full',
                        'inline' => false,
                    ]),
                ]); ?></div>
        <div class="col-md-4"><?= $form->field($model, 'content_pl')
                ->widget(CKEditor::className(), [
                    'editorOptions' => ElFinder::ckeditorOptions('elfinder', [
                        'preset' => 'full',
                        'inline' => false,
                    ]),
                ]); ?></div>
    </div>

    <?= $form->field($model, 'status')->dropDownList([
        1 => 'Показывать',
        0 => 'Скрыть'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
