<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 27.11.2018
 * Time: 2:34
 */

/** @var $time string */
/** @var $hash string */

use yii\widgets\Pjax;
use yii\bootstrap\Html;
?>

<div>
    <div>
        <h1>Блок отображения времени</h1>
        <?php Pjax::begin(); ?>
        <?= Html::a('Получить время', ['/ajax/blocks'], [
            'class' => 'btn btn-primary'
        ])?>
        <h2>Текущее время: <?=date('H:i:s', $time); ?></h2>
        <?php Pjax::end(); ?>
    </div>

    <div>
        <h1>Блок отображения hash</h1>
        <?php Pjax::begin(); ?>
        <?= Html::a('Получить время', ['/ajax/blocks'], [
            'class' => 'btn btn-primary'
        ])?>
        <h2>Текущий hash: <?=Html::encode($hash); ?></h2>
        <?php Pjax::end(); ?>
    </div>
</div>
