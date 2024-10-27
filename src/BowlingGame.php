<?php

namespace App;

class BowlingGame
{
    public $totalScore = 0;
    public $haveStrick = false;
    public $haveSpare = false;

    public function frame($frame)
    {
        if ($this->haveStrick) {
            $this->totalScore += $frame[0] + $frame[1];
            $this->haveStrick = false;
            echo "here";
        }
        if ($this->haveSpare) {
            $this->totalScore += $frame[0];
            $this->haveSpare = false;
            echo "here2";
        }
        if ($frame[0] + $frame[1] === 10 && $frame[0] !== 10 && $frame[1] !== 10) {
            $this->haveSpare = true;
        }
        foreach( $frame as $roll) {
            
            if ($roll == 10) {
                $this->haveStrick = true;
            }
            $this->totalScore += $roll;
        }
    }

    public function score() {
        return $this->totalScore;
    }
}
