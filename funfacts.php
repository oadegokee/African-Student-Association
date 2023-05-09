<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/funfacts.css">
    <script src="./js/global.js"></script>

    <title>Fun Facts</title>
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
        <li><a href="about_us.html">About Us</a></li>
        <li><a href="events.html">Events</a></li>
        <li><a href="e_board.html">E-Board</a></li>
        <li><a href="contact_us.html">Contact Us</a></li>
      </ul>
    </nav>
  </div>

  <div id="fact-wrapper">
    <div id="title" class="facts">
      <h1>Fun Facts About Africa</h1>
      <p>
        Welcome to our page of fascinating facts about Africa! We're excited to share with you some amazing information about this incredible 
        continent that you may not have known before. Africa is a place of diverse landscapes, cultures, and people, and we hope to give you a 
        glimpse of just how rich and complex it truly is.
      </p>
    </div>

    <div class="facts" id="kilimanjaro">
      <h2>Mount Kilimanjaro is Africa's tallest peak</h2>
      <p>Mount Kilimanjaro, located in Tanzania, is Africa's highest peak at 5,895 meters above sea level.
        The mountain is a snow-capped volcano and a popular destination for climbers worldwide. It is one 
        of the biggest challenges for professional climbers today due to its steep ascent and high altitude.
        Despite the difficulty, the climb is known for its stunning views and unique flora and funa found
        nowhere else in the world.
      </p>
      <div id="kiliImages">
        <img src="./images/kilimanjaro.webp" alt="Mount Kilimanjaro" class="imageFact">
        <img src="./images/kilimanjaro3.jpeg" alt="Mount Kilimanjaro" class="imageFact">
        <img src="./images/kilimajaro2.jpeg" alt="Mount Kilimanjaro" class="imageFact">
      </div>
    </div>

    <?php
      include 'getFacts.php';
    ?>

    <div class="facts" id="sahara">
      <h3>Africa's Sahara Desert is bigger than the USA</h3>
      <p>The Sahara desert is the largest desert in the world and spans 9.4 million squares kilometers, which 
        is bigger than the entire USA. 
      </p>
      <div id="sub">
        <div class="sahara-facts">
          <h4>Size and Location</h4>
          <p>It spans around 9.4 million squares kilometers. It spans across 11 countries, including Algeria, Chad,
            Egypt, Libya, Mali, Mauritania, Morocco, Niger, Sudan, Tunisia, and Western Sahara.
          </p>
        </div>
        <div class="sahara-facts">
          <h4>Climate</h4>
          <p>The climate in the Sahara desert is extremely hot and dry, with temperatures often exceeding 100°F (38°C) 
            during the day and dropping below freezing at night. Rainfall is rare with some parts of the 
            desert receiving no rainfall for years at a time.</p>
        </div>
        <div class="sahara-facts">
          <h4>Wildlife</h4>
          <p>Despite the harsh climate, the Sahara is home to a variety of wildlife, including the Saharan cheetah, dromedary camels, and the fennec fox. 
            The desert also supports a diverse range of insects, reptiles, and birds that have adapted to its extreme conditions.</p>
        </div>
      </div>
    </div>
    
  </div>


  <div class="footer">
    <div id="footer_left">
        <p>Call us: 715-836-3367</p>
        <p>Email: <a id="email" href="mailto:chanc95@uwec.edu" target="_nl">chanc95@uwec.edu</a></p>
    </div>

    <div id="footer_right">
      <a href="https://www.facebook.com/ASAEauClaire?mibextid=LQQJ4d " target="_blank">
        <img src="./images/facebook_icon.png" alt="Facebook Icon" width="30px" height="30px" id="facebook_logo">
      </a>

      <a href="https://instagram.com/uwec_asa?igshid=YmMyMTA2M2Y=" target="_blank" >
        <img src="./images/instagram_icon.png" alt="Instagram Icon" width="30px" height="30px" id="instagram_logo">
      </a>
    </div>
  </div>
 
</body>
</html>