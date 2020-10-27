<?php
namespace App\DIP\Interfaces;

interface IEmailServices
{
	public function Enviar(string $de,string $para,string $assunto,string $messagem) : bool;	
}