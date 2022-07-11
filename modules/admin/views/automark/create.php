<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Automark */

$this->title = 'Create Automark';
$this->params['breadcrumbs'][] = ['label' => 'Automarks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="automark-create">

    <h1 class="page-header"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
