<?php 

declare(strict_types=1);

namespace GildedRose;

class ItemName{

    private const String AGED_BRIE = "Aged Brie";
    private const String BACKSTAGE_PASSES = "Backstage passes to a TAFKAL80ETC concert";
    private const String SULFURAS = "Sulfuras, Hand of Ragnaros";

    private String $value;

    function __construct( String $value) {
        $this->value = $value;
    }

    function isAgedBrie(): bool {
        return self::AGED_BRIE === $this->value;
    }

    function isBackstagePasses(): bool {
        return self::BACKSTAGE_PASSES === $this->value;
    }

    function isSulfuras(): bool {
        return self::SULFURAS === $this->value;
    }    

}