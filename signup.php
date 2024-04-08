<html>
<head>
<title>Sign Up Form</title>
<meta http-equiv="Cache-control" content="no-cache">
<link rel="stylesheet" a href="stylenav.css">
<link rel="stylesheet" a href="signup1.css">
<link rel="icon" type="images/mottoespresso2.jpg" href="images/mottoespresso2.ico">
</head>
<body>
<div class="alexa">
<a class="button" href="index.php">
	<b> M O T O   E S P R E S S O </b>
	</a>
</div>
<div class="topnav"><b>
	<a href="about.php">About Us</a>
	<a href="index.php">Go Back</a>
</div>

<div class="signup-box">
    <h2>Sign Up</h2>
    <h4>It only takes a few minutes</h4>
    <form method="POST" action="signup.php">			
        <div class="form-element">
            <h3>Username :</h3>               
            <input type="name" name="name" placeholder="Enter your Username">
        </div>
        <div class="form-element">
            <h3>Email :</h3>               
            <input type="email" name="email" placeholder="username@example.com">
        </div>
        <div class="form-element">
            <h3>Password :</h3>               
            <input type="password" name="password" placeholder="Enter your Password">              
        </div>
        <div class="form-element">
            <h3>Re-Enter Password :</h3>  
            <input type="password" id="cpassword" name="cpassword" placeholder="Re-enter your Password">
        </div>
        <br>
        <button type="submit" name="submit" class="btn-login">Register Account</button>
        <div class="box">	
            <br>
            <hr>
        </div>
        <p>Already have an account? <a href="index.php">Log in</a></p>
    </form>
    <p class="para-2">By clicking the Sign Up button you have read and agreed to our
    <a href="#">Terms and Condition</a> and <a href="#">Privacy Policy</a>
    </p>
</div>
</body>
</html>

<?php
include "connection.php";

if(!$conn->connect_error){
    //echo "Connected!";
}

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $pass=$_POST['password'];
    $cpass=$_POST['cpassword'];
    $email=$_POST['email'];

    // Assuming you want to set the position to "Employee" for all new signups
    $pos = "Employee";
	
    // Inserting user details into tbl_users with position set to "Employee"
    $sql = "INSERT INTO tbl_users (USERNAME, PASSWORD, POSITION) VALUES ('$name','$pass','$pos')";
    $insert = $conn->query($sql);
	
    if($insert === TRUE) {
        ?>
        <script>
            alert("Welcome New User!");
        </script>
        <?php
        header("refresh:0;url=index.php");	   
    } else {
        echo $connection->error;
    }	
}
?>
