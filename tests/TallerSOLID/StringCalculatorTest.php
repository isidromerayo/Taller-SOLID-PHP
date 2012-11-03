<?php
namespace Test\TallerSOLID;
/**
 * StringCalculator test
 *
 * @author [author] <[email]>
 */
class AStringCalculator extends \PHPUnit_Framework_TestCase
{
    private $calculator;

    public function setUp()
    {
        $this->calculator = new \TallerSOLID\StringCalculator();
    }
    /**
     * @test
     */
    public function willReturnZeroIfTakeEmptyString()
    {
        $result = $this->calculator->add('');
        $this->assertEquals(0, $result);
    }
    /**
     * @test
     */
    public function willReturnOneIfTakeOneNumber()
    {
        $result = $this->calculator->add('1');
        $this->assertEquals(1, $result);
    }
    /**
     * @test
     */
    public function willReturnThreeIfTakeOneAndTwoNumbers()
    {
        $result = $this->calculator->add('1,2');
        $this->assertEquals(3, $result);
    }
    /**
     * @test
     */
    public function willReturnThreeIfTakeOneAndTwoNumbersChangeDefaultSeparator()
    {
        $result = $this->calculator->add('//*\n1*4');
        $this->assertEquals(5, $result);
    }
}