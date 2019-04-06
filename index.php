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
<ul>
<?php
	
	$filename = 'friends.txt';
	$file = fopen( $filename, "r" );
	while (!feof($file)) {
    		$name = trim(fgets($file));
		if(strlen($name)>0){
			echo "<li>$name</li>";
		}
	}
	
	$name = $_POST['name'];
	echo "<li><b>$name</b></li>";
	$file = fopen( $filename, "a" );
	fwrite( $file, "$name\n" );
	
?> 
</ul>
</body> 
</html>
