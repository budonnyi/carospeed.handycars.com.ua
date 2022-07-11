<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\usersFeedback */

$this->title = 'Редактировать мнение: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users Feedbacks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="users-feedback-update">

    <h1 class="page-header"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
