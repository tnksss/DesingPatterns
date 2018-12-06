<?php
use App\Patterns\Singleton\LogTest;

$log = LogTest::instance();
$log2 = LogTest::instance();
$log3 = LogTest::instance();
$log4 = LogTest::instance();
$log5 = LogTest::instance();

var_dump($log);
var_dump($log2);
var_dump($log3);
var_dump($log4);
var_dump($log5);