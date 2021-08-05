<?php

namespace Desenvolvimento\NumerosRomanos;

use Desenvolvimento\NumerosRomanos\ConverterNumeros;

require '../vendor/autoload.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabela de Números Romanos</title>
  <style>
    .container {
      display: flex;
      flex-direction: column;
      width: 50%;
    }

    table * td {
      padding: 5px;
    }

    .light-grey {
      background-color: #e8e8e8;
    }
  </style>
</head>

<body>
  <div class="container">
    <h3>Números Romanos de 0 a 100</h3>
    <table>
      <tbody>
        <?php
        foreach (array_chunk(range(1, 100), 4) as $i => $blocos) {
          $class = $i % 2 == 0 ? 'light-grey' : '';
          echo "<tr class='{$class}'>";
          foreach ($blocos as $numero) {
            echo "<td>", "{$numero} = ", ConverterNumeros::paraRomanos($numero), '</td>';
          }
          echo "<tr>";
        }
        ?>
      </tbody>
  </div>
  </table>
</body>

</html>