<?php
declare (strict_types=1);

namespace SOLID\OpenClose;

class Guest implements User
{
    public function do()
    {
        echo 'Guest User navigate on website'. "<br>";
    }
}