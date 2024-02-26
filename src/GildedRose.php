<?php

declare(strict_types=1);

namespace GildedRose;

final class GildedRose
{
    /**
     * @param Item[] $items
     */
    public function __construct(
        private array $items
    ) {
    }

    public function updateQuality(): void
    {
        foreach ($this->items as $item) {


            switch( $item->name ){
                case "Aged Brie":
                    if ($item->quality < 50) {
                        $item->quality = $item->quality + 1;
                    }
                    $item->sellIn = $item->sellIn - 1;
                    if ($item->sellIn < 0) {
                        if ($item->quality < 50) {
                            $item->quality = $item->quality + 1;
                        }
                    }
                    break;
                case "Backstage passes to a TAFKAL80ETC concert":
                    if ($item->quality < 50) {
                        $item->quality = $item->quality + 1;
                        if ($item->sellIn < 11) {
                            if ($item->quality < 50) {
                                $item->quality = $item->quality + 1;
                            }
                        }

                        if ($item->sellIn < 6) {
                            if ($item->quality < 50) {
                                $item->quality = $item->quality + 1;
                            }
                        }
                    }
                    $item->sellIn = $item->sellIn - 1;
                    if ($item->sellIn < 0) {
                        $item->quality = $item->quality - $item->quality;
                    }
                    break;
                case "Sulfuras, Hand of Ragnaros":
                    break;
                default:
                    if ($item->quality > 0) {
                        $item->quality = $item->quality - 1;
                    }
                    $item->sellIn = $item->sellIn - 1;
                    if ($item->sellIn < 0) {
                        if ($item->quality > 0) {
                            $item->quality = $item->quality - 1;
                        }
                    }
                    break;
            }

        }
    }
}
