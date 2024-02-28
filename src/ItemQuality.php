<?php 

declare(strict_types=1);

namespace GildedRose;

use GildedRose\ItemQualityOutOfRangeException;

class ItemQuality{
    
    private const int MAX_VALUE = 50;
    private const int MIN_VALUE = 0;

    private int $value;

    // function __construct (int $value) throws ItemQualityOutOfRangeException {
    function __construct (int $value) {
        if ($value < self::MIN_VALUE || $value > self::MAX_VALUE) {
            throw new ItemQualityOutOfRangeException( $value );
        }
        $this->value = $value;
    }

     function increase():ItemQuality {
        if ($this->value == self::MAX_VALUE) {
            return $this;
        }

        return new ItemQuality($this->value + 1);
    }

    function decrease():ItemQuality {
        if ($this->value == self::MIN_VALUE) {
            return $this;
        }

        return new ItemQuality($this->value - 1);
    }

    function reset():ItemQuality {
        return new ItemQuality(self::MIN_VALUE);
    }
}