<!DOCTYPE html>
<html>
<body>
<h1>EJERCICIO 4</h1>
AJAX = Asynchronous JavaScript and XML
CSS = Cascading Style Sheets
HTML = Hyper Text Markup Language
PHP = PHP Hypertext Preprocessor
SQL = Structured Query Language
SVG = Scalable Vector Graphics
XML = EXtensible Markup Language
<?php
$myfile = fopen("webdictionary.txt", "r") or die();
// Output one character until end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);
?>

</body>
</html>