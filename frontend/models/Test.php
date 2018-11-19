<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 19.11.2018
 * Time: 23:25
 */

namespace frontend\models;


use yii\base\Model;

class Test extends Model
{
    public $a;
    public $b;

    public function sum()
    {
        return $this->a + $this->b;
    }
    public function div()
    {
        return $this->a / $this->b;
    }
}