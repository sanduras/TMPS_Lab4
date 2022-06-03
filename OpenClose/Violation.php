<?php

namespace SOLID\OpenClose;

class Admin
{
    public function change()
    {
        return 'Manage website';
    }
}

class Guest
{
    public function navigate()
    {
        return 'Navigate on website';
    }
}
class AuthenticatedUser
{
    public function order()
    {
        return 'Make orders';
    }
}

class UsersManagement
{
    public function process($user)
    {
        if ($user instanceof Guest) {
            $user->navigate();
        } elseif ($user instanceof Admin) {
            $user->change();
        } 
         elseif ($user instanceof AuthenticatedUser) {
        $user->order();
    };

        throw new \Exception('Invalid input user');
    }
}