<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Automark */

$this->title = 'Редактировать Автомарку: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Automarks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="automark-update">

    <h1 class="page-header"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
