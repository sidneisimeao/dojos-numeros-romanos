<?php

namespace Tests;


use PHPUnit\Framework\TestCase;

use Desenvolvimento\NumerosRomanos\ConverterNumeros;

class ConversaoTest extends TestCase
{
  /**
   * Conversão direta
   * @return void
   */
  public function testConversaoDireta()
  {
    $this->assertEquals('XXIV', ConverterNumeros::paraRomanos(24));
    $this->assertEquals('XXXVII', ConverterNumeros::paraRomanos(37));
    $this->assertEquals('XCVIII', ConverterNumeros::paraRomanos(98));
    $this->assertEquals('XCIX', ConverterNumeros::paraRomanos(99));
  }
}
