<form action="" method="POST">
	<label><b><h1>Please input your name:</h1></b></label>
	<input type="text" name="name">
	<input type="submit" value="Submit Name">	
</form>
<?php
$name=$_POST['name'];
echo "Welcome :" . $name;
?>