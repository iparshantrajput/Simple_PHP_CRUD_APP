<html>
<body>
    <center>
        <form action = "display.php" method = "POST">
            <input type="submit" name="show" value="Refresh">
            <input type="submit" name="logout" value="Log Out">
        </form>
    </center>
<?php

    $sName = "localhost";
    $uName = "root";
    $pName = "";
    $dbName = "employeList";
    $conn = new mysqli($sName, $uName, $pName, $dbName);

    if(isset($_POST['show'])){

        $log = "SELECT * FROM allEmployees";
        $res = $conn->query($log);
        
        echo "ID &emsp;&emsp; Email/Username &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; First Name &emsp; Last Name &emsp;&emsp;&emsp; Designation &emsp;&emsp;&emsp; Blood Group &emsp; <br><br>";
        if (!empty($res->num_rows) && $res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                echo "$row[id] &emsp;&emsp; $row[username_email] &emsp;&emsp; $row[firstName] &emsp;&emsp; $row[lastName] &emsp;&emsp;&emsp;&emsp; $row[designation] &emsp;&emsp;&emsp; $row[bloodGroup] &emsp;&emsp;&emsp;&emsp;&emsp; <a href='delete.php?id=$row[id]'>DELETE</a> &emsp; <a href='update.php?id=$row[id]'>UPDATE</a> <br>";
            }
        }
        echo "<br><br>";
        echo "<center> <a href='add.php'>ADD NEW ENTRY</a> </center>";

    }
    if(isset($_POST['logout'])){
        header('Location: login.php');
    }
    

?>

</body>
</html>
