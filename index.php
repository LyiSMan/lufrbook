<html>
<head> 
	<title>
	Friends book
	</title> 
</head> 
<body> 
	<form action="index.php" method="post">
	Name: <input type="text" name="name">
	<input type="submit" value="Add new friend">
	</form>
	<h1>My best friends:</h1>
<ul>
<?php
	$filter = trim($_POST['nameFilter']);
	$starting = $_POST['startingWith'];
	if (strlen($filter) <= 0) {
		$filename = 'friends.txt';
		$file = fopen( $filename, "r" );
		while (!feof($file)) {
    			$name = trim(fgets($file));
			if (strlen($name) > 0){
				echo "<li>$name</li>";
			}
		}
	}
	else {
		if ($starting) {
			$filename = 'friends.txt';
			$file = fopen( $filename, "r" );
			while (!feof($file)) {
				$name = trim(fgets($file));
				if (strlen($name) > 0 and (strpos($name, $filter) === 0)) {
					echo "<li>$name</li>";
				}
			}
		}
		else {
			$filename = 'friends.txt';
			$file = fopen( $filename, "r" );
			while (!feof($file)) {
				$name = trim(fgets($file));
				if (strlen($name) > 0 and strstr($name, $filter)) {
					echo "<li>$name</li>";
				}
			}
		}
	}
	$name = trim($_POST['name']);
	if (strlen($name) > 0) {
		echo "<li><b>$name</b></li>";
		$file = fopen( $filename, "a" );
		fwrite( $file, "$name\n" );
	}
?>	
</ul>
	<form action="index.php" method="post">
	<input type="text" name="nameFilter" value="<?=$nameFilter?>">
	<input type="checkbox" name="startingWith" <?php if ($startingWith=='TRUE') echo "checked"?> value="TRUE">Only names starting with</input>
	<input type="submit" value="Filter list">
	</form>
</body> 
</html>
