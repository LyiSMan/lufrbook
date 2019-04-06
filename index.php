<html>
<head> 
	<title>
	
	</title> 
</head> 
<body> 
<?php 
	<form action="index.php" method="post">
	Name: <input type="text" name="name">
	<input type="submit">
	</form>
		
	$filename = 'friends.txt';
	$file = fopen( $filename, "r" );
	while (!feof($file)) {
    		echo fget($file);
	}

	$file = fopen( $filename, "a" );
	fwrite( $file, "some string" );
	
?> 
</body> 
</html>
