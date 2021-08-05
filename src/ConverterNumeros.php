<?php

declare(strict_types=1);

namespace Desenvolvimento\NumerosRomanos;

class ConverterNumeros
{
  /**
   * Números e conversões
   */
  const NUMEROS = [
    1000 => 'M', 900 => 'CM', 500 => 'D', 400 => 'CD',
    100 => 'C', 90 => 'XC', 50 => 'L', 40 => 'XL',
    10 => 'X',  9 => 'IX', 5 => 'V', 4 => 'IV', 1 => 'I'
  ];

  /**
   * Converte números indo-arábicos em romanos 
   * @param float $valor
   * @return string
   */
  public static function paraRomanos(float $valor): string
  {
    $romanos = [];

    while ($valor > 0) {
      foreach (self::NUMEROS as $indoArabico => $romano) {
        if ($valor >= $indoArabico) {
          $romanos[] = $romano;
          $valor -= $indoArabico;
          break;
        }
      }
    }
    return join('', $romanos);
  }
}
