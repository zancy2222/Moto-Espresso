<html>
<head>
<title>Users Table</title>
<meta http-equiv="Cache-control" content="no-cache">
<link rel="stylesheet" a href="style2.css">
<link rel="stylesheet" a href="adminstyle.css">
<link rel="stylesheet" a href="admin.css">
<link rel="icon" type="images/mottoespresso2.jpg" href="images/mottoespresso2.ico">
</head>
<body>
<link rel="stylesheet" a href="stylenav.css">
<div class="alexa">
<a class="button" href="Admin.php">
    <b> M O T O   E S P R E S S O </b>
    </a>
</div>
<div class="topnav"><b>
    <a href="Admin.php">Back</a>
</div>
<center>

<div class="container">
<div id="Book List" class="tabcontent">
<form method="POST" action="userstable.php">
<br>
<br>
<input type=search name=search style="background-color:#E8C2AD;color:#574941;border-radius: 10px;border-radius: 5px;border:none;box-shadow:10px 10px 5px 0px rgba(0,0,0,0.75);">
<input type=submit name=bksearch value="Search" style="background-color:#AA6038;color:#FFF; border-radius: 5px;border:none;box-shadow:10px 10px 5px 0px rgba(0,0,0,0.75);">
</form>
<br>
<br>
<div class="userstb">
<?php
include "connection.php";

if(!$conn->connect_error){
    //echo "Connected";
}
if(isset($_POST['bksearch'])){
    $search = $_POST['search'];
    
    if($search != NULL){
        
    $sql="Select * from tbl_users where USERNAME like '%$search%' or POSITION like '%$search%'";
    
    }else{
    
        $sql="Select * from tbl_users";
    }
//else
}else{
    $sql="Select * from tbl_users";


}

if (isset($_POST['remove_person'])) {
    $remove_user_id = $_POST['remove_user_id'];

    $remove_sql = "DELETE FROM tbl_users WHERE USER_ID = $remove_user_id";
    $remove_result = $conn->query($remove_sql);

    if ($remove_result === TRUE) {
        ?>
        <script>
            alert("User Removed!");
            window.location.href = 'userstable.php'; // Redirect after successful removal
        </script>
        <?php
        exit;
    } else {
        echo "Error removing item: " . $conn->error;
    }
}

if (isset($_POST['toggle_position'])) {
    $user_id = $_POST['user_id'];
    $current_position = $_POST['current_position'];

    if ($current_position === 'Admin') {
        $new_position = 'Employee';
    } elseif ($current_position === 'Employee') {
        $new_position = 'Supervisor';
    } else {
        $new_position = 'Admin';
    }

    $toggle_sql = "UPDATE tbl_users SET POSITION = '$new_position' WHERE USER_ID = $user_id";
    $toggle_result = $conn->query($toggle_sql);

    if ($toggle_result === TRUE) {
        ?>
        <script>
            alert("Position Updated Successfully!");
            window.location.href = 'userstable.php'; // Redirect after successful position update
        </script>
        <?php
        exit;
    } else {
        echo "Error updating position: " . $conn->error;
    }
}

$result = $conn->query($sql);

if($result->num_rows > 0){
    echo"<center>";
    echo "<table border=1>";
    echo"<tr>";
    echo"<th>USER ID</th>";
    echo"<th>USERNAME</th>";
    echo"<th>PASSWORD</th>";
    echo"<th>POSITION</th>";
    echo "<th>REMOVE</th>";
    echo "<th>TOGGLE POSITION</th>";
    echo "</tr>";
    echo"</center>";

//records
    while($row = $result->fetch_assoc()){
        echo"<center>";
        echo"<tr>";
        echo "<td>".$row['USER_ID'];
        echo"<td>".$row['USERNAME'];
        echo"<td>".$row['PASSWORD'];
        echo"<td>".$row['POSITION'];
        echo "<td><form method='POST' action='userstable.php'><input type='hidden' name='remove_user_id' value='" . $row['USER_ID'] . "'><input type='submit' name='remove_person' value='Remove'></form></td>";
        // Add form to toggle position
        echo "<td><form method='POST' action='userstable.php'><input type='hidden' name='user_id' value='" . $row['USER_ID'] . "'><input type='hidden' name='current_position' value='" . $row['POSITION'] . "'>";
        if ($row['POSITION'] === 'Admin') {
            echo "<input type='submit' name='toggle_position' value='Demote to Employee'>";
        } elseif ($row['POSITION'] === 'Employee') {
            echo "<input type='submit' name='toggle_position' value='Promote to Supervisor'>";
        } else {
            echo "<input type='submit' name='toggle_position' value='Promote to Admin'>";
        }
        echo "</form></td>";
        echo"</tr>";
        echo"</center>";
    }
}else{
    echo "No Such User.";
}
?>
</div>
</div>
<br>
<br>
</div>
</center>
</body>
</html>
