<?php

declare(strict_types=1);

namespace GildedRose;

use GildedRose\ItemName;
use GildedRose\ItemSellIn;
use GildedRose\ItemQuality;
use GildedRose\AgedBrie;
use GildedRose\BackstagePasses;
use GildedRose\Sulfuras;
use GildedRose\StandardItem;

class ItemFactory {
    
    public static function create(string $name, int $sellIn, int $quality){
        
        $_name = new ItemName($name);
        $_sellIn = new ItemSellIn($sellIn);
        $_quality = new ItemQuality($quality);
        
        if ($_name->isAgedBrie()) return new AgedBrie($_name, $_sellIn, $_quality );
        if ($_name->isBackstagePasses()) return new BackstagePasses($_name, $_sellIn, $_quality );
        if ($_name->isSulfuras()) return new Sulfuras($_name, $_sellIn, $_quality );

        return new StandardItem($_name, $_sellIn, $_quality);
    }
}