<?php
declare (strict_types=1);

namespace SOLID\OpenClose;

class UsersManagement
{
    public function process(User $user)
    {
        return $user->do();
    }
}

?>