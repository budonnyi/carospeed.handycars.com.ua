<?php

namespace app\widgets;

use Yii;
use yii\base\Widget;

class FooterWidget extends Widget
{

    public function run()
    {
        if ($contactFormModel->load(Yii::$app->request->post()) && $contactFormModel->validate()) {
            $name = $contactFormModel->name;
//            $phone = $contactFormModel->phone;
            $email = $contactFormModel->email;
            $body = $contactFormModel->body;
            if ($contactFormModel->sendEmail($name, $email, $body)) {
                Yii::$app->session->setFlash('success', 'Дякуємо за повідомлення!');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error occured when sending your message.');
            }

            return true; //$this->refresh();
        }

        return $this->render('footer', ['storeProducts' => $storeProducts, 'contactFormModel' => $contactFormModel, 'popularProducts' => $popularProducts]);
    }
}
