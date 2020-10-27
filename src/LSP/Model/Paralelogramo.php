<?php
namespace App\LSP\Model;

abstract class Paralelogramo
{   
	private int $Altura;
	private int $Largura;

   public function __construct(int $altura, int $largura)
   {
     $this->Altura = $altura;
     $this->Largura = $largura;
   }
   public function GetAltura()
   {
      return $this->Altura;
   }
   public function GetLargura()
   {
      return $this->Largura;
   }
   public function Area() : float
   {
   		return $this->Altura * $this->Largura;
   }
 
}