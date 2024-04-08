<html>
<head>
<title>Logs Detector</title>
<meta http-equiv="Cache-control" content="no-cache">
<link rel="stylesheet" a href="style2.css">
<link rel="stylesheet" a href="adminstyle.css">
<link rel="stylesheet" a href="admin.css">
<link rel="icon" type="images/mottoespresso2.jpg" href="images/mottoespresso2.ico">
</head>
<body>
<link rel="stylesheet" a href="stylenav.css">
<div class="alexa">
<a class="button" href="supervisor.php">
	<b> M O T O   E S P R E S S O </b>
	</a>
</div>
<div class="topnav"><b>
	<a href="supervisor.php">Back</a>
</div>
<center>

<div class="container">
<div id="Book List" class="tabcontent">
<form method=POST action="logstable.php">
<br>
<br>
<input type=search name=search style="background-color:#E8C2AD;color:#574941;border-radius: 10px;border-radius: 5px;border:none;box-shadow:10px 10px 5px 0px rgba(0,0,0,0.75);">
<input type=submit name=usearch value="Search" style="background-color:#AA6038;color:#FFF; border-radius: 5px;border:none;box-shadow:10px 10px 5px 0px rgba(0,0,0,0.75);">
</form>
<br>
<br>
<div class="userstb">
<?php
include "connection.php";

if(!$conn->connect_error){
	//echo "Connected";
}
if(isset($_POST['usearch'])){
	$search = $_POST['search'];
	
	if($search != NULL){
		
	$sql="Select * from tbl_sessions where USERNAME like '%$search%' or POSITION like '%$search%'";
	
	}else{
	
		$sql="Select * from tbl_sessions";
	}
//else
}else{
	$sql="Select * from tbl_sessions";


}

$result = $conn->query($sql);

echo "<br><br><div class='userstb-container' style='margin:auto;text-align:center;overflow:auto;max-height:500px;'>";
if($result->num_rows > 0){
	echo"<center>";
	echo "<table border=1>";
	echo"<tr>";
	echo"<th>USER ID</th>";
	echo"<th>USERNAME</th>";
	echo"<th>POSITION</th>";
	echo"<th>ACTION</th>";
	echo"<th>DATE TIME</th>";
	echo "</tr>";
	echo"</center>";

//records
	while($row = $result->fetch_assoc()){
		echo"<center>";
		echo"<tr>";
		echo "<td>".$row['USER_ID'];
		echo"<td>".$row['Username'];
		echo"<td>".$row['Position'];
		echo"<td>".$row['Action'];
		echo"<td>".$row['DateTime'];
		echo"</tr>";
		echo"</center>";
	}
}else{
	echo "No Such User.";
}
echo "</table></div>";
?>
</div>
</div>
<br>
<br>
</div>
</center>
</body>
</html>
