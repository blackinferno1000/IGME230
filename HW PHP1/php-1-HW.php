<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<?PHP
	    $pageTitle = "Hello-4"; // here we are declaring a variable
	?>
	<title>
	<?PHP
	    echo $pageTitle; 	// and we use that variable here
	?>
	</title>
</head>
<body>
<style>
body{
    font-family: sans-serif;
}
</style>
<?PHP
	echo "<h1>$pageTitle</h1>"; // and we use that variable a second time here
	echo "<div>Content goes here!</div>";
	echo "<hr>";
	echo "<footer>Page accessed on: </footer>";
	echo date("Y-m-d h:i");  // date() is a built-in PHP function
?>
</body>
</html>
