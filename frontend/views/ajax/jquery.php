<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 26.11.2018
 * Time: 22:44
 */
/** @var $this \yii\web\View */

$myJsScript = <<< JS
$('#btn1').on('click', function() {
  $.ajax({
    url: '/frontend/web/index.php?r=ajax/jquery-data', //Получение данных
    type: 'GET',
    data: {'myData': 'myValue'},
    dataType: 'json',
    cache: false,
    success: function(data){
      $('#data').text(data['tel']);
    },
    error: function(error) {
      log(error);
    }
  });
});
JS;

//Регистрация JS скрипта
$this->registerJs($myJsScript);
?>
<div id="data"></div>
<button id="btn1">Получить данные</button>