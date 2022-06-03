<?php
declare (strict_types=1);

namespace SOLID\DependencyInversion;

class SendGrid implements InterfaceMailer
{
    public function sendMessage()
    {
       echo "Send message with Sendgrid" ."<br>";
    }
}