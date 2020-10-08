<?php
/**
 * Autor: David Galván Fontalba
 * Fecha: 6 / 10 / 2020
 */
 $comunidades = array(
    array(  "comunidad" => "Andalucía",
            "provincias"=> array("Córdoba","Granada","Sevilla","Huelva","Jaén","Almería","Cádiz","Málaga")),
    array(  "comunidad" => "Aragón",
            "provincias"=> array("Huesca", "Teruel", "Zaragoza")),
    array(  "comunidad" => "Asturias",
            "provincias"=> array("Oviedo")),
    array(  "comunidad" => "Baleares",
            "provincias"=> array("Palma de Mallorca")),
    array(  "comunidad" => "Canarias",
            "provincias"=> array("Santa Cruz de Tenerife", "Las Palmas de Gran Canaria")),
    array(  "comunidad" => "Cantabria",
            "provincias"=> array("Santander")),
    array(  "comunidad" => "Castilla-La Mancha",
            "provincias"=> array("Albacete", "Ciudad Real", "Cuenca", "Guadalajara", "Toledo")),
    array(  "comunidad" => "Castilla y León",
            "provincias"=> array("Valladolid", "Leon", "Palencia", "Burgos", "Soria", "Ávila", "Segovia", "Zamora", "Salamanca")),
    array(  "comunidad" => "Cataluña",
            "provincias"=> array("Barcelona", "Gerona", "Lérida", "Tarragona")),
    array(  "comunidad" => "Comunidad Valenciana",
            "provincias"=> array("Alicante", "Castellón de la Plana", "Valencia")),
    array(  "comunidad" => "Extremadura",
            "provincias"=> array("Badajoz", "Cáceres")),
    array(  "comunidad" => "Galicia",
            "provincias"=> array("Lugo", "Orense", "Coruña", "Pontevedra")),
    array(  "comunidad" => "Madrid",
            "provincias"=> array("Madrid")),
    array(  "comunidad" => "Murcia",
            "provincias"=> array("Murcia")),
    array(  "comunidad" => "Navarra",
            "provincias"=> array("Pamplona")),
    array(  "comunidad" => "País Vasco",
            "provincias"=> array("Bilbao", "San Sebastián", "Vitoria")),
    array(  "comunidad" => "La Rioja",
            "provincias"=> array("Logroño"))
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
                echo $comunidades[0]["provincias"][0];
                echo "<table style='border: black 1px solid'>";
                foreach ($comunidades as $array=>$comunidad) {
                    foreach ($comunidad as $clave=>$valor) {
                        if ($clave == "comunidad") {
                            echo "<tr><td scope='row' style='border: black 1px solid'>$valor</td>"; 
                        } else {
                            foreach ($valor as $provincia) {
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