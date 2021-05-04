<?php

namespace Project;

include "task1.php";
include "task2.php";


// $run = new Motorcycle\Bike(); // unQualified // deferent namescape
// echo $run->getName(); 

//---or use to use function
use Project\Motorcycle\Bike as Hornet; // Create Qualified Allies
$run = new Hornet(); //use allies name hornet
echo $run->getName(); 


// ---------------------------------
echo "<br>";
$run = new Bike();
echo $run->getName(); // run because they have same namespace

echo "<br>";
use Project\Bike as Pulsar;
$run = new Pulsar();
echo $run->getName(); // run because they have same namespace








