<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>variables y constantes</h1>
    <!--script php-->
    <?php 
        /*1. la forma de representar las variables en php es anteponiendo el símbolo $ a la palabra que utilizaremos como variable. Ejemplo: sedad*/
        
        /*2. Debemos prestar atencion a las mayúsculas y minúsculas, ya que PHP reconoce la diferencia entrelas dos. $valor es diferente de sVALOR */
        
        /*3. ¿paraque se utilizan la variables? gracias a ellas podremos realizar opraciones aritmeticas y operaciones con cadenas, etc. */
        
        /*4. las variables las utilizadas como y cuando queramos en una misma página, ya que no existe limitación en cuanto a su uso */
        
        /*5. hay que prestar atención a no provocar errores por utilizar como variables palabras reservadas por el lenguaje, Ejemplo: $os se genera error, porque es una variable predefinida. */
        
        /*6. tambien se debe evitar el error de empezar una variable por un numero. Ejemplo: $35var = 45 es un error */
        
        /*En PHP no es necesario especificar el tipo de variable, pero si debemos saber cuando utilizar las comillas a la hora de definirlas, ya que su uso indicaria que se esta hablando de una cadena Ejemplo: 7,$nombre = "axlyn" */
        
        /*podemos mostrar las variables en pantalla de varias maneras: una de ellas puede ser utilizando la opción echo(); otrapuede ser mediante print(); */

        $a = 5;
        $b ="7";
        echo "<b><h1>";
        echo($a);
        echo "<br>";
        echo($b);
        echo "</b></h1>";

        //constantes
        //la forma de definir una constante esmediante la funcion define
        //Sintaxis: define("nombre_variable, "valor_variable")

        define("capital_colombia","Bogota");
        define("habitantes", 7000000);
    ?>
</body>
</html>