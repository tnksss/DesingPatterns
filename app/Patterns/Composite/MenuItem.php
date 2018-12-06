<?php
namespace App\Patterns\Composite;              
class MenuItem implements Menu
{
        public function __construct($name)
        {
                $this->name = $name;
        }

        public function output($level = 0)                                                                      
        {
                print str_repeat(' ', $level * 4);
                print "<li>{$this->name}</li>" . PHP_EOL;
        }
}