<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="./images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="./css/global.css">
	<link rel="stylesheet" href="css/gallery.css">
	<script src="./js/gallery.js"></script>
	<script src="./js/global.js"></script>
	<title>ASA Gallery</title>
</head>

<body>
	<div class="header">
		<nav>
			<div class="logo">
				<a href="index.php">
					<img src="./images/ASA_logo.jpg" alt="ASA LOGO" id="asa_logo">
					African <br> Student <br> Association
				</a>
			</div>

			<div class="toggle">
				<a href="#">
					<img src="./images/nav-icon.png" alt="nav icon" id="navIcon" width="40px" height="40px">
				</a>
			</div>
			<ul class="nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="aboutus.html">About Us</a></li>
				<li><a href="events.html">Events</a></li>
				<li><a href="eboard.html">E-Board</a></li>
				<li><a href="contactus.html">Contact Us</a></li>
			</ul>
		</nav>
	</div>

	<?php
		require_once('sql_conn.php');

		$response = mysqli_query($dbc, "SELECT image FROM images ORDER BY id");
		
	?>

	<div id="diapoContainer">
		<?php
			while($row = mysqli_fetch_assoc($response)) {
				$imagePath = $row['image'];
				echo "<img class='imgsrc' src='$imagePath' alt=''>";
			}
		?>
		<div id="caption"></div>
	</div>

	<script type="text/javascript">
		function dom_onload() {
			if (document.getElementById("diapoContainer")) diapo.init(); else setTimeout("dom_onload();", 128);
		}
		dom_onload();
	</script>
	<div class="footer">
		<div id="footer_left">
			<p>Call us: 715-836-3367</p>
			<p>Email: <a id="email" href="mailto:chanc95@uwec.edu" target="_nl">chanc95@uwec.edu</a></p>
		</div>

		<div id="footer_right">
			<a href="https://www.facebook.com/ASAEauClaire?mibextid=LQQJ4d " target="_blank">
				<img src="./images/facebook_icon.png" alt="Facebook Icon" width="30px" height="30px" id="facebook_logo">
			</a>

			<a href="https://instagram.com/uwec_asa?igshid=YmMyMTA2M2Y=" target="_blank">
				<img src="./images/instagram_icon.png" alt="Instagram Icon" width="30px" height="30px"
					id="instagram_logo">
			</a>
		</div>
	</div>
</body>

</html>
