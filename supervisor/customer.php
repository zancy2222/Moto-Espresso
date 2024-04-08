<html>
<head>
<title>Customers</title>
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
<form method="POST" action="customer.php">
    <label for="search">Search:</label>
    <input type="text" name="search" id="search" placeholder="Search Name, Coffee, Etc.">
    <input type="submit" name="submit" value="Search">
</form>

<div class="userstb">
<div class="userstb-container" style="margin:auto; margin-top:50px; margin-left: 50px; margin-right: 50px; text-align:center; overflow:auto; max-height:500px; display:flex; align-items:center; justify-content:center;">

<?php
include "connection.php";

if (!$conn->connect_error) {
    //echo "Connected";
}

// Initialize the $search variable
$search = isset($_POST['search']) ? $_POST['search'] : '';

if (isset($_POST['submit'])) {
    // The form is submitted, process the search query

    if ($search != '') {
        $sql = "SELECT * FROM tbl_orders WHERE drink_name LIKE '%$search%' OR size LIKE '%$search%' OR sugar_level LIKE '%$search%' OR addon_1 LIKE '%$search%' OR addon_2 LIKE '%$search%' OR addon_3 LIKE '%$search%' OR total_value LIKE '%$search%' OR customer_name LIKE '%$search%'";
    } else {
        $sql = "SELECT * FROM tbl_orders";
    }
} else {
    // The form is not submitted, show all records
    $sql = "SELECT * FROM tbl_orders";
}

$result = $conn->query($sql);

echo "<br><br><div class='userstb-container' style='margin:auto;text-align:center;overflow:auto;max-height:500px;'>";
if ($result->num_rows > 0) {
    echo "<center>";
    echo "<table border=1>";
    echo "<tr>";
    echo "<th>Drink Name</th>";
	echo "<th>Customer Name</th>";
    echo "<th>Size</th>";
    echo "<th>Sugar Level</th>";
    echo "<th>Add-on 1</th>";
    echo "<th>Add-on 2</th>";
    echo "<th>Add-on 3</th>";
    echo "<th>Total Value</th>";
	echo "<th>Date Ordered</th>";
    echo "</tr>";
    echo "</center>";

    // Records
    while ($row = $result->fetch_assoc()) {
        echo "<center>";
        echo "<tr>";
        echo "<td>" . $row['drink_name'];
		echo "<td>" . $row['customer_name'];
        echo "<td>" . $row['size'];
        echo "<td>" . $row['sugar_level'];
        echo "<td>" . $row['addon_1'];
        echo "<td>" . $row['addon_2'];
        echo "<td>" . $row['addon_3'];
        echo "<td>" . $row['total_value'];
		echo "<td>" . $row['order_date'];
        echo "</tr>";
        echo "</center>";
    }
} else {
    echo "No Such Order.";
}
echo "</table></div>";
?>

</div>

</div>
</div>
<br>
<br>
</div>
</center>
</body>
</html>
