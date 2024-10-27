<?php

namespace App;


class Player
{
    public $name;
    private $points = 0;
    const DIC = [
        0 => "love",
        1 => "fifteen",
        2 => "thirty",
        3 => "forty",
    ];

    public function __construct($name) {
        $this->name = $name;
    }

    public function score()
    {
        return $this->points;
    }
    
    public function pointTo($score)
    {
        $this->points = $score;
    }

    public function pointToTerm()
    {
        return self::DIC[$this->points];
    }
}