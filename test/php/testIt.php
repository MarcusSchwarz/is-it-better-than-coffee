<?php
/**
 * Is it better than coffee?
 * Licence: Do whatever you want to!
 */

require __DIR__ . '/../../src/php/Coffee.php';

$beer = new \stdClass();

$coffeeTester = new \IsItBetterThan\Coffee($beer);

echo $coffeeTester->isItBetter();
