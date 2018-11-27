<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 26.11.2018
 * Time: 22:42
 */

namespace frontend\controllers;

use yii\web\Controller;

class AjaxController extends Controller
{
    public function actionJquery()
    {
        return $this->render('jquery');
    }

    //Данные для AJAX запроса\
    public function actionJqueryData()
    {
        echo json_encode(['tel' => '+79661161122']);
        exit(0);
    }

    //PJAX
    public function actionTime()
    {
        $time = time();
        return $this->render('time', [
            'time' => $time,
        ]);
    }

    //PJAX Refresh
    public function actionRefresh()
    {
        $time = time();
        return $this->render('refresh', [
            'time' => $time,
        ]);
    }

    //2 метода и представление
    public function actionOne()
    {
        $date = date('i:s');
        return $this->render('date-format', ['date' => $date]);
    }

    public function actionTwo()
    {
        $date = date('H:i:s');
        return $this->render('date-format', ['date' => $date]);
    }

    //Работа с несколькими блоками
    public function actionBlocks()
    {
        $time = time();
        $hashTime = md5($time);

        return $this->render('blocks', [
            'time' => $time,
            'hash' => $hashTime,
        ]);
    }
}