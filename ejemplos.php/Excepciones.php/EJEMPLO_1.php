<h1>EJERCICIO 1</h1>
<!DOCTYPE html>
<html>
<body>
Fatal error: Uncaught Exception: Division by zero in C:\webfolder\test.php:4
Stack trace: #0 C:\webfolder\test.php(9):
divide(5, 0) #1 {main} thrown in C:\webfolder\test.php on line 4

<?php
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

echo divide(5, 0);
?>

</body>
</html>