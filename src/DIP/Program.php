<?php
namespace App\DIP;
use App\DIP\Model\Cliente;
use App\DIP\Model\Email;
use App\DIP\Model\Cpf;
use App\DIP\Services\EmailServices;
use App\DIP\Services\ClienteServices;
use App\DIP\Repository\ClienteRepository;
class Program
{
	public static function Main():string{
		$clienteModel = new Cliente;
		$emailModel = new Email();
		$cpfModel = new Cpf();
		
		$emailServices = new EmailServices();
		$clienteRepository = new ClienteRepository();

		$cpfModel->SetNumero("09941751919");
		$emailModel->SetEndereco("renan.zanelato@hbsis.com.br");
		$clienteModel
		 ->SetNome("Roger Zanelato")
		 ->SetEmail($emailModel)
		 ->SetCpf($cpfModel)
		 ->SetDataCadastro(new \DateTime());

		 self::Debug($clienteModel);
		 self::Debug($emailServices);
		 self::Debug($clienteRepository);

		 return (new ClienteServices($clienteRepository,$emailServices))->AdicionarCliente($clienteModel);
	}
	private static function Debug($variavel) : void
	{
		if(!__DEBUG) return;
		echo "<pre>";
		print_r($variavel);
		echo "</pre>";
	}
}