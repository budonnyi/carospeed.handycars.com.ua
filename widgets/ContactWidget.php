<?php

namespace app\widgets;

use app\models\LeadForm;
use yii\base\Widget;
use app\models\Lang;
use app\models\ContactForm;
use Yii;

class ContactWidget extends Widget
{
    public function run()
    {
        $model = new LeadForm(['scenario' => 'bottomForm']);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', Lang::getCurrent()->url == 'ru' ? 'Спасибо за сообщение!' : 'Дякуємо за повідомлення!');
            } else {
                Yii::$app->session->setFlash('error', Lang::getCurrent()->url == 'ru' ? 'Чтото пошло не так..' : 'Щось пішло не так..');
            }

            $model = new LeadForm();
        }

        return $this->render('contact', [
            'model' => $model
        ]);
    }
}
