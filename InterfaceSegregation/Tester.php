<?php
declare (strict_types=1);

namespace SOLID\InterfaceSegregation;

class Tester implements  InterfaceTesting
{

    public function writeTest()
    {
        echo  'Test app on server'. "<br>";
    }
}

?>