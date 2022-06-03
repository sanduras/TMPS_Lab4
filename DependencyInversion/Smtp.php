<?php
declare (strict_types=1);

namespace SOLID\DependencyInversion;

class Smtp implements InterfaceMailer
{
    public function sendMessage()
    {
       echo "Send message with Smtp mailller" ."<br>";
    }
}