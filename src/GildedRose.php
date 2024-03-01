<?php

declare(strict_types=1);

namespace GildedRose;

class GildedRose
{

    private array $items;

    function __construct(array $items)
    {
        $this->items = $items;    
    }

    public function updateQuality(): void
    {
        foreach ($this->items as $item) {

            $item->update();
            
        }
    }
}
