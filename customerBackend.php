<html><body>
<head>
	<title>Backend</title>
	<link rel="stylesheet" href="storestyle.css">
</head>


<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$email = $_POST["email"];
$password = $_POST["password"];
$hotdogs = $_POST["hotdogs"];
$hamburgers = $_POST["hamburgers"];
$lemonade = $_POST["lemonade"];
$shipping = $_POST["shipping"];

$shipcost = 0;
if ($shipping == "Overnight")
{
	$shipcost = 50;
}
else if ($shipping == "3 day")
{
	$shipcost = 5;
}

$total = $hotdogs*10 + $hamburgers*15 + $lemonade*20 + $shipcost;

echo "Welcome " . $email . "! Your password is <b>" . $password . "</b>.<br>";

echo "<table><tr><th></th><th>Quantity</th><th>Cost Per Item</th><th>Sub Total</th></tr>";
echo "<tr><th>Hotdogs</th><td>".$hotdogs."</td><td>$10.00</td><td>$".number_format($hotdogs*10,2)."</td></tr>";
echo "<tr><th>Hamburgers</th><td>".$hamburgers."</td><td>$15.00</td><td>$".number_format($hamburgers*15,2)."</td></tr>";
echo "<tr><th>Lemonade</th><td>".$lemonade."</td><td>$20.00</td><td>$".number_format($lemonade*20,2)."</td></tr>";
echo "<tr><th>Shipping</th><td colspan='2'>".$shipping."</td><td>$".number_format($shipcost, 2)."</td></tr>";
echo "<tr><th colspan='3'>Total Cost</th><th>$".number_format($total,2)."</th></tr>";
echo "</table>";
?>

<a href="index.html">Home</a>
</body></html>
