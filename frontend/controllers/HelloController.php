<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Hello controller
 */
class HelloController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays hello world page.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
