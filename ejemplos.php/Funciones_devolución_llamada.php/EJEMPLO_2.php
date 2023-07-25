<h1>EJERCICIO 2</h1>
<!DOCTYPE html>
<html>
<body>

<?php
$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map( function($item) { return strlen($item); } , $strings);
print_r($lengths);
?>

</body>
</html>