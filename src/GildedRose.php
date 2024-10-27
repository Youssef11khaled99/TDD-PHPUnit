<?php

namespace App;

class GildedRose
{
    public $name;

    public $quality;

    public $sellIn;

    const MAX_QUALITY = 50;

    const BRIE = [
        'Aged Brie'
    ];

    const BACKSTAGE_PASSES = [
        'Backstage passes to a TAFKAL80ETC concert'
    ];

    const LEGENDARY_ITEMS = [
        'Sulfuras, Hand of Ragnaros'
    ];

    public function __construct($name, $quality, $sellIn)
    {
        $this->name = $name;
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    public static function of($name, $quality, $sellIn)
    {
        return new static($name, $quality, $sellIn);
    }

    public function tick()
    {
        if (in_array($this->name, self::LEGENDARY_ITEMS)) {
            return;
        }

        $this->sellIn--;
        if (in_array($this->name, self::BRIE)) {
            $this->increaseQuality($this->passedSellInDate() ? 2 : 1);
        } elseif (in_array($this->name, self::BACKSTAGE_PASSES)) {
            if ($this->passedSellInDate()) {
                $this->quality = 0;
                return;
            }
            if ($this->remainingDaysInSellIn(6)) {
                $this->increaseQuality(3);
                return;
            }
            if ($this->remainingDaysInSellIn(10)) {
                $this->increaseQuality(2);
                return;
            }
            
            $this->increaseQuality();
        } else {
            $this->decreaseQuality();
        }
    }

    private function passedSellInDate() {
        return $this->sellIn < 0;
    }

    private function decreaseQuality()
    {
        if ($this->quality > 0) {
            if ($this->passedSellInDate()) {
                $this->quality -= 2;
                return;
            }

            $this->quality--;
        }
    }

    private function increaseQuality($points = 1)
    {
        if ($this->quality + $points > 50) {
            $this->quality = 50;
        } else {
            $this->quality += $points;
        }
    }

    private function remainingDaysInSellIn($days)
    {
        return $this->sellIn <= $days;
    }
}
