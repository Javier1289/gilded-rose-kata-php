<?php

declare(strict_types=1);

namespace GildedRose;

class AgedBrie extends Item {
    
    
    public function __construct(String $name,  int $sellIn, int $quality ) {
        parent::__construct( $name, $sellIn, $quality );
    }

    public function update(){
   
        if ($this->quality < 50) {
            $this->quality = $this->quality + 1;
        }
        $this->sellIn = $this->sellIn - 1;
        if ($this->sellIn < 0) {
            if ($this->quality < 50) {
                $this->quality = $this->quality + 1;
            }
        }

    }

}