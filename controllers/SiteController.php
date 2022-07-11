<?php

namespace app\controllers;

use app\models\Automark;
use app\models\Portfolio;
use app\models\City;
use app\models\Lang;
use Yii;
use yii\base\BaseObject;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends AppController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex($city = null, $car = null)
    {
        $citiesModel = City::findOne(['city' => $city]);
        if ($citiesModel == null) {
            // get the common model for all cities
            $citiesModel = City::findOne(['id' => 28]);
        }

        $automarkModel = Automark::findOne(['car' => $car]);

        \app\models\Lang::getCurrent()->url == 'ru'
            ? ($this->setMeta('Ручное управление для людей с инвалидностью ' . (!empty($city)
                ? $citiesModel->city_where_ru : (!empty($car) ? 'для ' . $car : '')) . ' - с доставкой',
            'ручное, управление, для авто, в автомобиль, купить, инвалида, инвалидность' . (!empty($city)
                ? ', ' . $citiesModel->city_where_ru : (!empty($car) ? ', ' . $car : '')),
            'Безопасное и надежное ручное управление в автомобиль для людей с инвалидностью и пожилых людей' . (!empty($city)
                ? 'в ' . $citiesModel->city_where_ru : (!empty($car) ? ' для ' . $car : '')) . '. 
            Большой выбор. Наличие на складе. Официальный дилер в Украине BraunAbility (Швеция), 
            опыт работы начиная с 2015 года. Звоните и мы всегда сможем договориться!',
            '/assets/images/slider-2.jpg'))
            : ($this->setMeta('Ручне управління для людей з інвалідністю ' . (!empty($city)
                ? $citiesModel->city_where_ua : (!empty($car) ? 'для ' . $car : '')) . ' - з доставкою',
            'ручне, управління, для авто, в автомобіль, купити, інвалида, інвалідність' . (!empty($city)
                ? ', ' . $citiesModel->city_where_ua : (!empty($car) ? ', ' . $car : '')),
            'Безпечне та надійне ручне управління в автомобіль для людей з інвалідністю та людей похілого віку' . (!empty($city)
                ? 'в ' . $citiesModel->city_where_ua : (!empty($car) ? ' для ' . $car : '')) . '. 
            Великий вибір. Наявність на складі. Офіційний дилер в Україні BraunAbility (Швеція), 
            досвід роботи починаючи з 2015 року. Дзвоніть і ми завжди зможемо домовитись!',
            '/assets/images/slider-2.jpg'));


        return $this->render('index', [
            'citiesModel' => $citiesModel,
            'automarkModel' => $automarkModel,
        ]);
    }

    public function actionPortfolio()
    {
        $portfolio = Portfolio::findAll(['status' => true]);

        return $this->render('portfolio', [
            'portfolio' => $portfolio
        ]);
    }

    public function actionCity($city)
    {
        $model = City::findOne(['city' => $city, 'status' => 1]);

        if ($model == null) {
            throw new \yii\web\HttpException(404, 'Запрошенной страницы не существует.');
        }

        $cities = City::findAll(['status' => 1]);

//        Lang::getCurrent()->url == 'ru' ? (
//        $this->setMeta('Купить пандус для людей с инвалидностью ' . $model->city_where_ru,
//            'пандус, купить пандус, пандус для инвалида, пандус для коляски, телескопический, раскладной, для ступеней',
//            'Магазин пандусов для людей с инвалидностью. Доставка ' . $model->city_where_ru . '. Официальный дилер в Украине BraunAbility (Швеция), опыт работы с 2015 года.',
//            '/img/pandus_sm4.jpg')) : (
//        $this->setMeta('Купити пандус для людей з інвалідністю ' . $model->city_where_ua,
//            'пандус, купити пандус, пандус для інваліда, пандус для коляски, телескопічний, розкладний, для ступенів',
//            'Магазин пандусів для людей з інвалідністю. Доставка ' . $model->city_where_ua . '. Офіційний дилер в Україні BraunAbility (Швеція), досвід роботи з 2015 року.',
//            '/img/pandus_sm4.jpg'));

        return $this->render('city', [
            'model' => $model,
            'cities' => $cities,
        ]);
    }

    public function actionCities()
    {
        $model = City::findAll(['status' => 1]);

        if ($model == null) {
            throw new \yii\web\HttpException(404, 'Запрошенной страницы не существует.');
        }

        $cities = City::findAll(['status' => 1]);

//        Lang::getCurrent()->url == 'ru' ? (
//        $this->setMeta('Купить пандус для людей с инвалидностью c доставкой по Украине',
//            'пандус, купить пандус, пандус для инвалида, пандус для коляски, телескопический, раскладной, для ступеней',
//            'Магазин пандусов для людей с инвалидностью. Доставка в любой город. Официальный дилер в Украине BraunAbility (Швеция), опыт работы с 2015 года.',
//            '/img/pandus_sm4.jpg')) : (
//        $this->setMeta('Купити пандус для людей з інвалідністю з доставкою по Україні',
//            'пандус, купити пандус, пандус для інваліда, пандус для коляски, телескопічний, розкладний, для ступенів',
//            'Магазин пандусів для людей з інвалідністю. Доставка у любе місто. Офіційний дилер в Україні BraunAbility (Швеція), досвід роботи з 2015 року.',
//            '/img/pandus_sm4.jpg'));

        return $this->render('cities', [
            'model' => $model,
            'cities' => $cities,
        ]);
    }

    public function actionAuto($auto)
    {
        $model = City::findOne(['city' => $city, 'status' => 1]);

        if ($model == null) {
            throw new \yii\web\HttpException(404, 'Запрошенной страницы не существует.');
        }

        $cities = City::findAll(['status' => 1]);

//        Lang::getCurrent()->url == 'ru' ? (
//        $this->setMeta('Купить пандус для людей с инвалидностью ' . $model->city_where_ru,
//            'пандус, купить пандус, пандус для инвалида, пандус для коляски, телескопический, раскладной, для ступеней',
//            'Магазин пандусов для людей с инвалидностью. Доставка ' . $model->city_where_ru . '. Официальный дилер в Украине BraunAbility (Швеция), опыт работы с 2015 года.',
//            '/img/pandus_sm4.jpg')) : (
//        $this->setMeta('Купити пандус для людей з інвалідністю ' . $model->city_where_ua,
//            'пандус, купити пандус, пандус для інваліда, пандус для коляски, телескопічний, розкладний, для ступенів',
//            'Магазин пандусів для людей з інвалідністю. Доставка ' . $model->city_where_ua . '. Офіційний дилер в Україні BraunAbility (Швеція), досвід роботи з 2015 року.',
//            '/img/pandus_sm4.jpg'));

        return $this->render('auto', [
            'model' => $model,
            'cities' => $cities,
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $this->layout = 'blank';

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
