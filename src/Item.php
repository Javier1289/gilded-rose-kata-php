<?php

declare(strict_types=1);

namespace GildedRose;

use GildedRose\ItemName;
use GildedRose\ItemSellIn;
use GildedRose\ItemQuality;

abstract class Item implements \Stringable
{
    public ItemName $itemName;
    public ItemSellIn $itemSellIn;
    public ItemQuality $itemQuality;
    
    public function __construct(
        ItemName $itemName,
        ItemSellIn $itemSellIn,
        ItemQuality $itemQuality
    ) {
        $this->itemName = $itemName;
        $this->itemSellIn = $itemSellIn;
        $this->itemQuality = $itemQuality;
    }


    abstract protected function update();

    function name(): string {
        return $this->itemName->get();
    }

    function quality(): string {
        return (string) $this->itemQuality->get();
    }

    function sellIn(): string {
        return (string) $this->itemSellIn->get();
    }

    function decreaseSellIn():void {
        $this->itemSellIn = $this->itemSellIn->decrease();
    }

    function hasToBeSoldInLessThan( int $days ):bool {
        return $this->itemSellIn->get() < $days;
    }

    function increaseQuality():void {
        $this->itemQuality = $this->itemQuality->increase();
    }

    function decreaseQuality():void {
        $this->itemQuality = $this->itemQuality->decrease();
    }

    function resetQuality():void {
        $this->itemQuality = $this->itemQuality->reset();
    }

    public function __toString(): string
    {
        return (string) "{$this->name()}, {$this->sellIn()}, {$this->quality()} <br>";
    }
}
