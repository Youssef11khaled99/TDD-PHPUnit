<?php

use App\BowlingGame;
use PHPUnit\Framework\TestCase;


class GameTest extends TestCase
{
    function test_score_a_gutter_game_as_zero() {
        $game = new BowlingGame;

        foreach ([[0,0]] as $roll) {
            $game->frame($roll);
        }
        $this->assertSame(0, $game->score());
    }

    function test_score_normal_game() {
        $data = [
            [10, 0], // 20
            [10,0], // 20
            [10,0], // 17
            [3,4], // 7  ==> total: 64
            // [3,4],
            // [4,6],
            // [3,4],
            // [3,4],
            // [3,4],
            // [3,4],
        ];
        $game = new BowlingGame;

        foreach ($data as $frame) {
            $game->frame($frame);
        }
        $this->assertSame(64, $game->score());
    }
}