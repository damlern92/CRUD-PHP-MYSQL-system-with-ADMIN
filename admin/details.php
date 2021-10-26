<?php

if(!isset($_SESSION['username'])){
	die("Page for admin");
}
$id = is_numeric($_GET['id'])?$_GET['id']:1;

$res = mysqli_query($conn,"select * from products where id=$id");
$row = mysqli_fetch_row($res);

echo "Model : " . $row[1] . "<br>";
echo "Manu : " . $row[2] . "<br>";
?>


<a href="update-<?php echo $row[0]; ?>">Update</a>
<a href="delete-<?php echo $row[0]; ?>">Delete</a>
<br><br>
<a href="./">Back to the users list</a>