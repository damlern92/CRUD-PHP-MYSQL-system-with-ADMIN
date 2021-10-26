<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

	$model = $_POST['model'];
	$manu = $_POST['manu'];

	mysqli_query($conn,"insert into products values (null,'$model','$manu')");

	header("location: index.php");
}
?>
<form action="" method="post">
	<input type="text" name="model">
	<input type="text" name="manu">
	<input type="submit" name="submit" value="insert">
</form> 
<a href="./">Back to the users list</a>