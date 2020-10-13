<?php
/**
 * Autor: David Galván Fontalba
 * Fecha: 6 / 10 / 2020
 */
 $comunidades = array(
    array(  "comunidad" => "Andalucía",
            "provincias"=> array("Córdoba"=>30,"Granada"=>100,"Sevilla"=>60,"Huelva"=>30,"Jaén"=>20,"Almería"=>30,"Cádiz"=>70,"Málaga"=>200)),
    array(  "comunidad" => "Aragón",
            "provincias"=> array("Huesca"=>30, "Teruel"=>100, "Zaragoza"=>370)),
    array(  "comunidad" => "Asturias",
            "provincias"=> array("Oviedo"=>200)),
    array(  "comunidad" => "Baleares",
            "provincias"=> array("Palma de Mallorca"=>300)),
    array(  "comunidad" => "Canarias",
            "provincias"=> array("Santa Cruz de Tenerife"=>250, "Las Palmas de Gran Canaria"=>249)),
    array(  "comunidad" => "Cantabria",
            "provincias"=> array("Santander"=>300)),
    array(  "comunidad" => "Castilla-La Mancha",
            "provincias"=> array("Albacete"=>100, "Ciudad Real"=>100, "Cuenca"=>100, "Guadalajara"=>100, "Toledo"=>100)),
    array(  "comunidad" => "Castilla y León",
            "provincias"=> array("Valladolid"=>10, "Leon"=>10, "Palencia"=>10, "Burgos"=>10, "Soria"=>10, "Ávila"=>10, "Segovia"=>10, "Zamora"=>10, "Salamanca"=>10)),
    array(  "comunidad" => "Cataluña",
            "provincias"=> array("Barcelona"=>100, "Gerona"=>100, "Lérida"=>200, "Tarragona"=>100)),
    array(  "comunidad" => "Comunidad Valenciana",
            "provincias"=> array("Alicante"=>10, "Castellón de la Plana"=>10, "Valencia"=>10)),
    array(  "comunidad" => "Extremadura",
            "provincias"=> array("Badajoz"=>10, "Cáceres"=>40)),
    array(  "comunidad" => "Galicia",
            "provincias"=> array("Lugo"=>100, "Orense"=>200, "Coruña"=>300, "Pontevedra"=>10)),
    array(  "comunidad" => "Madrid",
            "provincias"=> array("Madrid"=>1000)),
    array(  "comunidad" => "Murcia",
            "provincias"=> array("Murcia"=>10)),
    array(  "comunidad" => "Navarra",
            "provincias"=> array("Pamplona"=>10)),
    array(  "comunidad" => "País Vasco",
            "provincias"=> array("Bilbao"=>10, "San Sebastián"=>10, "Vitoria"=>10)),
    array(  "comunidad" => "La Rioja",
            "provincias"=> array("Logroño"=>1))
 );
?>

<!doctype html>
<html lang="es">
    <head>
        <link rel="icon" href="" alt="">
        <title>Prueba DF</title>
        <meta charset="utf-8">
        <meta name="author" content="David Galván Fontalba"/>
        <meta name="description" content="Pruebas con arrays"/>

    </head>
    <body>
        <section>
            <?php 
                echo "<table style='border: black 1px solid'>";
                foreach ($comunidades as $array=>$comunidad) {
                    foreach ($comunidad as $clave=>$valor) {
                        
                        if ($clave == "comunidad") {

                            $sumatorio = 0;
                            foreach ($comunidad['provincias'] as $valorProvincias) {
                                $sumatorio += $valorProvincias;
                            }

                            echo "<tr><td scope='row' style='border: black 1px solid";
                            if ($sumatorio>=500) {
                                echo "; background-color: red";
                            } 
                            echo "'>$valor</td>";
                        } else {
                            foreach ($valor as $provincia=>$casos) {
                                echo "<td style='border: black 1px solid'>$provincia</td>";
                            }
                        }
                    }
                        echo "</tr>";
                }
                echo "</table>";
            ?>
        </section>
    </body>
</html>