<?php
include "product.php";
include "testing.php";

function SameName(){
    echo "Wow from Index File. <br>";
}
$testObj = new test\Product;
$testObj = new pro\Product;

SameName();// work only index file function
echo "<br>";
pro\SameName(); // work from pro namespace file function

echo "<br>";

$testObj = new pro\Product;
// basically it's use pro namespace and into product class again use test namespace product class;








