<?php
namespace TallerSOLID;

class StringCalculator
{
    public function add($number)
    {
        if (empty($number)) {
            return 0;
        }
        $parser = $this->parseString($number);
        $result = $this->sum($parser);
        return $result;
    }

    private function parseString($number)
    {
        $result = array();
        $tam = strlen($number);
        for ($i=0; $i < $tam ; $i++) {
            if ($number[$i] !== ',' ) {
                $result[] = $number[$i];
            }
        }
        return $result;
    }

    private function sum($numbers) {
        $result = 0;
        for ($i=0; $i < sizeof($numbers); $i++) {
            $result += $numbers[$i];
        }
        return $result;
    }
}
