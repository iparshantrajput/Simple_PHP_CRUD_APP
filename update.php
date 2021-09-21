<html>
<body style="margin-top: 250px">
    <center>
        <form action="update.php" method="POST">
            <h1>EMPLOYEE MANAGEMENT PORTAL</h1>
            <br>
            <h2>UPDATE EXISTING ENTRY</h2>
            <br>
            <input type="text" name="email_username" placeholder="Username or Email">
            <br>
            <input type="password" name="pass1" placeholder="Password">
            <br>
            <input type="text" name="fname" placeholder="First Name">
            <br>
            <input type="text" name="lname" placeholder="Last Name">
            <br>
            <input type="text" name="designation" placeholder="Designation">
            <br>
            <input type="text" name="bloodGroup" placeholder="Blood Group">
            <br>
            <input type="submit" name="update">
        </form>
    </center>
</body>

<?php
    $sName = "localhost";
    $uName = "root";
    $pName = "";
    $dbName = "employeList";

    $conn = new mysqli($sName, $uName, $pName, $dbName);

    if(isset($_POST['update'])){
        $un = $_POST['email_username'];
        $pw = $_POST['pass1'];
        $fn = $_POST['fname'];
        $ln = $_POST['lname'];
        $des = $_POST['designation'];
        $bg = $_POST['bloodGroup'];

        $result = "UPDATE allEmployees SET username_email='$un', uPassword='$pw', firstName='$fn', lastName='$ln', designation='$des', bloodGroup='$bg'";
		if($conn->query($result) === TRUE){
            echo "<center> User updated successfully! <a href='display.php'> Click here to view all entries</a> </center> <br>";
        }
        else{
            echo "ERROR ADDING DATA".$conn->error;
            echo "<br>";
        }
        $conn->close();
		
    }

?>
</html>
