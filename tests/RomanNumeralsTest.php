<?php declare(strict_types=1);

use App\RomanNumerals;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase
{

    public static function numbersToBeTested(): array
    {
        return [
            [1, "I"],
            [2, "II"],
            [3, "III"],
            [4, "IV"],
            [5, "V"],
            [6, "VI"],
            [7, "VII"],
            [8, "VIII"],
            [9, "IX"],
            [10, "X"],
            [11, "XI"],
            [12, "XII"],
            [14, "XIV"],
            [17, "XVII"],
            [19, "XIX"],
            [20, "XX"],
            [39, "XXXIX"],
            [40, "XL"],
            [50, "L"],
        ];
    }

    #[DataProvider('numbersToBeTested')]
    public function test_generate_roman_for_1(int $number, string $expected): void
    {
        $this->assertSame($expected, RomanNumerals::generate($number));
    }
}
