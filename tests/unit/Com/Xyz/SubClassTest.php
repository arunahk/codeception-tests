<?php

namespace Test\Com\Xyz;

use com\xyz\SubClass;

/**
 * Class SubClassTest
 * @package Com\Xyz
 *
 */
class SubClassTest extends \Codeception\TestCase\Test
{
    /**
     * use Verify;
     */
    use \Codeception\Specify;

    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    /**
     * @test
     *
     * @covers \com\xyz\SubClass::method1
     */
    public function testMethod1()
    {
        $obj = new SubClass();
        verify($obj->method1())->equals('sub:method1');
    }

    /**
     * @test
     *
     * @covers \com\xyz\SubClass::method2
     */
    public function testMethod2()
    {
        $obj = new SubClass();
        verify($obj->method2())->equals('super:method2');
    }
}