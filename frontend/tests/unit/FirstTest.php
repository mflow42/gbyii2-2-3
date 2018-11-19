<?php namespace frontend\tests;

class FirstTest extends \Codeception\Test\Unit
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
    public function testSomeFeature()
    {
        $this->assertTrue(true, 'Test passed');
    }

    //method2
    public function testTask()
    {
        $this->assertEquals(5, 2 + 3);
    }
}