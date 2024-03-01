<?php

declare(strict_types=1);

namespace GildedRose;

class AgedBrie extends Item {
    
    private const DOUBLE_QUALITY_DECREMENT_SELL_IN_THRESHOLD = 0;
    
    public function __construct(
        ItemName $itemName,  
        ItemSellIn $itemSellIn, 
        ItemQuality $itemQuality
     ) {
        parent::__construct( $itemName, $itemSellIn, $itemQuality );
    }

    public function update(){
   
        $this->decreaseSellIn();

        $this->increaseQuality();

        if ($this->hasToBeSoldInLessThan( self::DOUBLE_QUALITY_DECREMENT_SELL_IN_THRESHOLD )) {
            $this->increaseQuality();
        }

    }

}