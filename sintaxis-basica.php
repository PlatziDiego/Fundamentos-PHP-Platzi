<?php

    //-------------Strings y numbers e impresión por pantalla----------------------------

/*     echo "Hola, mamá. Estoy programando con PHPcito.\n";
    echo "Hola, mamá, este es un salto de línea en el navegador.<br>\n";

    $nombre = 'Carlos';
    $apellido = 'Santana';
    $edad = 78;

    echo "No, no. Yo me llamo " . $nombre . " " .  $apellido . ".\n";

    echo "No, no. Yo me llamo $nombre $apellido y tengo $edad años.\n";

    //Concatenar con operaciones matemáticas:

    echo "El resultado de 4 x 5 es: " . (4 * 5) . "\n"; */

    
    
    
    //-----------------------Debugging-------------------------------------------

    $personas = [
        "Carlos" => 22,
        "Mr. Michi" => 15,
        "Juan" => 65
    ];

    var_dump( $personas);
    
    echo "\n";

    print_r($personas);

    echo "\n";

    // Esto es un comentario
    # Esto es otro comentario

    /* 
    Este es un comentario de varias líneas.
    Cualquier cosa,
    abajo seguir escribiento más cosas,
    UwU

    Todo esto sirve, principalmente para documentar el código y que dé claridad sobre partes que puedan ser ambiguas.
    También sirve para ignorar partes del código mientras se hacen pruebas a otras partes.
    */

?>