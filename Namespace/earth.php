<?php
namespace Astronomy\Planets;
class Earth extends Planet{
    function getName(){
        echo "Earth";
    }

}

/*
// if they have deferent name space
class Earth extends Astronomy\Planets\Planet{
    function getName(){
        echo "Earth";
    }

}
*/