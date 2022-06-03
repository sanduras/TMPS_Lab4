<?php
declare (strict_types=1);

namespace SOLID\SingleResponsibility;

class User {
    public $email;
    public $password;

    public function __construct($data)
    {
        $this->email = $data['email'];
        $this->password = $data['password'];
    }

    // public function formatJson() {
    //    print_r(json_encode(['email' => $this->email, 'password'=> $this->password]));
    // }

    // public function validate ($data) {
    //     if(!isset($data['email'])) {
    //         throw new \Exception("Bad request, field email is empty");
    //     }
    //     if(!isset($data['password'])) {
    //         throw new \Exception("Bad request, field password is empty");
    //     }
    // }
}

?>