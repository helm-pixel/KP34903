<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/newstyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #blogTable{
            max-width: 800px;
            margin: 0 auto;
            border-collapse: collapse;
            text-align: left;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            border: 1px solid #ddd;
        }
        #blogTable:hover{
            background-color: #C8B4BA;
        }
    </style>
    <title>My Blog</title>
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
        <!-- <h1>Blog</h1> -->
         <img src="img/banner.png" alt="banner" class="image">
    </header>
    <?php
    include("include/topNav.php")
    ?>
    <main>
        <p>Search Blog <input type="text" name="blogSearch" id="blogSearch"></p>

        <table border="1" width="100%" id="blogTable">
            <tr>
                <th style="background-color: #e0e0e0; text-align: center;" colspan="3">Category 1</th>
            </tr>
            <tr>
                <td>Article</td>
                <td>Article</td>
                <td>Video</td>
            </tr>
            <tr>
                <th style="background-color: #e0e0e0; text-align: center;" colspan="3">Category 2</th>
            </tr>
            <tr>
                <td>Video</td>
                <td>Article</td>
                <td>Article</td>
            </tr>
        </table>
    </main>
</body>
</html>