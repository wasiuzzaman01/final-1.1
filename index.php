<?php
session_start();
// Example: Set session when user logs in (you likely do this in login logic):
// $_SESSION['user_logged_in'] = true;

// Example logout logic might use: unset($_SESSION['user_logged_in']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SS-PLASTIC</title>
  <link href="styles.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<header>
  <div class="header-title">
    <h2>welcome to</h2>
    <h1>ss-plastic</h1>
  </div>

  <nav>
    <button id="hamburger">
      <i class="fa fa-bars"></i>
    </button>      

    <ul class="nav-links">
      <li><a href="#home"><i class="fa-solid fa-house"></i> Home</a></li>
      <li><a href="#products">Products</a></li>
      <li><a href="cart1.php"><i class="fa-solid fa-cart-shopping"></i> Cart</a></li>   
      <li><a href="login.php"><i class="fa-solid fa-circle-user"></i> Sign In</a></li>
      <li><a href="#contact"><i class="fa-solid fa-address-card"></i> Contact</a></li>
    </ul>

    <div class="nav-search">
      <select class="search-select">
        <option>All</option>
        <option>CROCKERY</option>
        <option>HOMEWARE</option>
        <option>STELL</option>
        <option>LOUNDRY</option>
      </select>

      <input placeholder="Search Store........" class="search-input">

      <button class="search-icon" aria-label="Search">
        <i class="fa-solid fa-magnifying-glass"></i>
        <script>
          ('.search-input').addEventListener('keydown', function (event)
          {
            if (event.key === 'Enter')
            {
              document.querySelector('.search-icon').click();
            }
           }); 
        </script>
      </button>        
    </div>
  </nav>
</header>


<!-- main content -->



<section id="products">
  <h2>Our Products</h2>
  <div class="product-grid">

    <div class="product home-care">
      <a href="crockery.php">
        <img src="f.1.jpg" alt="Product 1">
        <p>CROCKERY</p>
      </a>
    </div>

    <div class="product biscuit">
      <a href="homeware.php">
        <img src="f.2.jpg" alt="Product 2">
        <p>HOMEWARE</p>
      </a>
    </div>

    <div class="product beverage">
      <a href="stell.php">
        <img src="f.3.jpg" alt="Product 3">
        <p>STELL</p>
      </a>
    </div>

    <div class="product misc-products">
      <a href="loundary.php">
        <img src="f4.jpg" alt="Product 4">
        <p>LOUNDRY</p>
      </a>
    </div>

  </div>
</section>


<!-- footer -->



<footer class="site-footer">
  <h2 id="contact">Contact Us</h2>

  <div class="footer-links">
    <a href="mailto:mdwasiuzzaman634@gmail.com">
      SEND EMAIL <i class="fa-solid fa-envelope"></i>
    </a>

    <a href="tel:+919939143133">
      CONTACT <i class="fa-solid fa-phone"></i>
    </a>
  </div>

  <div class="footer-address">
    <p>Address:<br>
    shukla road, muzaffarpur, Bihar - 842001</p>

    <a href="https://maps.app.goo.gl/UTJ39U7cnhrB4ckw7" target="_blank">
      <img src="back.jpg" alt="Store Location" class="map-image">
    </a>
  </div>

  <p class="footer-copy">© 2025 Retail & Wholesale Hub. All rights reserved.</p>
</footer>



  
  <script src="script.js"></script>
</body>
</html>