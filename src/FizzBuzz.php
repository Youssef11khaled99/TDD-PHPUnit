<?php

namespace App;


class FizzBuzz
{
    public $result = "";
    public function generate($data)
    {
        foreach ($data as $number) {
            $output = '';
        
            if ($number % 3 == 0) {
                $output .= "Fizz";
            }
        
            if ($number % 5 == 0) {
                $output .= "Buzz";
            }
        
            if ($output === '') {
                $output .= $number;
            }
        
            $this->result .= $output . '-';
        }
        $this->result = rtrim($this->result, '-');
        return $this->result;
    }

}
