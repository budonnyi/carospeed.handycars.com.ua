<?php

namespace app\widgets;

use app\models\City;
use Yii;
use yii\base\Widget;
use app\models\Lang;

class CitiesWidget extends Widget
{
    public function run()
    {
        $cities = City::findAll(['status' => 1]);
        $lang = Lang::getCurrent()->url;

        return $this->render('cities', ['cities' => $cities, 'lang' => $lang]);
    }
}
