<?php
/**
 * Is it better than coffee?
 * Licence: Do whatever you want to!
 */

namespace IsItBetterThan;

/**
 * Class Coffee
 * @package Coffeeeeee
 */
class Coffee
{
    /** @var mixed stuff */
    private $stuff;

    /**
     * Constructor for Coffee
     *
     */
    public function __construct($stuff)
    {
        $this->stuff = $stuff;
    }

    /**
     * @return string
     */
    public function isItBetter()
    {
        if (!$this->isItCoffee()) {
            return $this->stringify() . ' is not better than coffee!' . PHP_EOL;
        }

        return $this->stringify() . ' seems to be coffee, so it is good!' . PHP_EOL;
    }

    /**
     * @return string
     */
    private function stringify()
    {
        if (is_scalar($this->stuff) || is_callable([$this->stuff, '__toString'])) {
            return (string) $this->stuff;
        }
        
        if (is_object($this->stuff)) {
            return 'this thing';
        }
        
        return 'this ' . gettype($this->stuff);
    }

    /**
     * @return bool
     */
    private function isItCoffee()
    {
        return substr_compare($this->stringify(), 'coffee', -strlen('coffee')) === 0;
    }
}
