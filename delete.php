<?php
    $sName = "localhost";
    $uName = "root";
    $pName = "";
    $dbName = "employeList";
    $id = $_GET['id'];
    $del = "DELETE FROM allEmployees WHERE id=$id";
    
    if($conn->query($del)===TRUE){
        echo "<center> User deleted successfully! <a href='display.php'> Click here to view all entries</a> </center> <br>";
    }
    else{
        echo "ERROR DELETING DATA".$conn->error;
        echo "<br>";
    }


?>