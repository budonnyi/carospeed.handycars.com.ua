<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\usersFeedback */

$this->title = 'Создание мнения';
$this->params['breadcrumbs'][] = ['label' => 'Users Feedbacks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-feedback-create">

    <h1 class="page-header"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
