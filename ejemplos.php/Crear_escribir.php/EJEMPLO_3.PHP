
<h1>EJERCICIO 3</h1>
Mickey Mouse
Minnie Mouse
Donald Duck
Goofy Goof
<?php
$myfile = fopen("newfile.txt", "a") or die("");
$txt = "Donald Duck\n";
fwrite($myfile, $txt);
$txt = "Goofy Goof\n";
fwrite($myfile, $txt);
fclose($myfile);
?>