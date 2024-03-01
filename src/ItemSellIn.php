<?php 

declare(strict_types=1);

namespace GildedRose;


class ItemSellIn {
    
    private int $value;

    function __construct( int $value ) {
        $this->value = $value;
    }

    function decrease(): ItemSellIn {
        return new ItemSellIn( $this->value - 1);
    }

    function isLessThan(int $days): bool {
        return $this->value < $days;
    }

    function get():int{
        return $this->value;
    }
}