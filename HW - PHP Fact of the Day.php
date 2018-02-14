<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Fact of the Day</title>
</head>
<style>
body{
    background: red;
}
div{
    height: 600px;
    width: 400px;
    margin-left: auto;
    margin-right: auto;
    border-style: solid;
    background: grey;
}
</style>
<body>
<div>
<h1>Fact of the Day</h1>
<h2>Here's the joke of the day hope you enjoy!</h2>
<?PHP
$facts =["A reindeer's eyes change color through the seasons. They’re gold during the summer and blue in the winter.",
"An avocado never ripens on the tree, so farmers can use trees as storage and keep avocados fresh for up to seven months.",
"Amelia Earhart and Eleanor Roosevelt once sneaked out of a White House event, commandeered an airplane, and went on a joyride to Baltimore.",
"At the Humane Society of Missouri, kid volunteers comfort anxious shelter dogs by reading to them.",
"During Prohibition, moonshiners would wear 'cow shoes.' The fancy footwear left hoofprints instead of footprints, helping distillers and smugglers evade police.",
"In The Empire Strikes Back, an extra can be seen running with what appears to be an ice cream maker. The character became legendary among fans, and was eventually given a name (Willrow Hood) and a backstory.",
"China owns all of the pandas in the world. They rent them out for about $1 million a year."];
$fact = array_rand($facts, count($facts)- 1);
echo "<p>$facts[$fact]</p>";
?>
<form action="HW-random-fact.php" method="post">
	<input type="submit" value="Get another fact!">
</form>
</div>
</body>
</html>