<?php
declare (strict_types=1);

namespace SOLID\InterfaceSegregation;

class Developer implements InterfaceCoding, InterfaceTesting
{
    public function writeCode()
    {
        echo 'Write code in php'. "<br>";
    }

    public function writeTest()
    {
        echo 'Test app on localhost'. "<br>";
    }
}

?>