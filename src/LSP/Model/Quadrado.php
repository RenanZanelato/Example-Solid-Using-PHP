<?php
namespace App\LSP\Model;

class Quadrado extends Paralelogramo
{   
   public function __construct(int $altura, int $largura)
   {
     parent::__construct($altura,$largura);
     if($largura != $altura) die("Os dois lados do quadrado precisam ser iguais");
   }
}