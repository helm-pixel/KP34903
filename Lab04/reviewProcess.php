<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/newstyle.css">
    <title>Pls leave a review</title>
    <style>
        form div { margin-bottom: 10px; }
        .rowForm {
            max-width: 400px;
            padding: 20px;
            background-color: #f3f3f3;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin: auto;
        }
    </style>
</head>
<body>
    <header>
        <img src="img/banner.png" alt="banner image" class="image">
    </header>
    <?php include("include/topNav.php") ?>
    <main>
        <h2 style="text-align: center;">Review</h2>
        <div class="rowForm">
            <?php
            if($_SERVER['REQUEST_METHOD']=="POST"){
            // Sanitize and retrieve inputs
            $email=htmlspecialchars($_POST['email']);
            $orderDate=htmlspecialchars($_POST['orderDate']);
            // $foodType=isset($_POST['foodtype'])? $_POST['foodtype']:"None";
            $foodTypes=isset($_POST['foodtype'])?implode(", ", $_POST['foodtype']):"None";
            $orderType=htmlspecialchars($_POST['ordertype']);
            $branch=htmlspecialchars($_POST['branch']);
            $review=htmlspecialchars($_POST['review']);
            $rating=htmlspecialchars($_POST['rating']);

            echo "<h2>Thank You For Your Review</h2>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Order Date:</strong> $orderDate</p>";
            echo "<p><strong>Food Types:</strong> $foodTypes</p>";
            echo "<p><strong>Order Type:</strong> $orderType</p>";
            echo "<p><strong>Branch:</strong> $branch</p>";
            echo "<p><strong>Review:</strong> $review</p>";
            echo "<p><strong>Rating:</strong> $rating</p>";
            }
            ?>
        </div>
    </main>
    <script>
        function myFunction() {
            const nav = document.getElementById("myTopNav");
            nav.classList.toggle("responsive");
        }

        // this.submit();
    </script>
</body>
</html>
