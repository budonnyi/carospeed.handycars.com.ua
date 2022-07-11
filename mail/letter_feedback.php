<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<h2>Пришел ответ с формы захвата</h2>

<p>Отправитель: <?= $model->name ?? 'без имени' ?></p>
<p>Почта: <a href="mailto:<?= $model->email ?? '' ?>"><?= $model->email ?? '' ?></a></p>
<p>Телефон: <a href="tel:<?= $model->phone ?? '' ?>"><?= $model->phone ?? '' ?></a></p>
<p>Текст: <?= $model->message ?></p>

<p>Спасибо!</p>
