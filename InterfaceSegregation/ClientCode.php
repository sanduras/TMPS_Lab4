<?php
declare (strict_types=1);

namespace SOLID\InterfaceSegregation;

require_once '../vendor/autoload.php';

function clientCode(){ 
        $developer = new Developer();
        $developer->writeCode();
        $developer->writeTest();

        $tester = new Tester();
        $tester->writeTest();
      

   }
   
   clientCode();

?>