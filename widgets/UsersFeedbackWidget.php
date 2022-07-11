<?php

namespace app\widgets;

use app\models\UsersFeedback;
use yii\base\Widget;
use app\models\Lang;
use Yii;

class UsersFeedbackWidget extends Widget
{
    public function run()
    {
        $model  = UsersFeedback::findAll(['status' => true]);

        return $this->render('users-feedback', [
            'model' => $model
        ]);
    }
}
