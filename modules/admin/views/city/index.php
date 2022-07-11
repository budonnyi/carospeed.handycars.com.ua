<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Города';
$this->params['breadcrumbs'][] = $this->title;
?>
<p>

<h1 class="page-header"><?= Html::encode($this->title) ?></h1>

<p>
    <?= Html::a('Новый город', ['create'], ['class' => 'btn btn-success']) ?>
</p>

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
                        return Html::a($data->city, ['update', 'id' => $data->id]);
                    },
                    'format' => 'html'
                ],
//            'city',
//                'city_ru',
                'city_ua',
                'city_pl',
                'city_where_ua',
                'city_where_pl',
//                [
//                    'attribute' => 'content_ru',
//                    'contentOptions' => ['class' => '', 'style' => 'text-align: left'],
//                    'value' => function ($data) {
//                        return mb_substr($data->content_ru, 0, 150);
//                    },
//                    'format' => 'html'
//                ],
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
                //'image',
                //'viewed',
                [
                    'attribute' => 'status',
                    'contentOptions' => ['class' => '', 'style' => 'text-align: left'],
                    'value' => function ($data) {
                        return $data->status ? 'Показывать': 'Спрятать';
                    },
                ],
                //'created_at',

//            [
//                'class' => 'yii\grid\ActionColumn',
//                'contentOptions' => ['style' => 'width:260px;'],
//                'header' => 'Управление',
//                'template' => '{update}',
//                'buttons' => [
//
//                    //view button
//                    'update' => function ($url, $model) {
//                        return Html::a('Редактировать', $url,
//                            ['title' => 'View']);
//                    },
//                ],
//
//                'urlCreator' => function ($action, $model, $key, $index) {
//                    if ($action === 'update') {
//                        $url = \yii\helpers\Url::toRoute(['city/update', 'id' => $key]);
//                        return $url;
//                    }
//                }
//            ],
            ],
        ]); ?>

    </div>
</div>

</div>
