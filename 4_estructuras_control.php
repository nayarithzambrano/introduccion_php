<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras control</title>
</head>
<body>
    <h1>Estructuras de control</h1>
    <?php
    //if,if-else
    echo "<h1>if</h1>";
    //Ejemplo 1
    $color = "rojo";
    if($color = "rojo")
    {
        print("Efectivamente el color es rojo");
    }
    echo "<br>";
    // Ejemplo 2
    $x = 10;
    $y = 15;
    if($x == $y)
    {
        print("x e y son iguales");
    }
    elseif($x > $y)
    {
        print("x es mayor que y");
    }
    echo "<br>";
    echo "<h1>while</h1>";
    //while
    //bindica que mientras no se cumpla una determinada condicion no se saldra del bucle y no
    // saltara a las siguiente linea de coidgo
    $x = 10;
    while(--$x)
    {
        echo "<big>";
        echo "<b>";
        print("Numero: ".$x);
        echo "</b>";
        echo "<hr>";
    }
    //do-while
    //for
    // sera utilizado para ejecutar un bucle un deterimando numero de veces, hasta que cumpla una
    // condicion 
    echo "<br>";
    echo "<h1>for</h1>";
    for($x=5; $x<=10; $x++)
    {
        print("Numero: ".$x."<br>");
    }

    //require
    //Sirve para incluir archivos en nuestras paginas y solo sera  necesario hacer referencia 
    // a este archivo con instruccion requiere. se usa principalmente para definir variables 
    // y estas estaran listas una vez hagamos una llamada al archivo donde esten guardadas 

    //include
    // El funcionamiento es igual que el de la instruccion requiere(), con la diferencia de que si 
    //puede procesar el codigo tantas veces como las llamemos a esa pagina externa.
    includ(variables.php);
    echo "<br>";
    print("$x"."$z"."$y");
    
    //switch
    // se uutiliza para comprobar un dato entre varias posibilidades 
    echo "<br>";
    echo "<h1>switch</h1>";
    $color = "negro";
    switch($color)
    {
        case"blanco";
            $sector = "claro";
            break;
        case "naranja";
        $sector ="normal";
        break;
        case "negro";
        $sector = "oscuro";
        break;
    }
    print($sector);
    ?> 
</body>
</html>
