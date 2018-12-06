<?php
namespace App\Patterns\Iterator;                
class Movies implements \IteratorAggregate
{
    protected $list = [];
    
    public function add(Movie $movie)
    {
        $this->list[] = $movie;
    }
    public function getIterator()
    {
        return new \ArrayIterator($this->list);
    }
    public function rated($rating)
    {
        $filtered = array_filter($this->list, function ($item) use ($rating) {
            
            return $item->rating() === $rating;
        });
        
        return new \ArrayIterator($filtered);
    }
    public function reverse()
    {
        return new ReverseArrayIterator($this->list);
    }
}