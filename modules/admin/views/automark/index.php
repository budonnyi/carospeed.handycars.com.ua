<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AutomarkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Автомарки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="automark-index">

    <h1 class="page-header"><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Новая автомарка', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="table-wrapper">
        <div class="table-box">

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    [
                        'attribute' => 'id',
                        'headerOptions' => ['style' => 'text-align:center'],
                        'contentOptions' => ['class' => '', 'style' => 'text-align: center'],
                        'value' => function ($data) {
                            return Html::a($data->car, ['update', 'id' => $data->id]);
                        },
                        'format' => 'html'
                    ],
                    'car',
//                    'car_ru',
                    'car_ua',
                    'car_pl',
//                    [
//                        'attribute' => 'content_ru',
//                        'contentOptions' => ['class' => '', 'style' => 'text-align: left'],
//                        'value' => function ($data) {
//                            return mb_substr($data->content_ru, 0, 150);
//                        },
//                        'format' => 'html'
//                    ],
                    [
                        'attribute' => 'content_ua',
                        'contentOptions' => ['class' => '', 'style' => 'text-align: left'],
                        'value' => function ($data) {
                            return mb_substr($data->content_ua, 0, 150);
                        },
                        'format' => 'html'
                    ],
                    [
                        'attribute' => 'content_pl',
                        'contentOptions' => ['class' => '', 'style' => 'text-align: left'],
                        'value' => function ($data) {
                            return mb_substr($data->content_pl, 0, 150);
                        },
                        'format' => 'html'
                    ],
                    //'status',
                    //'viewed',
                    //'created_at',
                    //'updated_at',
                ],
            ]); ?>
        </div>
    </div>

</div>
