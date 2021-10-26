<?php

if(isset($_GET['id'])){
	$id = $_GET['id'];
	if(is_numeric($id)){
		$res = mysqli_query($conn,"select * from products where id=$id");
		$row = mysqli_fetch_row($res);
		if($id==$row[0]){
			echo "Model : " . $row[1] . "<br>";
			echo "Manu : " . $row[2] . "<br>";
		}else{
			echo "The requested information does not exist";
		}
	}else{
		echo "The requested information does not exist";
	}
}else{
	echo "The requested information does not exist";
}

?>

<br>
<a href="./">Back to the users list</a>