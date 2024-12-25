<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/newstyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #aboutMeTable{
            max-width: 800px;
            margin: 0 auto;
            border-collapse: collapse;
            text-align: left;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            border: 1px solid #ddd;
        }
        
        footer{
            background-color: #f1f1f1;
            text-align: center;
            /* padding: 10px; */
        }
    </style>
    <title>Lab4 website</title>
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
        <!-- <h1>HOME</h1> -->
         <img src="img/banner.png" alt="banner image" class="image">
    </header>
    <?php
    include("include/topNav.php")
    ?>
    <main>
        <div class="row">
            <div class="col-left">
                <img src="img/profile.jpg" alt="Helmi encem" style="height: 300px; border-radius: 5px;">
            </div>
            <div class="col-right">
                <div class="aboutMe">
                    <h2>About Me</h2>
                    <table border="1" width="100%" id="aboutMeTable">
                        <tr>
                            <td width="150">Name</td>
                            <td>&nbsp;Mohamad Helmi Mohamad Sayono</td>
                        </tr>
                        <tr>
                            <td width="150">Matric No.</td>
                            <td>&nbsp;BI22110105</td>
                        </tr>
                        <tr>
                            <td width="150">Email</td>
                            <td>&nbsp;mohamad_helmi_bi22@iluv.ums.edu.my</td>
                        </tr>
                    </table>
                </div>
                <div class="dailyQuote">
                    <h2>My Daily Quote</h2>
                    <table  width = "100%">
                        <tr>
                            <td>Join me in my foodie journey...</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <p><i><small>Copyright &copy; 2024 Helmi</small></i></p>
    </footer>
</body>
</html>