<?php
namespace TallerSOLID;

class StringCalculator
{
    public function add($number)
    {
        if (empty($number)) {
            return 0;
        }
        $parser = ParserStringCalculator::splitStringBySeparator($number);
        $result = $this->sum($parser);
        return $result;
    }

    private function parseString($number)
    {
        return split(',', $number);
    }

    private function sum($numbers) {
        $result = 0;
        for ($i=0; $i < sizeof($numbers); $i++) {
            $result += $numbers[$i];
        }
        return $result;
    }
}
