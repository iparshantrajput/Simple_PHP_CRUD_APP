<html>

<body>
</body>

<?php
    /*
    //CREATING CONNECTION
    $sName = "localhost";
    $uName = "root";
    $pName = "";

    $conn = new mysqli($sName, $uName, $pName);
        if($conn->connect_error){
            die("Connection failed".$conn->connect_error);
        }
        else{
            echo "Connection made!";
        }
    $conn->close();
    */

    /*
    //CREATING DATABASE
    $sName = "localhost";
    $uName = "root";
    $pName = "";

    $conn = new mysqli($sName, $uName, $pName);
        if($conn->connect_error){
            die("Connection failed".$conn->connect_error);
        }
        else{
            echo "Connection made!";
            echo "<br>";
        }
    $dbc = "CREATE DATABASE employeList";
    if($conn->query($dbc) === TRUE){
        echo "DATABASE CREATED SUCCESSFULLY"; 
        echo "<br>";
    }
    else{
        echo "ERROR CREATING DATABASE".$conn->error;
        echo "<br>";
    }
    $conn->close();
    */
/*
    //CREATING TABLE
    $sName = "localhost";
    $uName = "root";
    $pName = "";
    $dbName = "employeList";

    $conn = new mysqli($sName, $uName, $pName, $dbName);
        if($conn->connect_error){
            die("Connection failed".$conn->connect_error);
        }
        else{
            echo "Connection made! <br> Database Connected <br>";
            echo "<br>";
        }
    $dbc = "CREATE TABLE allEmployees(
    id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username_email VARCHAR(50) UNIQUE NOT NULL,
    uPassword VARCHAR(50) NOT NULL,
    firstName VARCHAR(50) NOT NULL,
    lastName VARCHAR(50) NOT NULL,
    designation VARCHAR(50) NOT NULL,
    bloodGroup VARCHAR(50) NOT NULL
    )";
    if($conn->query($dbc) === TRUE){
        echo "TABLE CREATED SUCCESSFULLY"; 
        echo "<br>";
    }
    else{
        echo "ERROR CREATING TABLE".$conn->error;
        echo "<br>";
    }
    $conn->close();
*/
    //CONFIG
    $sName = "localhost";
    $uName = "root";
    $pName = "";
    $dbName = "employeList";

    $conn = new mysqli($sName, $uName, $pName, $dbName);
        if($conn->connect_error){
            die("Connection failed".$conn->connect_error);
        }
        else{
            echo "Connection made! <br> Database Connected <br>";
            echo "<br>";
        }
?>
</html>