<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

function genTable()
{
	$x = "<table><tr><td>&times;</td>";
	for ($i = 1; $i <= 100; $i++)
	{
		$x .= "<td><b>" . $i . "</b></td>";
	}
	$x .= "</tr>";

	for ($i = 1; $i <= 100; $i++)
	{
		$x .= "<tr><td><b>" . $i . "</b></td>";
		for ($j = 1; $j <= 100; $j++)
		{
			$x .= "<td>" . $i*$j . "</td>";       
		}
		$x .= "</tr>";
	}
	$x .= "</table>";
	return $x;
}

echo genTable();
?>
