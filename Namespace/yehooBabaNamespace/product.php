<?php
namespace pro;
class Product{
    public function __construct(){
        // echo "This is Product Class"."<br>";
        $test = new \test\Product;
    }

}
// out of class
function SameName(){
    echo "Wow from Product File. <br>";
}