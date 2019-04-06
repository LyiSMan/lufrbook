<html>
<head> 
	<title>
	Friends book
	</title> 
</head> 
<body> 
	<form action="index.php" method="post">
	Name: <input type="text" name="name">
	<input type="submit">
	</form>
<?php
	
	$filename = 'friends.txt';
	$file = fopen( $filename, "r" );
	while (!feof($file)) {
    		$name = trim(fgets($file));
		if(strlen($name)>0){
			echo $name;
		}
	}
	
	$name = $_POST['name'];
	$file = fopen( $filename, "a" );
	fwrite( $file, "$name\n" );
	
?> 
</body> 
</html>
