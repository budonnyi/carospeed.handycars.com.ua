<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\FileHelper;
use app\models\Db;

class DbController extends Controller
{
    //Путь к файлам БД по-умолчанию
    public $dumpPath = '@components/db/';

    public function actionIndex($path = null)
    {
//        var_dump($this->dumpPath);die;
        //Получаем массива путей к файлам с дампом БД (.sql)
        $path = FileHelper::normalizePath(Yii::getAlias($this->dumpPath));
        $files = FileHelper::findFiles($path, ['only' => ['*.sql'], 'recursive' => FALSE]);
        $model = new Db();
        //Метод формирует массив в нужный для виджета GridView формат с пагинацией
        $dataProvider = $model->getFiles($files);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionImport($path)
    {
        $model = new Db();
        //Метод делает импорт дампа БД
        $model->import($path);
    }

    public function actionExport($path = null)
    {
        $path = $path ?: $this->dumpPath;
        $model = new Db();
        //Метод экспортирует данные из БД в указанную папку
        $model->export($path);
    }

    public function actionDelete($path)
    {
        $model = new Db();
        //Метод удаляет дамп БД
        $model->delete($path);
    }
}
