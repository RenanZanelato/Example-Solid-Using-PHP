<?php
namespace App\LSP\Model;

class Retangulo extends Paralelogramo
{   
   public function __construct(int $altura, int $largura)
   {
     parent::__construct($altura,$largura);
   }
}