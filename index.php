<html>
<head>
<title>Moto Espresso</title>
<meta http-equiv="Cache-control" content="no-cache">
<link rel="stylesheet" a href="style1.css">
<link rel="stylesheet" a href="stylenav.css">
<link rel="icon" type="images/mottoespresso2.jpg" href="images/mottoespresso2.ico">
</head>
<body>
<div class="alexa">
<a class="button" href="index.php">
    <b> M O T O   E S P R E S S O </b>
    </a>
</div>

<div class="topnav"><b>
    <a href="about.php">About Us</a></b>
    
</div>
<center>
<br>
<img src="images/mottoespresso2.jpg" alt="Moto Espresso" width="150" height="150">
</center>
<form method="POST" action="index.php">
<div class="container">
<div class="form-input">
<br>
<h1 style="color:#010000;">Sign In</h1>
<b>Username:
<input type="text" name="user" style="color:#8B0000;">
<br>
<br>
</div>
<div class="form-input">
<b>Password:
<input type="password" name="pass" style="color:#8B0000;">
<br>
<br>
</div>
<button type="submit" name="login" class="btn-login">Log In</button>
<footer style="color:#010000;">
<br>
<a href="signup.php">New User?</a>
<br>
<br>
&copy; All Rights Reserved 2023.
</footer>
</form>
</body>
</html>
<?php
include "connection.php";

if($conn->connect_error){
    echo "Connected!";
}

if(isset($_POST['login'])){
    $username=$_POST['user'];
    $password=$_POST['pass'];
    
    $sql = "SELECT * FROM tbl_users WHERE USERNAME = '$username' AND PASSWORD = '$password'";
    $result = $conn->query($sql);
    
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $pos = $row['POSITION'];
        
        $logs= "INSERT INTO tbl_sessions (Username,Position,Action,DateTime) VALUES ('$username','$pos','Logged In',NOW())";
        $login = $conn->query($logs);
        
        if($pos == 'Admin'){
            ?>
            <script>
                alert("Welcome Owner!")
            </script>
            <?php
            header("refresh:0;url=Admin.php");
        } elseif ($pos == 'Supervisor') {
            ?>
            <script>
                alert("Welcome Admin!")
            </script>
            <?php
            header("refresh:0;url=supervisor.php");
        } elseif ($pos == 'Employee') {
            ?>
            <script>
                alert("Welcome Employee!")
            </script>
            <?php
            header("refresh:0;url=employee.php");
        }
    } else {
        echo "Invalid Username or Password!";       
    }
}
?>
