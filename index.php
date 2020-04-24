<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
//Require vendor/autoload.php
require_once("vendor/autoload.php");
//Instantiate Fat-Free
$f3 = Base::instance();

$f3->route('GET /', function(){
    echo "<h1>Pet Home</h1>";
});

$f3->run();