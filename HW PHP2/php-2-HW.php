<?PHP
	define("PI", 3.14159);
	$radius = 10;
	$area = PI * $radius * $radius;
    $circumference = 2 * ($radius * PI);
   echo "<p>The area of a radius $radius circle is $area</p>";
   echo "<p>The circumference of a radius $radius circle is $circumference</p>";
?>