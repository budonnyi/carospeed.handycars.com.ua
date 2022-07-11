<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users_feedback".
 *
 * @property int $id
 * @property string|null $content_ru
 * @property string|null $content_ua
 * @property string|null $author_ru
 * @property string|null $author_ua
 * @property string|null $product
 * @property int|null $status
 */
class UsersFeedback extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users_feedback';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content_ru', 'content_ua'], 'string'],
            [['status'], 'integer'],
            [['author_ru', 'author_ua', 'product'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content_ru' => 'Мнение Ru',
            'content_ua' => 'Мнение Ua',
            'author_ru' => 'Автор Ru',
            'author_ua' => 'Автор Ua',
            'product' => 'Продукт',
            'status' => 'Статус',
        ];
    }
}
