<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 27.11.2018
 * Time: 2:27
 */

/** @var $date string */

use yii\widgets\Pjax;
use yii\bootstrap\Html;

?>
<h1>PJAX</h1>
<?php Pjax::begin(); ?>
    <?= Html::a('Получить минуты и секунды', ['/ajax/one'], [
        'class' => 'btn btn-default btn-lg',
    ]); ?>

    <?= Html::a('Получить часы, минуты и секунды', ['/ajax/two'], [
        'class' => 'btn btn-warning btn-lg',
    ]); ?>
<h2>Значение времени: <?= Html::encode($date); ?></h2>
<?php Pjax::end(); ?>
