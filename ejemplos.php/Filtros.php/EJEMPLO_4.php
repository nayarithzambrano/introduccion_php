<h1>EJERCICIO 4</h1>
<!DOCTYPE html>
<html>
<body>

<?php
$int = 0;

if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}
?>

</body>
</html>