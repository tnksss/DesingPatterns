<?php

namespace App\Patterns\Singleton;                
class RequestCounter                
{
        private $numberOfRequestsMade = 0;

        public function numberOfRequestsMade()
        {
                return $this->numberOfRequestsMade;
        }
        public function makeRequest()
        {
                $this->numberOfRequestsMade++;
        }
}