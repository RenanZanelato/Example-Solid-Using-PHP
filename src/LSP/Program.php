<?php
namespace App\LSP;

class Program
{
	public static function Main():void
	{
		(new \App\LSP\Services\CalculoArea)->Calcular();
	}
}