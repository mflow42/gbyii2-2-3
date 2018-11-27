<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 27.11.2018
 * Time: 1:56
 */

/** @var $time string */
/** @var $this \yii\web\View */

use yii\widgets\Pjax;
use yii\bootstrap\Html;

$myScript = <<< JS
    setInterval(function() {
      $('#myBtn').click(); //Кликаем по кнопке с помощью JS
    }, 5000); //Каждые 5 секунд
JS;
$this->registerJs($myScript);
?>
<h1>PJAX Refresh</h1>
    <?php Pjax::begin(); ?>
    <?= Html::a('Получить текущее время',
    ['/ajax/refresh'],
    [
        'class' => 'btn btn-success btn-lg',
        'id' => 'myBtn',
    ])  ?>
    <p>Текущее время <?= date('j.m.Y : H:i:s', $time) ?></p>
    <?php Pjax::end(); ?>