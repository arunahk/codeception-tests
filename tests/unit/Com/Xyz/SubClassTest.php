<?php
namespace Com\Xyz;

/**
 * Class SubClassTest
 * @package Com\Xyz
 *
 * @coversDefaultClass \com\xyz\SubClass
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
     * @covers :
     */
    public function testSomeFeature()
    {

    }
}