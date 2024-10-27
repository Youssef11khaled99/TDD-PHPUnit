<?php

namespace App;

class RomanNumerals
{
    const NUMERALS = [
        'M' => 1000,
        'CM' => 900,
        'D'=> 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    ];

    public static function generate($number) {
        $result = '';

        foreach (static::NUMERALS as $numeral => $arabicNumber) {
            for(; $number >= $arabicNumber; $number -= $arabicNumber) {
                $result .= $numeral;
            }
        }
        return $result;
        // Old Logic
        // for(; $number > 0; $number--){
        //     if ($number > 49 && $number < 100) {
        //         $result .= "L";
        //         $number -= 49;
        //         continue;
        //     }
        //     if ($number > 9 && $number < 40) {
        //         $result .= "X";
        //         $number -= 9;
        //         continue;
        //     }
        //     if ($number > 4 && $number < 9) {
        //         $result .= "V";
        //         $number -= 4;
        //         continue;
        //     }
        //     $result .= "I";
        //     if ($number == 40) {
        //         $result .= "L";
        //         $number -= 39;
        //         continue;
        //     }
        //     if ($number == 9) {
        //         $result .= "X";
        //         $number -= 8;
        //         continue;
        //     }
        //     if ($number == 4) {
        //         $result .= "V";
        //         $number -= 3;
        //         continue;
        //     }
            
        // }
    }
}

