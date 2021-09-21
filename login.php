<html>
<body style="margin-top: 250px">
    <center>
        <form action="login.php" method="POST">
            <h1>EMPLOYEE MANAGEMENT PORTAL</h1>
            <br>
            <h2>LOGIN</h2>
            <br>
            <input type="text" name="email_username" placeholder="Username or Email">
            <br>
            <input type="password" name="pass1" placeholder="Password">
            <br>
            <input type="submit" name="submit">
            <h5>Not a user? Click here to signup</h5>
            <input type="submit" name="signup" value="REGISTER">
            
        </form>
    </center>
</body>

<?php

    $sName = "localhost";
    $uName = "root";
    $pName = "";
    $dbName = "employeList";
    $conn = new mysqli($sName, $uName, $pName, $dbName);

    if(isset($_POST['signup'])){
        header('Location: register.php');
        exit;
    }
    if(isset($_POST["submit"])){
        $un = $_POST['email_username'];
        $pw = $_POST['pass1'];
        $u2 = "";
        $p2 = "";

        $log = "SELECT username_email, uPassword FROM allEmployees where username_email='$un' and uPassword='$pw'";
        $res = $conn->query($log);

        if (!empty($res->num_rows) && $res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                $u2 = $row["username_email"];
                $p2 = $row["uPassword"];
            }
            if(($u2 == $un) && ($p2 == $pw)){
                echo "<center> Logged in successfully!. <a href='display.php'>Click here to view data</a> </center>";
            }
        }
        else{
            echo "Invalid credentails";
        }
    }
    

?>
</html>
