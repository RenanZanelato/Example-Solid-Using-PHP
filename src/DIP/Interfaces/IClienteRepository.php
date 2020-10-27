<?php
namespace App\DIP\Interfaces;

use \App\DIP\Model\Cliente;

interface IClienteRepository
{
	public function AdicionarCliente(Cliente $cliente) : bool;	
}