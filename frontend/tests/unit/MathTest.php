<?php namespace frontend\tests;

use frontend\models\Test;

class MathTest extends \Codeception\Test\Unit
{
    /**
     * @var \frontend\tests\UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSum()
    {
        //Набор 1
        $model = new Test();
        $model->a = 5;
        $model->b = 10;

        $result = $model->sum();
        $this->assertTrue(is_numeric($result));
        $this->assertEquals(15, $result);

        //Набор 2
        $model = new Test();
        $model->a = 50;
        $model->b = 120;

        $result = $model->sum();
        $this->assertTrue(is_numeric($result));
        $this->assertEquals(170, $result);
    }

    // test divide
    public function testDiv()
    {
        //Набор 1
        $model = new Test();
        $model->a = 5;
        $model->b = 10;

        $result = $model->div();
        $this->assertTrue(is_numeric($result));
        $this->assertEquals(0.5, $result);

        //Набор 2
        $model = new Test();
        $model->a = 500;
        $model->b = 100;

        $result = $model->div();
        $this->assertTrue(is_numeric($result));
        $this->assertEquals(5, $result);
    }
}