<?php
namespace TallerSOLID;
/**
 * Description of ParserCalculator
 *
 * @author isidromerayo
 */
class ParserCalculator
{
    static public function parseString($string)
    {
        $result = array();
        $delimiter = ',';
        $origen = $string;
        if (strpos($string, '//') === 0) {
            $delimiter = substr($string, 2, 1);
            $origen = substr($string, 5);
        }
        $tam = strlen($origen);
        for ($i=0; $i < $tam ; $i++) {
            if ($origen[$i] !== $delimiter ) {
                $result[] = $origen[$i];
            }
        }
        return $result;
    }
}
