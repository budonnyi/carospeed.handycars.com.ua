<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "portfolio".
 *
 * @property int $id
 * @property string $vehicle
 * @property string $device
 * @property string $image
 * @property int $status
 */
class Portfolio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'portfolio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vehicle', 'device', 'image', 'status'], 'required'],
            [['status'], 'integer'],
            [['vehicle', 'image'], 'string', 'max' => 30],
            [['device'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vehicle' => 'Vehicle',
            'device' => 'Device',
            'image' => 'Image',
            'status' => 'Status',
        ];
    }
}
