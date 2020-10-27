<?php
namespace App\LSP\Services;

use \App\LSP\Model\Quadrado;
use \App\LSP\Model\Retangulo;
use \App\LSP\Model\Paralelogramo;

class CalculoArea
{   
    private static function ObterAreaParalelogramo(Paralelogramo $ret): void
    {
      
      echo "Calculo da área do objeto";
      echo "<br>";
      echo $ret->GetAltura() . " * " . $ret->GetLargura();
      echo "<br>";
      echo "Resultado: " . $ret->Area();
      echo "<br><br>";
    }

    public static function Calcular():void
    {
      $quad = new Quadrado(5,5);
      $ret = new Retangulo(10, 5);

      self::ObterAreaParalelogramo($quad);
      self::ObterAreaParalelogramo($ret);

      //Wrong Value
      $wrongValue = new Quadrado(10,2);
    }
}