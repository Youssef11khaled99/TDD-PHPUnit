<?php declare(strict_types=1);

use App\PrimeFactors;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    public static function factors(): array
    {
        return [
            [1, []],
            [2, [2]],
            [3, [3]],
            [4, [2,2]],
            [5, [5]],
            [50, [2,5,5]],
            [100, [2,2,5,5]],
        ];
    }

    #[DataProvider('factors')]
    public function test_generate_prime_factors_for_1(int $number, array $expected): void
    {
        $factors = new PrimeFactors;

        $this->assertSame($expected, $factors->generate($number));
    }
}
