<?php
/**
 * Autor: David Galván Fontalba
 * Fecha: 28 / 9 / 2020
 */
    $user = "mecanico";
?>

<!doctype html>
<html lang="es">
    <head>
        <link rel="icon" href="" alt="">
        <title>Distintos enlaces DF</title>
        <meta charset="utf-8">
        <meta name="author" content="David Galván Fontalba"/>
        <meta name="description" content="Lista de enlaces en función del perfil de usuario."/>

    </head>
    <body>
        <header>
            <h1>Taller mecánico.</h1>
        </header>
        <section>
            <p>Los dependientes y los mecánicos no ven los mismos enlaces.</p>
            <?php
                if ($user == "dependiente") {
                    echo "<p><a href='https://comohacerpara.com/tecnicas-trabajo/atender-bien-publico-personalmente-11196t.html'>Cómo Atender Bien al Público Personalmente</a></p>";
                    echo "<p><a href='https://www.entrepreneur.com/article/269156'>Los 10 mandamientos de la imagen personal.</a></p>";

                } else if ($user == "mecanico") {
                    echo "<p><a href='https://itv.com.es/marcas-recambios-coches'>Las mejores marcas de recambios para coches.</a></p>";
                    echo "<p><a href='https://autoestatico.com/10-medidas-de-seguridad-en-tu-taller-mecanico/#:~:text=En%20el%20taller%20mec%C3%A1nico,met%C3%A1licos%20y%20libres%20de%20vertidos.&text=Se%20debe%20ordenar%20y%20estructurar,sus%20tareas%20de%20forma%20segura.'>10 medidas de seguridad en tu taller mecánico.</a></p>";

                } else {
                    echo "<p>Tu usuario no está registrado.</p>";
                }
            ?>
        </section>
    </body>
</html>