<?php

namespace Astronomy;
include "planet.php";
include "earth.php";



// if use half namespace it's unqulified 
// if use full namespace it's qulified 
//$planet = new Planets\Planet(); // unqualified namespace
$planet = new \Astronomy\Planets\Planet(); // qualified namespace
$planet->getName();



echo "<br>";
$earth = new \Astronomy\Planets\Earth(); // qualified namespace
$earth->getName();




