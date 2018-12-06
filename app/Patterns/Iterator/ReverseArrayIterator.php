<?php
namespace App\Patterns\Iterator;                
class ReverseArrayIterator extends \ArrayIterator
{
    public function __construct(array $array)
    {
        parent::__construct(array_reverse($array));
    }
}
