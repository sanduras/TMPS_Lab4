<?php

namespace SOLID\SingleResponsibility;

class Json {
    public function encode($data) {

        $result = print_r(json_encode($data));
        
        return $result;
    }

}

?>