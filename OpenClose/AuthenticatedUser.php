<?php
declare (strict_types=1);

namespace SOLID\OpenClose;

class AuthenticatedUser implements User
{
    public function do()
    {
        echo 'Authenticated User make orders on website'. "<br>";
    }
}