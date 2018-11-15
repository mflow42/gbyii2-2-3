<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about" style="background-color: orange">
  <h1><?= Html::encode($this->title) ?></h1>
  <p>Basic theme!</p>
  <p>This is the About page. You may modify the following file to customize its content:</p>

  <code><?= __FILE__ ?></code>
</div>
