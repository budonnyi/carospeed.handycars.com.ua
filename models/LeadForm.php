<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lead_form".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $message
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class LeadForm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lead_form';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'message'], 'required', 'on' => 'bottomForm'],
            [['name', 'phone'], 'required', 'on' => 'default'],
            [['message'], 'string'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['name', 'phone'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 250],
//            ['phone', 'string', 'min' => 10, 'tooShort' => 'Слишком мало цифр в номере'],
            [['phone', 'email'], 'validatePhoneEmailEmpty', 'skipOnEmpty' => false],
        ];
    }

    public function validatePhoneEmailEmpty()
    {
        if (empty($this->phone) && empty($this->email)) {
            $errorMsg = 'Укажите ваш email или телефон';
            $this->addError('phone', $errorMsg);
            $this->addError('email', $errorMsg);
        }

        if (!empty($this->phone) && (strlen($this->phone) < 10)) {
            $errorMsg = 'Слишком мало цифр в номере телефона';
            $this->addError('phone', $errorMsg);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'email' => 'Email',
            'message' => 'Message',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function sendEmail()
    {
        return Yii::$app->mailer->compose('letter_feedback', [
            'model' => $this
        ])->setTo(['budonnyi@gmail.com', 'budonnaya@me.com'])
            ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
            ->setSubject('Сообщение с CAROSPEED')
            ->send();
    }
}
