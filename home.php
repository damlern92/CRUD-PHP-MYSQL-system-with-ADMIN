  <?php
  if(mysqli_connect_error($conn)){
        echo "Error in connection";
    }else{
        $res = mysqli_query($conn,"select * from products");
        while($row = mysqli_fetch_row($res)){
            // Show the message from mysqli_fetch_row in a while loop:
            // <a href='?page=details&id=$row[0]'> works
            //<a href='page-details-id-$row[0]'> works
            echo "<a href='details-$row[0]'><div style='border:1px solid black;padding:4px;margin:5px;'>";
            // echo "'$row[0]'";
            echo "Car id : " . $row[0] . "<br>";
            echo "Car model : " . $row[1] . "<br>";
            echo "Car manufacturer : " . $row[2] . "<br>";
            echo "</div>";
        }

    }
?>