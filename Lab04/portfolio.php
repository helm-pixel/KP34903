<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/newstyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        h1{
            background-color: #F3DDB3;
            color: #000000;
        }

        footer{
            background-color: #f1f1f1;
            text-align: center;
            /* padding: 10px; */
        }
    </style>
    <title>My Portfolio</title>
</head>
<script>
    // Function to call when a smaller screen
    function myFunction(){
        var x=document.getElementById("myTopNav");
        if(x.className==="topnav"){
            x.className+=" responsive";
        }
        else{
            x.className="topnav";
        }
    }

    // Check menu navigation active, upon page load
    document.addEventListener("DOMContentLoaded", function(){
        const navLinks = document.querySelectorAll(".topnav a");
        const currentPath = window.location.pathname;

        navLinks.forEach(link => link.classList.remove("active"));

        navLinks.forEach(link => {
            const linkPath = new URL(link.href).pathname;
            if(linkPath===currentPath){
                link.classList.add("active");
            }
        })
    })
</script>
<body>
    <header>
        <!-- <h1>Portfolio</h1> -->
         <img src="img/banner.png" alt="banner" class="image">
    </header>
    <?php include("include/topNav.php")?>
    <main>
        <div>
            <table border="1" align="center">
                <tr>
                    <td>All</td>
                    <td>Filter 1</td>
                    <td>Filter 2</td>
                    <td>Filter 3</td>
                </tr>
            </table>
        </div>
        <div>
            <table width="100%" border="1">
                <tr>
                    <th>Food Label 1</th>
                    <th>Food Label 2</th>
                    <th>Food Label 3</th>
                </tr>
                <tr>
                    <td><img src="img/nasi-ayam.jpg" style="width:100%;height:500px;"></td>
                    <td><img src="img/nasi-goreng.jpeg" style="width:100%;height:500px;"></td>
                    <td><img src="img/soto-ayam.jpg" style="width:100%;height:500px;"></td>
                </tr>
                <tr>
                    <td>img</td>
                    <td>img</td>
                    <td>img</td>
                </tr>
            </table>
        </div>
    </main>
    <footer>
        <p><i><small>Copyright &copy; 2024 Helmi</small></i></p>
    </footer>
</body>
</html>