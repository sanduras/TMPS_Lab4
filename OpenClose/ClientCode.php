<?php
declare (strict_types=1);

namespace SOLID\OpenClose;

require_once '../vendor/autoload.php';

function clientCode(){ 
    $guest = new Guest;
    $admin = new Admin;
    $authenticated = new AuthenticatedUser;
 
    $users = [$guest, $admin, $authenticated];
    $management = new UsersManagement;
    foreach($users as $item) {
        $management->process($item);
    }

   }
   
   clientCode();

?>