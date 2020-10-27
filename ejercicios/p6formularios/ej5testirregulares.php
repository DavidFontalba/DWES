<?php

/**
 * Autor: David Galván Fontalba
 * Fecha: 20 / 10 / 2020
 */
session_start();

function clearData($cadena)
{
    return stripslashes(htmlspecialchars(trim($cadena)));
}
function aleatorios($cantidadNumeros, $min, $max)
{
    $result = [];
    for ($i = 0; $i < $cantidadNumeros; $i++) {
        do { $random = rand($min, $max);
        } while (in_array($random, $result));
        array_push($result, $random);
    }
    return $result;
}
//VERBOS
$verbosIrregulares = array(
    array("levantarse", "arise", "arose", "arisen"),
    array("ser", "be", "was", "been"),
    array("golpear", "beat", "beat", "beaten"),
    array("convertirse", "become", "became", "become"),
    array("comenzar", "begin", "began", "begun"),
    array("apostar", "bet", "bet", "bet"),
    array("morder", "bite", "bit", "bitten"),
    array("sangrar", "bleed", "bled", "bled"),
    array("soplar", "blow", "blew", "blown"),
    array("romper", "break", "broke", "broken"),
    array("traer", "bring", "brought", "brought"),
    array("construir", "build", "built", "built"),
    array("comprar", "buy", "bought", "bought"),
    array("atrapar", "catch", "caught", "caught"),
    array("elegir", "choose", "chose", "chosen"),
    array("venir", "come", "came", "come"),
    array("costar", "cost", "cost", "cost"),
    array("arrastrarse", "creep", "crept", "crept"),
    array("cortar", "cut", "cut", "cut"),
    array("negociar", "deal", "dealt", "dealt"),
    array("hacer", "do", "did", "done"),
    array("dibujar", "draw", "drew", "drawn"),
    array("soñar", "dream", "dreamt", "dreamt"),
    array("beber", "drink", "drank", "drunk"),
    array("conducir", "drive", "drove", "driven"),
    array("comer", "eat", "ate", "eaten"),
    array("caer", "fall", "fell", "fallen"),
    array("alimentar", "feed", "fed", "fed"),
    array("sentir", "feel", "felt", "felt"),
    array("pelear", "fight", "fought", "fought"),
    array("encontrar", "find", "found", "found"),
    array("huir", "flee", "fled", "fled"),
    array("volar", "fly", "flew", "flown"),
    array("olvidar", "forget", "forgot", "forgotten"),
    array("perdonar", "forgive", "forgave", "forgiven"),
    array("abandonar", "forsake", "forsook", "forsaken"),
    array("congelar", "freeze", "froze", "frozen"),
    array("tener", "get", "got", "gotten"),
    array("dar", "give", "gave", "given"),
    array("ir", "go", "went", "gone"),
    array("moler", "grind", "ground", "ground"),
    array("crecer", "grow", "grew", "grown"),
    array("colgar", "hang", "hung", "hung"),
    array("tener", "have", "had", "had"),
    array("oír", "hear", "heard", "heard"),
    array("esconderse", "hide", "hid", "hidden"),
    array("golpear", "hit", "hit", "hit"),
    array("mantener", "hold", "held", "held"),
    array("herir", "hurt", "hurt", "hurt"),
    array("guardar", "keep", "kept", "kept"),
    array("arrodillarse", "kneel", "knelt", "knelt"),
    array("saber", "know", "knew", "known"),
    array("encabezar", "lead", "led", "led"),
    array("aprender", "learn", "learnt", "learnt"),
    array("dejar", "leave", "left", "left"),
    array("prestar", "lend", "lent", "lent"),
    array("dejar", "let", "let", "let"),
    array("yacer", "lie", "lay", "lain"),
    array("perder", "lose", "lost", "lost"),
    array("hacer", "make", "made", "made"),
    array("significar", "mean", "meant", "meant"),
    array("conocer", "meet", "met", "met"),
    array("pagar", "pay", "paid", "paid"),
    array("poner", "put", "put", "put"),
    array("abandonar", "quit", "quit", "quit"),
    array("leer", "read", "read", "read"),
    array("montar", "ride", "rode", "ridden"),
    array("llamar", "ring", "rang", "rung"),
    array("elevar", "rise", "rose", "risen"),
    array("correr", "run", "ran", "run"),
    array("decir", "say", "said", "said"),
    array("ver", "see", "saw", "seen"),
    array("vender", "sell", "sold", "sold"),
    array("enviar", "send", "sent", "sent"),
    array("fijar", "set", "set", "set"),
    array("coser", "sew", "sewed", "sewn"),
    array("sacudir", "shake", "shook", "shaken"),
    array("brillar", "shine", "shone", "shone"),
    array("disparar", "shoot", "shot", "shot"),
    array("mostrar", "show", "showed", "shown"),
    array("encoger", "shrink", "shrank", "shrunk"),
    array("cerrar", "shut", "shut", "shut"),
    array("cantar", "sing", "sang", "sung"),
    array("hundir", "sink", "sank", "sunk"),
    array("sentarse", "sit", "sat", "sat"),
    array("dormir", "sleep", "slept", "slept"),
    array("deslizar", "slide", "slid", "slid"),
    array("sembrar", "sow", "sowed", "sown"),
    array("hablar", "speak", "spoke", "spoken"),
    array("deletrear", "spel", "spelt", "spelt"),
    array("gastar", "spend", "spent", "spent"),
    array("derramar", "spill", "spilt", "spilt"),
    array("dividir", "split", "split", "split"),
    array("estropear", "spoil", "spoilt", "spoilt"),
    array("extenderse", "spread", "spread", "spread"),
    array("estar de pie", "stand", "stood", "stood"),
    array("robar", "steal", "stole", "stolen"),
    array("picar", "sting", "stung", "stung"),
    array("apestar", "stink", "stank", "stunk"),
    array("golpear", "strike", "struck", "struck"),
    array("jurar", "swear", "swore", "sworn"),
    array("barrer", "sweep", "swept", "swept"),
    array("nadar", "swim", "swam", "swum"),
    array("tomar", "take", "took", "taken"),
    array("enseñar", "teach", "taught", "taught"),
    array("romper", "tear", "tore", "torn"),
    array("decir", "tell", "told", "told"),
    array("pensar", "think", "thought", "thought"),
    array("lanzar", "throw", "threw", "thrown"),
    array("pisar", "tread", "trode", "trodden"),
    array("despertarse", "wake", "woke", "woken"),
    array("llevar puesto", "wear", "wore", "worn"),
    array("tejer", "weave", "wove", "woven"),
    array("llorar", "weep", "wept", "wept"),
    array("ganar", "win", "won", "won"),
    array("retorcer", "wring", "wrung", "wrung"),
    array("escribir", "write", "wrote", "written")
);

