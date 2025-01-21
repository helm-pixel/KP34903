<?php
//include db config
include("../../config/config.php");

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $_POST['productName'];
    $productQty = $_POST['productQty'];
    $productPrice = $_POST['productPrice'];
    $categoryID = $_POST['categoryID'];

    // Handle image upload
    $target_dir = "../../../uploads/";
    $target_path = "uploads/";
    $target_file = $target_dir . basename($_FILES["productImg"]["name"]);
    $target_fileDB = $target_path . basename($_FILES["productImg"]["name"]);
    $upload_ok = 1;
   
    // Check if image file is an actual image
    $check = getimagesize($_FILES["productImg"]["tmp_name"]);
    if ($check !== false) {
        $upload_ok = 1;
    } else {
        echo "File is not an image.";
        $upload_ok = 0;
    }

    // Move uploaded file to target directory
    if ($upload_ok && move_uploaded_file($_FILES["productImg"]["tmp_name"], $target_file)) {
        // Insert product into database
        $sql = "INSERT INTO products (productName, productQty, productPrice, categoryID, productImg) VALUES ('$productName', '$productQty', '$productPrice', '$categoryID', '$target_fileDB')";
        if (mysqli_query($conn, $sql)) {
            echo "Product inserted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// Fetch products from database
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert Product</title>
</head>
<body>

<!-- Product Form -->
<form action="insertProduct.php" method="post" enctype="multipart/form-data">
    <label for="productName">Product Name:</label>
    <input type="text" name="productName" id="productName" required><br>
    <label for="productQty">Product Quantity:</label>
    <input type="number" name="productQty" id="productQty" required><br>
    <label for="productPrice">Product Price:</label>
    <input type="number" name="productPrice" id="productPrice" required><br>
    <label for="categoryID">Category ID:</label>
    <input type="number" name="categoryID" id="categoryID" required><br>
    <label for="productImg">Product Image:</label>
    <input type="file" name="productImg" id="productImg" required><br>
    <input type="submit" value="Insert Product">
</form>

<!-- List of Products -->
<h2>Product List</h2>
<table border="1">
    <tr>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Category ID</th>
        <th>Image</th>
    </tr>
    <?php
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["productName"] . "</td>";
            echo "<td>" . $row["productQty"] . "</td>";
            echo "<td>" . $row["productPrice"] . "</td>";
            echo "<td>" . $row["categoryID"] . "</td>";
            echo "<td><img src='" . $row["productImg"] . "' width='100'></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No products found</td></tr>";
    }
    ?>
</table>

</body>
</html>