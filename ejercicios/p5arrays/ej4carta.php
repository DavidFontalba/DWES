<?php

/**
 * Autor: David Galván Fontalba
 * Fecha: 19 / 10 / 2020
 */
$carta = [
   "primero" => [
      "TAGLIATELLE INTEGRALI PRIMAVERA" => [
         "precio" => 9,
         "foto" => "https://www.ginos.es/sites/default/files/styles/optimize/public/tagliatelleprimavera1366x852.jpg?itok=h93NYKZr"
      ],
      "RAVIOLI DI ASPARAGI" => [
         "precio" => 8,
         "foto" => "https://www.ginos.es/sites/default/files/styles/optimize/public/1366x8520002encarteravioliesparragosok.jpg?itok=QmZYCdwA"
      ],
      "PAPPARDELLE AL RAGÚ" => [
         "precio" => 12,
         "foto" => "https://www.ginos.es/sites/default/files/styles/optimize/public/parpadelle1366x852px.jpg?itok=KcZcFgfs"
      ],
   ],
   "segundo" => [
      "LUBINA MEDITERRÁNEA" => [
         "precio" => 8,
         "foto" => "https://www.ginos.es/sites/default/files/styles/optimize/public/web-ginosficha-interna1366x852lubina.jpg?itok=WNUs8qMW"
      ],
      "MILANESA DE TERNERA CON LINGUINE" => [
         "precio" => 6,
         "foto" => "https://www.ginos.es/sites/default/files/styles/optimize/public/1366x852milanesa.jpg?itok=ZQ6QGZLe"
      ],
      "SCALOPPINE DI MANZO" => [
         "precio" => 11,
         "foto" => "https://www.ginos.es/sites/default/files/styles/optimize/public/ginos-scaloppine-di-manzo-1366x852.jpg?itok=n-MaDAxn"
      ],
      "MILANESA GINOS DE POLLO" => [
         "precio" => 9,
         "foto" => "https://www.ginos.es/sites/default/files/styles/optimize/public/ginos-milanesa-ginos-d-pollo-1366x852px.jpg?itok=nd16Gqym"
      ],
      "INSALATA NUOVA CAPRESE" => [
         "precio" => 7,
         "foto" => "https://www.ginos.es/sites/default/files/styles/optimize/public/ginos-1366x852-ensalada-caprese-ginos_1.jpg?itok=Y2vDEynd"
      ],
   ],
   "postre" => [
      "TORTA DI LIMONCELLO" => [
         "precio" => 4,
         "foto" => "https://www.ginos.es/sites/default/files/styles/optimize/public/1366x852pxlimoncello.jpg?itok=TpxlQrgb"
      ],
      "PIZZETA CON NUTELLA® & GELATO" => [
         "precio" => 4,
         "foto" => "https://www.ginos.es/sites/default/files/styles/optimize/public/pizzeta-vainilla-ginos.jpg?itok=YWR2kSCt"
      ],
      "TIRAMISÚ" => [
         "precio" => 4,
         "foto" => "https://www.ginos.es/sites/default/files/styles/optimize/public/tiramisu-1366x852.jpg?itok=LSMq7Bkc"
      ],
   ],
];

$menus = [
   "Menú 1" => [
      "primero" => "TAGLIATELLE INTEGRALI PRIMAVERA",
      "segundo" => "LUBINA MEDITERRÁNEA",
      "postre" => "TORTA DI LIMONCELLO"
   ],
   "Menú 2" => [
      "primero" => "RAVIOLI DI ASPARAGI",
      "segundo" => "SCALOPPINE DI MANZO",
      "postre" => "PIZZETA CON NUTELLA® & GELATO"
   ],
   "Menú 3" => [
      "primero" => "PAPPARDELLE AL RAGÚ",
      "segundo" => "MILANESA GINOS DE POLLO",
      "postre" => "TIRAMISÚ"
   ],
];

?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <meta name="author" content="David Galván Fontalba" />
   <title>Carta DF</title>
</head>

<body>
   <h1>Carta de un restaurante</h1>
   <p>*Sacadas de Ristorante Ginos</p>
   <?php
   foreach ($carta as $tipo => $arrayPlatos) {
      foreach ($arrayPlatos as $nombrePlato => $infoPlato) {
         echo "<h3>" . $nombrePlato . "</h3>";
         foreach ($infoPlato as $key => $value) {
            if ($key != "foto") {
               echo "<p>" . $value . "€</p>";
            } else
               echo "<img src='$value' width='500px'><br/>";
         }
      }
   }
   echo "<h2>Menús</h2>";

   foreach ($menus as $menu => $arrayMenu) {
      echo "<p>" . $menu . "</p>";
      $sumaMenu = 0;
      foreach ($arrayMenu as $plato => $value) {
         $sumaMenu += $carta[$plato][$value]["precio"];
         echo "<p>" . $value . "</p>";
      }
      echo "<p>" . $sumaMenu . "€</p><br/>";
   }

   ?>
</body>

</html>