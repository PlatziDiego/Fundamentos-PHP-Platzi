<?php

    $numero_1 = 8;
    $numero_2 = 7;


    // Para definir una variable usamos la función define("NOMBRE_DE_LA_CONSTANTE_EN_MAYUSCULAS", valor de la constante) y para usarlas no necesitamos signo $
    
    define("NUMERO_PI", 3.1416);

/* 
    define("NUMERO_PI", 3.1516);

    PHP Warning:  Constant NUMERO_PI already defined in C:\Platzi_Projects\Básico_PHP\variables.php on line 10
    Warning: Constant NUMERO_PI already defined in C:\Platzi_Projects\Básico_PHP\variables.php on line 10
 */
    
 /* 
    NUMERO_PI = 45;

    PHP Parse error:  syntax error, unexpected token "=" in C:\Platzi_Projects\Básico_PHP\variables.php on line 12
    Parse error: syntax error, unexpected token "=" in C:\Platzi_Projects\Básico_PHP\variables.php on line 12

  */
    
  
    echo NUMERO_PI . "\n";


    echo $numero_1 + $numero_2;
    echo "\n";


?>