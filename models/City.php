<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "city".
 *
 * @property int $id
 * @property string|null $city
 * @property string|null $city_ru
 * @property string|null $city_ua
 * @property string|null $city_where_ru
 * @property string|null $city_where_ua
 * @property string|null $content_ru
 * @property string|null $content_ua
 * @property string|null $image
 * @property int|null $viewed
 * @property int|null $status
 * @property int|null $created_at
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['viewed', 'status', 'created_at'], 'integer'],
            [['city', 'city_ru', 'city_ua', 'city_where_ru', 'city_where_ua'], 'string', 'max' => 100],
            [['content_ru', 'content_ua'], 'string'],
            [['image'], 'string', 'max' => 150],
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'city' => 'Город En',
            'city_ru' => 'Город Ru',
            'city_ua' => 'Город Ua',
            'city_where_ru' => 'Город откуда Ru',
            'city_where_ua' => 'Город откуда Ua',
            'content_ru' => 'Контент Ru',
            'content_ua' => 'Контент Ua',
            'image' => 'Image',
            'viewed' => 'Viewed',
            'status' => 'Статус',
            'created_at' => 'Created At',
        ];
    }
}
