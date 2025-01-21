<!DOCTYPE html>
<html lang="en">

<head>
	<title>My Coffee Blog</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/newstyle.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<header>
		<!-- <h1>Home</h1> 	 -->
		<img class="image" src="img/banner.png">
	</header>
	<!-- Main container for sticky footer -->
	<div class="container">
        <!-- Navigation Menu -->		
        <?php
            include("includes/topNav.php");
        ?>		
		<main>
			<h2 style="text-align: center;">Home</h2>
			<div class="row">
				<div class="col-left">
					<img src="img/profile.png" alt="avatar image" style="width:150px;height:150px;">
				</div>
				<div class="col-right">
					<h3>About Me</h3>
					<table border="1" width="100%" id="blogtable">
						<tr>
							<td width="150">Name</td>
							<td>Your name</td>
						</tr>
						<tr>
							<td width="150">Matric No.</td>
							<td>&nbsp;...</td>
						</tr>
						<tr>
							<td width="150">Email</td>
							<td>&nbsp;...</td>
						</tr>
					</table>
					<div>
						<h3>My Daily Quote</h3>
						<table width="100%">
							<tr>
								<td>Join me in my foodie journey...</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</main>
	</div>
	<footer class="footer">
		<p>Copyright &copy; 2024 FCI</p>
	</footer>
	<script>
		//JS function called on small screen
		function myFunction() {
			var x = document.getElementById("myTopnav");
			if (x.className === "topnav") {
				x.className += " responsive";
			} else {
				x.className = "topnav";
			}
		}

		//menu navigation active, upon page load
		document.addEventListener("DOMContentLoaded", function () {
			const navLinks = document.querySelectorAll(".topnav a");
			const currentPath = window.location.pathname;

			// Remove any existing 'active' class from all links initially
			navLinks.forEach(link => link.classList.remove("active"));

			// Add 'active' class to the link that matches the current path
			navLinks.forEach(link => {
				const linkPath = new URL(link.href).pathname; // Get path part of link's URL
				if (linkPath === currentPath) {
					link.classList.add("active");
				}
			});
		});
	</script>
</body>

</html>