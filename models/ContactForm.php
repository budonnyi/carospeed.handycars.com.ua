<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $phone;
    public $body;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'body'], 'required'],
            ['email', 'email'],
//            ['phone', 'match', 'pattern' => '/^\+38/s[0-9]{3}/s[0-9]{7}/', 'message' => 'Wrong phone number' ],
            [['phone'], 'string', 'min' => 7],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
                ->setReplyTo([$this->email => $this->name])
                ->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();

            return true;
        }
        return false;
    }

    public function sendEmail()
    {
        $ip = Yii::$app->request->userIP;

        return Yii::$app->mailer->compose('letter_order', [
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'body' => $this->body
        ])->setTo(['budonnyi@gmail.com', 'budonnaya@me.com'])
            ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
            ->setSubject('Сообщение с CAROSPEED')
            ->send();

        $feedback = new Feedback();
        $feedback->body = $this->body;
        $feedback->email = $this->email;
        $feedback->phone = $this->phone;
        $feedback->ip = Yii::$app->request->userIP;
        $feedback->is_blocked = true;
        $feedback->save(false);

        return true;
    }

    public function beforeValidate()
    {
        if (parent::beforeValidate()) {
            $this->phone = '+38' . str_replace([' ', '(', ')'], "", $this->phone);
            return parent::beforeValidate();
        } else {
            return false;
        }
    }
}
