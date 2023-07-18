<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores</title>
</head>
<body>
 <h1>operadores</h1>
 <?php
 //operadores aritmeticos
 /*Los operadores aritméticos se usan para calcular un valor de dos o más números, o cambiar el signo de un número de positivo a negativo o viceversa.
 /*<?php
ejemplo:
echo (5 % 3)."\n";           // muestra 2
echo (5 % -3)."\n";          // muestra 2
echo (-5 % 3)."\n";          // muestra -2
echo (-5 % -3)."\n";         // muestra -2

?>

 //operadores de comparacion 
 /*Los operadores de la comparación < (menor que), > (mayor que), <= (menor o igual que) y >= (mayor o igual que), también conocidos como relacionales, comparan sus operandos

 ejemplos:
 <?php
var_dump(0 == "a"); // 0 == 0 -> true
var_dump("1" == "01"); // 1 == 1 -> true
var_dump("10" == "1e1"); // 10 == 10 -> true
var_dump(100 == "1e2"); // 100 == 100 -> true

switch ("a") {
case 0:
    echo "0";
    break;
case "a": // nunca alcanzado debido a que "a" ya ha coincidido con 0
    echo "a";
    break;
}
?>

//operadores logicos
/*

ejemplos:
<?php

// --------------------
// foo() nunca será llamado ya que los operadores están en cortocircuito

$a = (false && foo());
$b = (true  || foo());
$c = (false and foo());
$d = (true  or  foo());

// --------------------

// --------------------
//operadores de unio de cadenas
?>
</body>
</html>


