<?php
namespace App\DIP\Model;

class Email
{
    private string $Endereco;
    
    public function Validar() : bool
    {
        return strpos($this->Endereco,'@');
    }
    public function SetEndereco(string $endereco)
    {
        $this->Endereco = $endereco;
    }
    public function GetEndereco():string
    {
        return $this->Endereco;    
    }
}