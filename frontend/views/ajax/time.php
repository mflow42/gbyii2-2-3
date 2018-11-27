<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 26.11.2018
 * Time: 23:44
 */

/** @var $time string */

use yii\widgets\Pjax;
use yii\bootstrap\Html;

?>

<div>
  <h1>PJAX</h1>
    <?php Pjax::begin(); ?>
    <?= Html::a('Получить текущее время', ['/ajax/time'], ['class' => 'btn btn-success btn-lg']) ?>
  <p>Текущее время <?= date('j.m.Y : H:i:s', $time) ?></p>
    <?php Pjax::end(); ?>
</div>
