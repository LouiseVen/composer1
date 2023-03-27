<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . "/../src/hello.php";
use App\hello;
$a = 'App\hello';


$hello = new $a;

echo $hello;


