<?php
namespace App\DIP\Model;
use DateTime;
class Cliente
{
    private int $ClienteId;
    private string $Nome;
    private Email $Email;
    private Cpf $Cpf;
    private DateTime $DataCadastro;

    public function Validar() : bool
    {
        return $this->Email->Validar() && $this->Cpf->Validar();
    }

    public function GetClienteID() : int
    {
        return $this->ClienteId;
    }
    public function GetNome() : string
    {
        return $this->Nome;
    }
    public function GetEmail() : Email
    {
        return $this->Email;
    }
    public function GetCpf() : Cpf
    {
        return $this->Cpf;
    }
    public function GetDataCadastro() : DateTime
    {
        return $this->DataCadastro;
    }
    public function SetClienteID(int $clienteId)
    {
        $this->ClienteId = $clienteId;
        return $this;
    }
    public function SetNome(string $nome)
    {
        $this->Nome = $nome;
        return $this;
    }
    public function SetEmail(Email $email)
    {
        $this->Email = $email;
        return $this;
    }
    public function SetCpf(Cpf $cpf)
    {
        $this->Cpf = $cpf;
        return $this;
    }
    public function SetDataCadastro(DateTime $dataCadastro)
    {
        $this->DataCadastro = $dataCadastro;
        return $this;
    }
}