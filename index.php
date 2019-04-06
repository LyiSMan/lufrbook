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
	$name = $_POST['name'];
	$filename = 'friends.txt';
	$file = fopen( $filename, "r" );
	/*while (!feof($file)) {
    		$name = trim(fgets($file));
		if(strlen($name)>0){
		echo $name;
		}
	}*/
	
	//$file = fopen( $filename, "a" );
	
	//fwrite( $file, "$name\n" );
	
?> 
</body> 
</html>
