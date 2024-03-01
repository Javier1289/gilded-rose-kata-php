<?php
require './src/GildedRose.php';
require './src/ItemFactory.php';
require './src/Item.php';
require './src/ItemName.php';
require './src/ItemQuality.php';
require './src/ItemSellIn.php';
require './src/ItemQualityOutOfRangeException.php';
require './src/StandardItem.php';
require './src/AgedBrie.php';
require './src/BackstagePasses.php';
require './src/Sulfuras.php';

use GildedRose\GildedRose;
use GildedRose\ItemFactory;

$items = [
    ItemFactory::create('+5 Dexterity Vest', 10, 20),
    ItemFactory::create('Aged Brie', 2, 0),
    ItemFactory::create('Elixir of the Mongoose', 5, 7),
    ItemFactory::create('Sulfuras, Hand of Ragnaros', 0, 80),
    ItemFactory::create('Sulfuras, Hand of Ragnaros', -1, 80),
    ItemFactory::create('Backstage passes to a TAFKAL80ETC concert', 15, 20),
    ItemFactory::create('Backstage passes to a TAFKAL80ETC concert', 10, 49),
    ItemFactory::create('Backstage passes to a TAFKAL80ETC concert', 5, 49),
    // this FaItemFactoryconjured item does not work properly yet
    ItemFactory::create('Conjured Mana Cake', 3, 6),
];

$app = new GildedRose($items);

$days = 2;


for ($i = 0; $i < $days; $i++) {
    echo "-------- day {$i} --------" . PHP_EOL;
    echo 'name, sellIn, quality' . PHP_EOL;
    foreach ($items as $item) {
        echo $item->__toString() . PHP_EOL;
    }
    echo PHP_EOL;
    $app->updateQuality();
}