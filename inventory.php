<html>
<head>
    <script>
        // Function to update the displayed stock dynamically
        function updateStock(itemId, newStock) {
            document.getElementById('currentStock_' + itemId).innerText = newStock;
        }

        // Attach an event listener to the form submission
        document.querySelectorAll('form').forEach(function(form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                var itemId = event.target.querySelector('input[name="item_id"]').value;

                // Perform AJAX request to update stock on the server
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        // Update the displayed stock on success
                        updateStock(itemId, xhr.responseText);
                    }
                };
                xhr.open('POST', 'inventory.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.send('remove_stock=1&item_id=' + itemId);
            });
        });
    </script>
    <title>Stocks</title>
    <meta http-equiv="Cache-control" content="no-cache">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="adminstyle.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="icon" type="images/mottoespresso2.jpg" href="images/mottoespresso2.ico">
</head>
<body>
<link rel="stylesheet" a href="stylenav.css">
    <div class="alexa">
        <a class="button" href="Admin.php">
            <b> M O T O   E S P R E S S O </b>
        </a>
    </div>
    <div class="topnav">
        <b><a href="stocks.php">Back</a></b>
    </div>
<center>
    <div class="container">
        <div id="Item List" class="tabcontent">
            <form method="POST" action="inventory.php">
                <br>
                <br>
                <h3>Add Item to Stock</h3>
                <label for="item_name">Product Name:</label>
                <input type="text" name="item_name" required>
                <label for="item_category">Item Category:</label>
                <select name="item_category">
                    <option value="ingredients">Ingredients</option>
                    <option value="utensils">Utensils</option>
                    <option value="beverages">Beverages</option>
                    <option value="equipments">Equipments</option>
                </select>

                <br>
                <label for="item_price">Product Price:</label>
                <input type="text" name="item_price" placeholder="₱" required>

                <label for="item_place">Place:</label>
                <input type="text" name="item_place" required>

                <label for="item_quantity">Quantity:</label>
                <input type="number" name="item_quantity" required>

                <button type="submit" name="add_item">Add Item</button>
            </form>

            <br>
            <div class="userstb">
            <?php
                include "connection.php";

                // Function to add item to stock
                function addItemToStock($conn, $itemName, $itemCategory, $itemPrice, $itemPlace, $itemQuantity) {
                    // Check if the item already exists in the stock
                    $sqlSelect = "SELECT * FROM tbl_stocks WHERE PRODUCT_NAME = '$itemName' AND ITEM_CATEGORY = '$itemCategory'";
                    $result = mysqli_query($conn, $sqlSelect);

                    if ($result->num_rows > 0) {
                        // Item already exists, update quantity
                        $row = mysqli_fetch_assoc($result);
                        $currentQuantity = $row['PRODUCTSTOCK'];
                        $newQuantity = $currentQuantity + $itemQuantity;

                        // Update the quantity in the database
                        $sqlUpdate = "UPDATE tbl_stocks SET PRODUCTSTOCK = '$newQuantity' WHERE PRODUCT_NAME = '$itemName' AND ITEM_CATEGORY = '$itemCategory'";
                        if (mysqli_query($conn, $sqlUpdate)) {
                            return true;
                        } else {
                            echo "Error updating stock: " . $conn->error;
                            return false;
                        }
                    } else {
                        // Item does not exist, insert new record
                        $sqlInsert = "INSERT INTO tbl_stocks (PRODUCT_NAME, ITEM_CATEGORY, PRODUCT_PRICE, PRODUCT_PLACE, PRODUCTSTOCK) 
                                      VALUES ('$itemName', '$itemCategory', '$itemPrice', '$itemPlace', '$itemQuantity')";
                        if (mysqli_query($conn, $sqlInsert)) {
                            return true;
                        } else {
                            echo "Error adding item to stock: " . $conn->error;
                            return false;
                        }
                    }
                }

                if (isset($_POST['add_item'])) {
                    $itemName = $_POST['item_name'];
                    $itemCategory = $_POST['item_category'];
                    $itemPrice = $_POST['item_price'];
                    $itemPlace = $_POST['item_place'];
                    $itemQuantity = $_POST['item_quantity'];

                    // Add item to stock
                    if (addItemToStock($conn, $itemName, $itemCategory, $itemPrice, $itemPlace, $itemQuantity)) {
                        session_start();
                        $_SESSION["update"] = "Item Added to Stock Successfully!";
                        header("Location: inventory.php");
                        exit;
                    }
                }

                // Fetch and display items from stock
                $sqlSelectAllItems = "SELECT s.*, i.INITIAL_STOCK
                                      FROM tbl_stocks s
                                      LEFT JOIN tbl_initial_stock i ON s.STOCK_ID = i.PRODUCT_ID";
                $resultAllItems = mysqli_query($conn, $sqlSelectAllItems);

                if ($resultAllItems->num_rows > 0) {
                    echo "<table border=1 style='margin:auto;'>";
                    echo "<tr><th>Product Name</th><th>Item Category</th><th>Price</th><th>Original Stock</th><th>Updated Stock</th><th>Action</th></tr>";

                    while ($rowItem = mysqli_fetch_assoc($resultAllItems)) {
                        $originalStock = ($rowItem['INITIAL_STOCK'] !== null) ? $rowItem['INITIAL_STOCK'] : $rowItem['PRODUCTSTOCK'];
                        $currentStock = $rowItem['PRODUCTSTOCK'];

                        echo "<tr>";
                        echo "<td>" . $rowItem['PRODUCT_NAME'] . "</td>";
                        echo "<td>" . $rowItem['ITEM_CATEGORY'] . "</td>";
                        echo "<td>" . $rowItem['PRODUCT_PRICE'] . "</td>";
                        echo "<td>" . $originalStock . "</td>";
                        echo "<td id='currentStock_" . $rowItem['STOCK_ID'] . "'>" . $currentStock . "</td>";

                        echo "<td><form method='POST' action='inventory.php'>
                                  <input type='hidden' name='item_id' value='" . $rowItem['STOCK_ID'] . "'>
                                  <button type='submit' name='remove_item'>Remove Item</button>
                              </form></td>";
                        echo "</tr>";

                        // Check if stock is running low
                        $stockThreshold = 5;
                        if ($currentStock <= $stockThreshold) {
                            echo "<script>alert('Running low on " . $rowItem['PRODUCT_NAME'] . ". Current stock: " . $currentStock . "');</script>";
                        }
                    }

                    echo "</table>";
                } else {
                    echo "No items in stock.";
                }

                // Remove item from stock
                if (isset($_POST["remove_item"])) {
                    $itemId = $_POST['item_id'];

                    // Remove the item from the database
                    $deleteItemSql = "DELETE FROM tbl_stocks WHERE STOCK_ID = $itemId";
                    $deleteItemResult = mysqli_query($conn, $deleteItemSql);

                    if ($deleteItemResult) {
                        // Redirect after successful deletion
                        echo "<script>alert('Item removed successfully!');</script>";
                        echo "<script>window.location.href = 'inventory.php';</script>";
                    } else {
                        echo "Error removing item: " . mysqli_error($conn);
                    }
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