<?php

namespace app\widgets;

use app\models\Materials;
use yii\base\Widget;
use app\models\Lang;
use Yii;

class MaterialsWidget extends Widget
{
    public function run()
    {
        $model = Materials::findAll(['status' => true]);

        return $this->render('materials', [
            'model' => $model
        ]);
    }
}
