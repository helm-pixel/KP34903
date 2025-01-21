<?php
include("config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" type="text/css" href="<?php echo ADMIN_BASE_URL; ?>/css/admin.css">
</head>
<body>
    <!-- Top Navigation -->
    <div class="topNav">
        <img src="<?php echo ADMIN_BASE_URL; ?>/img/icon.png" alt="Logo">
        <a href="login.php">
            <i class="fa fa-sign-in" style="font-size: 12px;"></i> Login
        </a>
    </div>

    <!-- Side Navigation -->
    <?php include 'includes/sideNav.php'; ?>

    <!-- Main Content -->
    <div class="main">
        <h2>Admin Panel Dashboard</h2>
    </div>

    <!-- JavaScript for Dropdown Menu -->
    <script>
        const dropdown = document.getElementsByClassName("dropdown-btn");
        for (let i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function () {
                this.classList.toggle("active");
                const dropdownContent = this.nextElementSibling;
                dropdownContent.style.display = dropdownContent.style.display === "block" ? "none" : "block";
            });
        }
    </script>
</body>
</html>
