<?php
namespace App\DIP\Services;

class EmailServices implements \App\DIP\Interfaces\IEmailServices
{   
    public function Enviar(string $de,string $para,string $assunto,string $messagem) : bool
    {
        //method to send email
        return true;
    }
}