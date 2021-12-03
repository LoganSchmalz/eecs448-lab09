<html><body>
<?php
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];

echo "Question 1: What is the nae for the Jewish New Year?<br>You answered: " . $q1 . "<br>Correct answer: Rosh Hashanah<br><br>";
echo "Question 2: How many blue stripes are there on the U.S. flag?<br>You answered: " . $q2 . "<br>Correct answer: 0<br><br>";
echo "Question 3: Which one of theres characters is not friends with Harry Potter?<br>You answered: " . $q3 . "<br>Correct answer: Draco Malfoy<br><br>";
echo "Question 4: What is the color of Donald Duck's bowtie?<br>You answered: " . $q4 . "<br>Correct answer: Red<br><br>";
echo "Question 5: What was the name of the band Lionel Richie was a part of?<br>You answered: " . $q5 . "<br>Correct answer: Commodores<br><br>";


$score = 0;
if ($q1 == "Rosh Hashanah")
{
	$score += 1;
}
if ($q2 == "0")
{
	$score += 1;
}
if ($q3 == "Draco Malfoy")
{
	$score += 1;
}
if ($q4 == "Red")
{
	$score += 1;
}
if ($q5 == "Commodores")
{
	$score += 1;
}

echo "You scored " . $score . "/5, or " . ($score / 5 * 100) . "%.<br><br>";
?>


<a href="index.html">Home</a>
</body></html>
