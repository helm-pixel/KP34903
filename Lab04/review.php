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
            <form name="reviewform" action="reviewProcess.php" method="post">
                <div>
                    <label for="email">Email : </label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div>
                    <label for="orderDate">Order date : </label>
                    <input type="date" name="orderDate" id="orderDate">
                </div>
                <div>
                    <label for="foodType">Food type : </label>
                    <input type="checkbox" name="foodtype[]" value="breakfast">Breakfast
                    <input type="checkbox" name="foodtype[]" value="lunch">Lunch
                    <input type="checkbox" name="foodtype[]" value="dinner">Dinner
                </div>
                <div>
                    <label for="orderType">Order type : </label>
                    <input type="radio" name="ordertype" value="takeaway" checked>Takeaway
                    <input type="radio" name="ordertype" value="dineIn">Dine in
                </div>
                <div>
                    <label for="branch">Branch : </label>
                    <select name="branch">
                        <option value="">- Please Select -</option>
                        <option value="KK">Kota Kinabalu</option>
                        <option value="Sandakan">Sandakan</option>
                    </select>
                </div>
                <div>
                    <label for="review">Review</label><br>
                    <textarea name="review" id="review" cols="40" rows="4"></textarea>
                </div>
                <div>
                    <label for="rating">Rating (1-5): </label>
                    <input type="range" name="rating" id="rating" min="1" max="5">
                </div>
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </form>
            <p id="ajaxResponse"></p>
        </div>
    </main>
    <script>
        function myFunction() {
            const nav = document.getElementById("myTopNav");
            nav.classList.toggle("responsive");
        }

        this.submit();
    </script>
</body>
</html>
