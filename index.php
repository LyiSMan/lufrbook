<html>
<head> 
	<title>
	Friends book
	</title> 
</head> 
<body> 
<?php 
	<form action="index.php" method="post">
	Name: <input type="text" name="name">
	<input type="submit">
	</form>
	if (isset($_POST['name'])) {
		$name = $_POST['name'];
	}
	$filename = 'friends.txt';
	$file = fopen( $filename, "r" );
	while (!feof($file)) {
    		echo trim(fgets($file));
	}
	
	//$file = fopen( $filename, "a" );
	
	//fwrite( $file, "$name\n" );
	
?> 
</body> 
</html>
