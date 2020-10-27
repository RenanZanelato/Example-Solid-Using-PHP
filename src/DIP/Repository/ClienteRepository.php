<?php
namespace App\DIP\Repository;

use \App\DIP\Model\Cliente;

class ClienteRepository implements \App\DIP\Interfaces\IClienteRepository
{    
    public function AdicionarCliente(Cliente $cliente) : bool
    {
        return true;
    }
}