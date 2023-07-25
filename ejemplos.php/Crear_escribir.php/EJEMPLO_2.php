<h1>EJERCICIO 2</h1>
Mickey Mouse
Minnie Mouse
<?php
$myfile = fopen("newfile.txt", "w") or die("");
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);
fclose($myfile);
?>

