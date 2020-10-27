<?php
namespace App\DIP\Model;

class Cpf
{
    private string $Numero;

    public function Validar() : bool
    {
        return strlen($this->Numero) == 11;
    }
    public function SetNumero(string $numero)
    {
       $this->Numero = $numero;
       return $this;
    }
    public function GetNumero():string
    {
        return $this->Numero;
    }
}