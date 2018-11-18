<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18.11.2018
 * Time: 10:18
 */

namespace console\controllers;

use yii\console\Controller;

class ConsoleGreatingsController extends Controller
{
    /** Displays Hello world! message */
    public function actionIndex() {
        echo 'Hello, world!';
    }
}