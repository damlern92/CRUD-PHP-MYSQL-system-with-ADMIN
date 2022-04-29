<?php
if(!isset($_SESSION['username'])){
    die("Page for admin");
}
  if(mysqli_connect_error()){
        echo "Error in connection";
    }else{
        $res = mysqli_query($conn,"select * from products");
        while($row = mysqli_fetch_row($res)){
            // Show the message from mysqli_fetch_row in a while loop:
            echo "<a href='details-$row[0]'><div style='border:1px solid black;padding:4px;margin:5px;'>";
            echo "Car id : " . $row[0] . "<br>";
            echo "Car model : " . $row[1] . "<br>";
            echo "Car manufacturer : " . $row[2] . "<br>";
            echo "</div>";
        }

    }
?>
<br>
<a href="insert">INSERT NEW</a>
