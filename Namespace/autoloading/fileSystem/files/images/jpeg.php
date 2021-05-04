<?php
namespace CloudStorage\FileSystem\Files\Images;

use \CloudStorage\FileSystem\Files\Contracts\ImageContract; // call imagecontract file for extends implements
use \CloudStorage\Mail\Mailer; // call mailer file
class Jpeg implements ImageContract{
    function getDimension(){
        (new Mailer())->sendMail(); // mail to mailer file
        echo "<br>";
        return "100X100";

    }
}