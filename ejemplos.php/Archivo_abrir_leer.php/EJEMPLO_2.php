<h1>EJERCICIO 2</h1>

AJAX = Asynchronous JavaScript and XML
<?php
$myfile = fopen("webdictionary.txt", "r") or die("");
echo fgets($myfile);
fclose($myfile);
?>


