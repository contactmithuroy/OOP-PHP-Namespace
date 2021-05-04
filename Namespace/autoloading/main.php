<?php
namespace CloudStorage;
include "autoloader.php";



use \CloudStorage\Mail\Mailer;// qualified 
use \CloudStorage\FileSystem\Scanner;// qualified 
use \CloudStorage\FileSystem\Files\Images\Jpeg;
use \CloudStorage\FileSystem\Files\Contracts\CashFile\Cash;

class Main{
    function __construct(){
        //$mailer = new mail\Mailer(); // unqualified
        $mailer = new Mailer();
        $mailer->sendMail();
        echo "<br>";

        $scanner = new Scanner();
        $scanner->scan();
        echo "<br>";

        $jpeg = new Jpeg();
        echo $jpeg->getDimension();
        echo "<br>";

        $cash = new Cash();
        $cash->sayHi();
    }
    
}

new Main();