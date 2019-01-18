
	<?php
	
	if (empty($_GET['name'])) {
		$name = ' du okände';
	} else {
		$name = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
	}	
		
	header("Content-type: text/html; charset=utf-8");	
	
	?>
	
	<!DOCTYPE html>
	
	<html lang="sv">
<head>
	<meta Charset="utf-8" />
		<title> Hello 2 </title>
		
	<style>
	body {
		font-family: sans-serif;
		}
		
	</style>
	
</head>

	<body>
	
		<h1> Hello 2 </h1>
		
	<?php
		echo "<p>Hej $name</p>\n";
	?>
	
	</body
</html>
