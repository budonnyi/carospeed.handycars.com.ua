<?php

namespace app\widgets;

use app\models\City;
use app\models\ContactForm;
use Yii;
use yii\base\Widget;

class NavbarWidget extends Widget
{
    public function run()
    {
        $cities = City::findAll(['status' => 1]);

        return $this->render('navbar', [
            'cities' => $cities]);
    }
}
