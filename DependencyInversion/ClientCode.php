<?php
declare (strict_types=1);

namespace SOLID\DependencyInversion;

require_once '../vendor/autoload.php';

function clientCode(){ 
    $senGrid = new SendGrid();
    $senGrid->sendMessage();

    $smtp = new Smtp();
    $smtp->sendMessage();

   }
   
   clientCode();

?>