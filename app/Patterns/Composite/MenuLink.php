<?php
namespace App\Patterns\Composite;              
class MenuLink implements Menu
{
        public function __construct($name, $url)
        {
                $this->name = $name;
                $this->url = $url;
        }
        public function output($level = 0)
        {
                print str_repeat(' ', $level * 4);
                print "<li><a title=\"{$this->name}\" href=\"{$this->url}\">{$this->name}</a></li>"   . PHP_EOL;
        }
}