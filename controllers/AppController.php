<?php

namespace app\controllers;

use yii\web\Controller;
use Yii;

class AppController extends Controller
{
    public function setMeta($title = null, $keywords = null, $description = null, $image = null)
    {
        $lang = \app\models\Lang::getCurrent()->url;

        $this->view->title = $title;
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => $keywords]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => $description]);

        Yii::$app->params['title'] = $title;
        Yii::$app->params['description'] = $description;
        Yii::$app->params['site_name'] = 'Ручное управление для людей с инвалидностью';
        Yii::$app->params['image'] = Yii::getAlias('@web') . $image;
        Yii::$app->params['url'] = Yii::$app->request->pathInfo;

        return true;
    }
}
