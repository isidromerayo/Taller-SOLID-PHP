<?php
namespace Test\TallerSOLID;
/**
 * StringCalculator test
 *
 * @author [author] <[email]>
 */
class ParserStringCalculatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function stringEmptyReturnArrayEmpty()
    {
        $string = '';
        $result = \TallerSOLID\ParserStringCalculator::splitStringBySeparator($string);
        $this->assertEquals($result, array());
    }
    /**
     * @test
     */
    public function stringWithTwoElementsReturnArraySizeTwo()
    {
        $string = '1,2';
        $result = \TallerSOLID\ParserStringCalculator::splitStringBySeparator($string);
        $this->assertEquals(2,sizeof($result));
    }
}