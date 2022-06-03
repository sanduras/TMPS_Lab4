<?php
declare (strict_types=1);

namespace SOLID\SingleResponsibility;

require_once '../vendor/autoload.php';

function clientCode(){ 
    $data = [
        'email' => 'ras.sandu@mail.ru',
        'password' => '123Qwr89IU!'
    ];
// print_r($data);
    $user = new User($data);
    // $user->validate($data);
    // $user->formatJson();
    Json::encode($user);

    Validation::validate($data);
   }
   
   clientCode();

?>