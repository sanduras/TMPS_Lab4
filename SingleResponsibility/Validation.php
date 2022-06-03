<?php

namespace SOLID\SingleResponsibility;

class Validation {
    protected static $rules = [
        'email' => 'string',
        'password' => 'string'
    ];

    public static function validate ($data) {
        foreach(static::$rules as $key => $value )
        if( gettype($data[$key]) != $value) {
            throw new \Exception("Bad request, field {$key} must by {$value}");
        }
    }

}

?>