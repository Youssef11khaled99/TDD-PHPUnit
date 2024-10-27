<?php

namespace App;

class TennisMatch
{
    protected Player $playerOne;
    protected Player $playerTwo;

    public function __construct(Player $playerOne, Player $playerTwo) {
        $this->playerOne = $playerOne;
        $this->playerTwo = $playerTwo;
    }

    public function score()
    {
        if ($this->hasWinner()) {
            return $this->leader()->name . " Wins";
        }
        if ($this->isAdvantage()) {
            return "Advantage to " . $this->leader()->name;
        }
        if ($this->isDeuce()) {
            return 'deuce';
        }
        
        return $this->playerOne->pointToTerm() . "-" . $this->playerTwo->pointToTerm();
    }

    public function hasWinner()
    {
        $scoreDiff = abs($this->playerOne->score() - $this->playerTwo->score());
        if (($this->playerOne->score() >= 4 || $this->playerTwo->score() >= 4) && $scoreDiff >= 2) {
            return true;
        }

        return false;
    }

    public function leader()
    {
        return $this->playerOne->score() > $this->playerTwo->score() ? $this->playerOne : $this->playerTwo;
    }

    public function isDeuce()
    {
        if (($this->playerOne->score() >= 3 && $this->playerTwo->score() >= 3) && $this->playerOne->score() == $this->playerTwo->score()) {
            return true;
        }
        return false;
    }

    public function isAdvantage()
    {
        if (($this->playerOne->score() >= 3 && $this->playerTwo->score() >= 3) && abs($this->playerOne->score() - $this->playerTwo->score()) == 1) {
            return true;
        }
        return false;
    }


}