$configNivel = array(
    array("radio", "nivel", "1"),
    array("radio", "nivel", "2"),
    array("radio", "nivel", "3")
);

$configVerbos = array(
    array("text", "verbos", "1-108"),
    array("submit", "envio", "Enviar")
);
//Datos iniciales
$nivel = $numVerbos = 1;
$allOk = false;
$aResponder = $randomIndices = [];

//Validación de la configuración del test
if (isset($_POST['envio'])) {
    //Validación
    $allOk = true;
    $nivel = clearData($_POST['nivel']);
    $numVerbos = clearData($_POST['verbos']);

    if (empty($numVerbos) || $numVerbos < 1 || $numVerbos >= sizeof($verbosIrregulares)) {
        $allOk = false;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="David Galván Fontalba" />
    <title>Test de verbos irregulares DF</title>
</head>

<body>
    <h1>Test de verbos irregulares</h1>
    <?php

    if (isset($_POST['envioTest'])) {
        echo '<p>Nivel: ' . $_SESSION['nivel'] . '</p><p>Número de verbos: ' . $_SESSION['numVerbos'] . ' </p>';
        echo '<form action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="POST">';
        echo '<table><tr><td scope="col">Español</td><td scope="col">Infinitivo</td><td scope="col">Pasado</td><td scope="col">Participio</td></tr>';
        //Repito la tabla de antes mostrando si el resultado es correcto o no
        $arrayDeKeys = [];
        foreach ($_POST as $key => $valor) {
            array_push($arrayDeKeys, $key);
        }
        $aciertos = 0;
        //Recorro los índices de los verbos generados aleatoriamente
        foreach ($_SESSION['randomIndices'] as $iVerbo) {
            echo '<tr>';

            $i = 0;
            //Recorro todas las formas, incluso la traducción de los verbos que recorro
            foreach ($verbosIrregulares[$iVerbo] as $iForma) {
                if (strtoupper($iForma) == strtoupper($_POST[$iVerbo.",".$i])){
                    $aciertos++;
                    echo '<td><input style="color: green" type="text" name="' . $iVerbo . ',' . $i . '" value="' . $iForma . '"></input></td>';
                } else if (in_array($iVerbo.",".$i, $arrayDeKeys)) {
                    echo '<td><input style="color: red" type="text" name="' . $iVerbo . ',' . $i . '" value="' . $_POST[$iVerbo.",".$i] . '"></input></td>';
                } else {
                    echo '<td><input type="text" name="resultado" value="" placeholder="' . $iForma . '" disabled></input></td>';
                }
                $i++;
                next($verbosIrregulares[$iVerbo]);

            }
            echo '</tr>';
        }
        echo '<tr><td>Aciertos: '.$aciertos.'<td></tr>';
        echo '<tr><td><input type="submit" name="envioTest" value="Corregir test"></input></td></tr>';
        echo '</table></form>';
    } else if ($allOk) {
        echo '<p>Nivel: ' . $nivel . '</p><p>Número de verbos: ' . $numVerbos . ' </p>';
        echo '<form action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="POST">';
        echo '<table><tr><td scope="col">Español</td><td scope="col">Infinitivo</td><td scope="col">Pasado</td><td scope="col">Participio</td></tr>';
        $randomIndices = aleatorios($numVerbos, 0, sizeof($verbosIrregulares) - 1);
        $_SESSION['randomIndices'] = $randomIndices;
        $_SESSION['nivel'] = $nivel;
        $_SESSION['numVerbos'] = $numVerbos;
        foreach ($randomIndices as $iVerbo) {
            $aResponder = aleatorios($nivel, 0, sizeof($verbosIrregulares[$iVerbo]) - 1);
            echo '<tr>';
            $i = 0;
            foreach ($verbosIrregulares[$iVerbo] as $iForma) {
                if (in_array($i, $aResponder)) {
                    //Usuario tiene que responder
                    echo '<td><input type="text" name="' . $iVerbo . ',' . $i . '" value="" placeholder="..."></input></td>';
                } else {
                    //Le doy la forma correcta
                    echo '<td><input type="text" name="' . $iVerbo . ',' . $i . '" value="' . $iForma . '" placeholder="' . $iForma . '" disabled></input></td>';
                }
                $i++;
            }
        }
        echo '</tr><tr><td><input type="submit" name="envioTest" value="Corregir test"></input></td></tr>';
        echo '</table></form>';
    } else {
        //Formulario y radio buttons
        echo '<form action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="POST"><label>Elige un nivel de dificultad: </label>';
        for ($i = 0; $i < sizeof($configNivel); $i++) {
            echo '<input type="' . $configNivel[$i][0] . '" name="' . $configNivel[$i][1] . '" value="' . $configNivel[$i][2] . '">' . $configNivel[$i][2] . '</input>';
        }
        echo '<br/>';

        //Inputs
        echo '<label>Introduce cuántos verbos irregulares quieres superar: </label>';
        echo '<input type="' . $configVerbos[0][0] . '" name="' . $configVerbos[0][1] . '" placeholder="' . $configVerbos[0][2] . '" value=""/>';
        echo '<br/><input type="' . $configVerbos[1][0] . '" name="' . $configVerbos[1][1] . '" value="' . $configVerbos[1][2] . '"/></form>';
    }
    ?>
</body>
</html>