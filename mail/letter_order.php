<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<p>Пришел новый ответ.</p>

<p>Отправитель: <?= $name ?></p>

<?php if (!empty($email)): ?>
    <p>Почта: <a href="mailto:<?= $email ?>"><?= $email ?></a></p>
<?php endif; ?>

<p>Телефон: <a href="tel:<?= $phone ?>"><?= $phone ?></a></p>
<p>Текст: <?= $body ?></p>

<p>Спасибо!</p>
