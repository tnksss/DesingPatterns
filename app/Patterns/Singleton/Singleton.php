<?php
namespace App\Patterns\Singleton;                
trait Singleton
{
        static protected $instance;
        
        final protected function __construct()
        {
        }
        
        static public function instance()
        {
                if (! static::$instance) {            
                        static::$instance = new static;
                }
                return static::$instance;
        }
}