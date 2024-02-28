<?php 

declare(strict_types=1);

namespace GildedRose;

use InvalidArgumentException;

class ItemQualityOutOfRangeException extends InvalidArgumentException {
    function __construct( int $qualityCandidate )
    {
        parent::__construct("Tried to set an ItemQuality of " . $qualityCandidate .  " which is outside the valid range.");
    }
}