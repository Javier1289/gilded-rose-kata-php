<?php

declare(strict_types=1);

namespace GildedRose;

class Sulfuras extends Item {
    
    public function __construct(
        ItemName $itemName,  
        ItemSellIn $itemSellIn, 
        ItemQuality $itemQuality
     ) {
        parent::__construct( $itemName, $itemSellIn, $itemQuality );
    }

    public function update(){}

}