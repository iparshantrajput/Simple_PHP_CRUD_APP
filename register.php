<html>
<body style="margin-top: 250px">
    <center>
        <form action="register.php" method="POST">
            <h1>EMPLOYEE MANAGEMENT PORTAL</h1>
            <br>
            <h2>SIGNUP</h2>
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
            <input type="submit" name="register">
        </form>
    </center>
</body>

<?php
    $sName = "localhost";
    $uName = "root";
    $pName = "";
    $dbName = "employeList";

    $conn = new mysqli($sName, $uName, $pName, $dbName);

    if(isset($_POST['register'])){
        $un = $_POST['email_username'];
        $pw = $_POST['pass1'];
        $fn = $_POST['fname'];
        $ln = $_POST['lname'];
        $des = $_POST['designation'];
        $bg = $_POST['bloodGroup'];

        $result = "INSERT INTO allEmployees(username_email,uPassword,firstName,lastName,designation,bloodGroup) VALUES('$un','$pw','$fn','$ln','$des','$bg')";
		if($conn->query($result) === TRUE){
            echo "<center> User added successfully. <a href='login.php'>Login here</a> </center>";
        }
        else{
            echo "ERROR ADDING DATA".$conn->error;
            echo "<br>";
        }
        $conn->close();
		
    }

?>
</html>
