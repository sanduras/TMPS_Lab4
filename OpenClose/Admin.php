<?php
declare (strict_types=1);

namespace SOLID\OpenClose;

class Admin implements User
{
    public function do()
    {
        echo 'Admin manage website'. "<br>";
    }
}