<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Мнения пользователей';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-feedback-index">

    <h1 class="page-header"><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить мнение', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="table-wrapper">
        <div class="table-box">

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

//                    'id',
//                    'content_ru:ntext',
                    'content_ua:ntext',
                    'content_pl:ntext',
//                    'author_ru',
                    'author_ua',
                    'author_pl',
                    //'product',
                    //'status',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>

        </div>
    </div>

</div>
