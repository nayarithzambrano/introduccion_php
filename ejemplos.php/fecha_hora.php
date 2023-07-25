<!DOCTYPE html>
<html>
<body>
<h1>EJERCICIO 1</h1>
<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>

<h1>EJERCICIO 2</h1>

© 2010-<?php echo date("Y");?>

<h1>EJERCICIO 3</h1>
<?php
echo "The time is " . date("h:i:sa");
?>

<h1>EJERCICIO 4</h1>

<?php
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
?>

<h1>EJERCICIO 5</h1>
<?php
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>

<h1>EJERCICIO 6</h1>
<?php
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>

<h1>EJERCICIO 7</h1>
<?php
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>

<h1>EJERCICIO 8</h1>
<?php
$startdate=strtotime("Saturday");
$enddate=strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}
?>

<h1>EJERCICIO 9</h1>
<?php
$d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of July.";
?>

</body>
</html>