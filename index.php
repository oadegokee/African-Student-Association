<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/global.css">
  <link rel="stylesheet" href="css/index.css">
  <script src="./js/global.js"></script>
  
  <title>ASA Home Page</title>
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
          <img src="./images/nav-icon.png" alt="nav icon" id="navIcon" width="40" height="40">
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

  <div class="image_display">
    <div class="overlay"></div>
    <h2>African Student Association</h2>
    <button onClick="location.href='gallery.php'"><b>Gallery</b></button>
  </div>

  <?php
    include 'quotes.php';
  ?>

  <div class="footer">
    <div id="footer_left">
        <p>Call us: 715-836-3367</p>
        <p>Email: <a id="email" href="mailto:chanc95@uwec.edu" target="_nl">chanc95@uwec.edu</a></p>
    </div>

    <div id="footer_right">
      <a href="https://www.facebook.com/ASAEauClaire?mibextid=LQQJ4d " target="_blank">
        <img src="./images/facebook_icon.png" alt="Facebook Icon" width="30" height="30" id="facebook_logo">
      </a>

      <a href="https://instagram.com/uwec_asa?igshid=YmMyMTA2M2Y=" target="_blank" >
        <img src="./images/instagram_icon.png" alt="Instagram Icon" width="30" height="30" id="instagram_logo">
      </a>
    </div>
  </div>
</body>
</html>