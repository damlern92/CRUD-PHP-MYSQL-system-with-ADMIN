<h3>List Cars:</h3>
  <div id="car-block">
    
    <?php
    if(mysqli_connect_error()){
            echo "Error in connection";
        }else{
            $res = mysqli_query($conn,"select * from products");
            while($row = mysqli_fetch_row($res)){
                // Show the message from mysqli_fetch_row in a while loop:
                // <a href='?page=details&id=$row[0]'> works
                //<a href='page-details-id-$row[0]'> works
                echo "<div class='car-item'><a href='details-$row[0]'>";
                // echo "'$row[0]'";
                echo "Car id : " . $row[0] . "<br>";
                echo "Car model : " . $row[1] . "<br>";
                echo "Car manufacturer : " . $row[2] . "<br>";
                echo "</a></div>";
            }

        }
    ?>
    
</div>
