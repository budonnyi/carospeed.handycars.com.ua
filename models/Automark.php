<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "automark".
 *
 * @property int $id
 * @property string|null $car
 * @property string|null $car_ru
 * @property string|null $car_ua
 * @property string|null $content_ru
 * @property string|null $content_ua
 * @property string|null $image
 * @property int|null $status
 * @property int|null $viewed
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Automark extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'automark';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content_ru', 'content_ua'], 'string'],
            [['status', 'viewed', 'created_at', 'updated_at'], 'integer'],
            [['car', 'car_ru', 'car_ua'], 'string', 'max' => 50],
            [['image'], 'string', 'max' => 30],
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
            'car' => 'Car',
            'car_ru' => 'Car Ru',
            'car_ua' => 'Car Ua',
            'content_ru' => 'Content Ru',
            'content_ua' => 'Content Ua',
            'status' => 'Status',
            'viewed' => 'Viewed',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
