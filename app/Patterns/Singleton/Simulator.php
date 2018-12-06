<?php
use App\Patterns\Singleton\RequestCounterSingleton as RequestCounterSingleton;

RequestCounterSingleton::instance()->makeRequest();
RequestCounterSingleton::instance()->makeRequest();
RequestCounterSingleton::instance()->makeRequest();

// Singleton request hits: 3                
print 'Singleton request hits: ' . RequestCounterSingleton::instance()
                                   ->numberOfRequestsMade() . PHP_EOL;