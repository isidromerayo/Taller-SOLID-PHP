<?php
namespace TallerSOLID;

class ParserStringCalculator
{
    static public function splitStringBySeparator($string)
    {
        if (empty($string)) {
            return array();
        }
        $result = split(',', $string);
        return $result;
    }
}