<?php

    $numerito = "5";

    var_dump($numerito);

    $numerito = (int) $numerito;
    var_dump($numerito);

    $numero = (int) 45;
    $numero = "carlos";
    var_dump($numero);


    $dias = 5.89;
    $dias = (int) $dias;
    var_dump($dias);

    $entero_no_cero = 4395870;
    $entero_no_cero = (bool) $entero_no_cero;
    var_dump($entero_no_cero);

    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
 
    $json_decoded = json_decode($jsonobj);

    foreach($json_decoded as $x => $val) {
        echo "\"$x\" : $val\n";
      }

?>