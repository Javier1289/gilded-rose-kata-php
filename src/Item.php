<?php

declare(strict_types=1);

namespace GildedRose;

abstract class Item implements \Stringable
{
    public string $name;
    public int $sellIn;
    public int $quality;
    
    public function __construct(
        string $name,
        int $sellIn,
        int $quality
    ) {
        $this->name = $name;
        $this->sellIn = $sellIn;
        $this->quality = $quality;
    }


    function update(){}

    public function __toString(): string
    {
        return (string) "{$this->name}, {$this->sellIn}, {$this->quality}";
    }
}
