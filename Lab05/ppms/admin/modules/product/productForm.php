<?php 
include("../../config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ADMIN_BASE_URL; ?>/css/admin.css">
    <link rel="stylesheet" href="../../css/productForm.css">
    <title>Create Product</title>
</head>
<body>
    <main>
        <!-- Top Navigation -->
    <div class="topNav">
        <img src="<?php echo ADMIN_BASE_URL; ?>/img/icon.png" alt="Logo">
        <a href="../../login.php">
            <i class="fa fa-sign-in" style="font-size: 12px;"></i> Login
        </a>
    </div>

    <?php include '../../includes/sideNav.php' ?>
        <h2 style="text-align: center; padding-top: 80px">Product Form</h2>
        <div class="rowForm">
        <form action="insertProduct.php" method="POST" enctype="multipart/form-data">
            <label for="productName">Product Name:</label><br>
            <input type="text" id="productName" name="productName" required><br><br>

            <label for="productQty">Product Quantity:</label><br>
            <input type="number" id="productQty" name="productQty" required><br><br>

            <label for="productPrice">Product Price:</label><br>
            <input type="number" id="productPrice" name="productPrice" min="0.01" step="0.01" required><br><br>

            <!-- Product Category -->
             <label for="categoryID">Product Category:</label><br>
             <select name="categoryID" id="categoryID" required>
                <option value="">Select Category</option>
                <option value="1">Books</option>
                <option value="2">Coffee</option>
                <option value="3">Food</option>
             </select><br><br>

             <!-- Product Image -->
              <label for="productImg">Product Image</label><br>
              <input type="file" id="productImg" name="productImg" accept="image/*" required><br><br>

              <button type="submit">Submit</button>
        </form>
        </div>
    </main>
</body>
</html>