<?php

namespace App;

use Exception;

class StringCalculator
{
    public function add(string $equation, $separator = ",") {
        if ($equation == "") {
            return 0;
        }

        if (strpos($equation, $separator) === false) {
            return (int)$equation;
        } else {
            return $this->addNumbersFromString($equation, $separator);
        }
    }
    
    private function addNumbersFromString($input, $separator = ",") {
        // Replace newlines with the provided separator so they are treated the same
        $input = str_replace("\n", $separator, $input);
    
        // Split the string by the separator to get individual numbers
        $numbers = explode($separator, $input);
    
        // Convert the strings to integers, check for negatives, and handle numbers > 1000
        $numbers = array_map(function($num) {
            $num = intval($num); // Convert to integer
    
            if ($num < 0) {
                throw new Exception("Negative numbers are not allowed: $num");
            }
    
            return ($num > 1000) ? 0 : $num; // If greater than 1000, make it 0
        }, $numbers);
    
        // Sum the numbers
        return array_sum($numbers);
    }
}

