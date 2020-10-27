<?php
namespace App\DIP\Interfaces;
use \App\DIP\Model\Cliente;

interface IClienteServices
{
	public function AdicionarCliente(Cliente $cliente) : string;	
}