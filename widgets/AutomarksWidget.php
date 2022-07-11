<?php

namespace app\widgets;

use app\models\Automark;
use yii\base\Widget;
use app\models\Lang;
use Yii;

class AutomarksWidget extends Widget
{
    public function run()
    {
        $model = Automark::findAll(['status' => true]);

        return $this->render('automarks', [
            'model' => $model
        ]);
    }
}
