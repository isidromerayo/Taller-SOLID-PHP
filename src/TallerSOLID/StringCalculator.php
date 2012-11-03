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
        $delimiter = ',';
        $string = $number;
        if (strpos($number, '//') === 0) {
            $delimiter = substr($number, 2, 1);
            $string = substr($number, 5);
        }
        $tam = strlen($string);
        for ($i=0; $i < $tam ; $i++) {
            if ($string[$i] !== $delimiter ) {
                $result[] = $string[$i];
            }
        }
        return $result;
    }
    private function getSeparador()
    {

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
