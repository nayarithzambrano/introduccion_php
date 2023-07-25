<!DOCTYPE html>
<html>
<body>
<h1>EJERCICIO 1</h1>

<h1>Welcome to my home page!</h1>

<p>Some text.</p>
<p>Some more text.</p>
<?php include 'footer.php';?>
<?php
echo "<p>Copyright &copy; 1999-" . date("Y") . " W3Schools.com</p>";
?>

<h1>EJERCICIO 2</h1>
<?php
echo '<a href="/default.asp">Home</a> -
<a href="/html/default.asp">HTML Tutorial</a> -
<a href="/css/default.asp">CSS Tutorial</a> -
<a href="/js/default.asp">JavaScript Tutorial</a> -
<a href="default.asp">PHP Tutorial</a>';
?>

<div class="menu">
<?php include 'menu.php';?>
</div>

<h1>Welcome to my home page!</h1>
<p>Some text.</p>
<p>Some more text.</p>

<h1>EJERCICIO 3</h1>
<?php
$color='red';
$car='BMW';
?>
<h1>Welcome to my home page!</h1>
<?php include 'vars.php';
echo "I have a $color $car.";
?>

<h1>EJERCICIO 4</h1>

<h1>Welcome to my home page!</h1>
<?php include 'noFileExists.php';
echo "I have a  .";
?>

<h1>EJERCICIO 5</h1>
<h1>Welcome to my home page!</h1>
<?php require 'noFileExists.php';
echo "I have a $color $car.";
?>

</body>
</html>
