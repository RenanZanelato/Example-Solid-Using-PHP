<?php
namespace App\DIP\Services;

use \App\DIP\Model\Cliente;
use \App\DIP\Interfaces\IClienteRepository;
use \App\DIP\Interfaces\IEmailServices;

class ClienteServices implements \App\DIP\Interfaces\IClienteServices
{   
    private IClienteRepository $ClienteRepository;
    private IEmailServices $EmailServices;

    public function __construct(IClienteRepository $clienteRepository, IEmailServices $emailServices)
    {
        $this->ClienteRepository = $clienteRepository;
        $this->EmailServices = $emailServices;
    }
    public function AdicionarCliente(Cliente $cliente) : string
    {
        if(!$cliente->Validar()) return 'Dados invalidos';
        if(!$this->ClienteRepository->AdicionarCliente($cliente)) return 'Falha ao Cadastrar o cliente';
        if(!$this->EmailServices->Enviar("empresa@empresa.com", $cliente->GetEmail()->GetEndereco(), "Bem Vindo", "Parabéns está Cadastrado")) return 'Falha ao notificar o cadastro do cliente';
        return "Cliente cadastrado com sucesso";
    }
}