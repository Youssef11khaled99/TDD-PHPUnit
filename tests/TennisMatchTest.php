<?php

use App\Player;
use App\TennisMatch;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;


class TennisMatchTest extends TestCase
{
    public static function scores(): array
    {
        return [
            [0, 0, "love-love"],
            [1, 0, "fifteen-love"],
            [1, 1, "fifteen-fifteen"],
            [2, 0, "thirty-love"],
            [3, 0, "forty-love"],
            [3, 3, "deuce"],
            [2, 2, "thirty-thirty"],
            [4, 4, "deuce"],
            [4, 5, "Advantage to Roshdy"],
            [6, 5, "Advantage to Youssef"],
            [4, 0, "Youssef Wins"],
            [0, 4, "Roshdy Wins"],
        ];
    }

    #[DataProvider('scores')]
    public function test_scores(int $playerOneScore, int $playerTwoScore, string $expected): void
    {
        $match = new TennisMatch(
            $youssef = new Player("Youssef"),
            $roshdy = new Player("Roshdy")
        );
        $youssef->pointTo($playerOneScore);
        $roshdy->pointTo($playerTwoScore);
        $this->assertSame($expected, $match->score());
    }
}
