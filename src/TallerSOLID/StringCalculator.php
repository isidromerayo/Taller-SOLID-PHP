<?php
namespace TallerSOLID;

use TallerSOLID\ParserCalculator;

class StringCalculator
{
    public function add($number)
    {
        if (empty($number)) {
            return 0;
        }
        $parser = ParserCalculator::parseString($number);
        $result = $this->sum($parser);
        return $result;
    }

    private function sum($numbers)
    {
        $result = 0;
        for ($i=0; $i < sizeof($numbers); $i++) {
            $result += $numbers[$i];
        }
        return $result;
    }
}
