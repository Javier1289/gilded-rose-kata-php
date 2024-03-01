<?php

declare(strict_types=1);

namespace GildedRose;

class BackstagePasses extends Item{
    
    private const DOUBLE_QUALITY_INCREASE_SELL_IN_THRESHOLD = 10;
    private const TRIPLE_QUALITY_INCREASE_SELL_IN_THRESHOLD = 5;
    private const QUALITY_RESET_SELL_IN_THRESHOLD = 0;

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

        if( $this->hasToBeSoldInLessThan( self::DOUBLE_QUALITY_INCREASE_SELL_IN_THRESHOLD) ){
            $this->increaseQuality();
        }


        if ( $this->hasToBeSoldInLessThan(self::TRIPLE_QUALITY_INCREASE_SELL_IN_THRESHOLD)) {
            $this->increaseQuality();
        }

        if ($this->hasToBeSoldInLessThan(self::QUALITY_RESET_SELL_IN_THRESHOLD)) {
            $this->resetQuality();
        }
        
    }

}