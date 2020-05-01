<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

//Instantiate the F3 Base class
$f3 = Base::instance();

//run $f3
$f3->route('GET / ', function(){
    //echo '<h1>It is raining today</h1>';
    $view = new Template();
    echo $view->render('views/pet-home.html');
});

$f3->route('GET /order ', function(){
    echo "Order Page";
});

$f3-> run();