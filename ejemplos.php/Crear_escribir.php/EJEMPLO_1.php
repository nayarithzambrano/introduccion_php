<h1>EJERCICIO 1</h1>

John Doe
Jane Doe
<?php
$myfile = fopen("newfile.txt", "w") or die("");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>

