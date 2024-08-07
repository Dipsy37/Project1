<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Skincare</title>

  <link rel="stylesheet" href="CSS/Navbar.css">
  <link rel="stylesheet" href="CSS/Skincare.css">


 
</head>
<body>

<nav>
    <ul class="sidebar">
      <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
      <li><a target="_blank" href="About.php">ABOUT</a></li>
      <li><a target="_blank" href="MakeUp.php">MAKE-UP</a></li>
      <li><a target="_blank" href="Skincare.php">SKINCARE</a></li>
      <li><a target="_blank" href="Reviews & Testimonies.php">TESTIMONIES</a></li>
      <li><a target="_blank" href="Contacts.php">CONTACTS</a></li>
    </ul>

    <ul>
      <li class="hideOnMobile"><a target="_blank" href="index.php">BelleBeauty</a></li>
      <li class="hideOnMobile"><a target="_blank" href="About.php">ABOUT</a></li>
      <li class="hideOnMobile"><a target="_blank" href="MakeUp.php">MAKE-UP</a></li>
      <li class="hideOnMobile" ><a target="_blank"href="Skincare.php">SKINCARE</a></li>
      <li class="hideOnMobile" ><a target="_blank"href="Reviews & Testimonies.php">TESTIMONIES</a></li>
      <li class="hideOnMobile"><a target="_blank" href="Contacts.php">CONTACTS</a></li>
      <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></svg></a></li>
    </ul>
  </nav>

  <!--responsive js for the navbar-->
  <script>
    function showSidebar(){
      const sidebar = document.querySelector('.sidebar')
      sidebar.style.display = 'flex'
    }
    function hideSidebar(){
      const sidebar = document.querySelector('.sidebar')
      sidebar.style.display = 'none'
    }
  </script>

  

  

  <section id="hero">
    <div class="container">
        <h2>Welcome to SkinCare Store</h2>
        <p>Discover the perfect skincare products for your skin and beauty needs.</p>
    </div>
</section>

<section id="featured-products">
    <div class="container">
        <h2>Featured Products</h2>
        <div class="product-grid">
            <div class="product">
                <img src="Images/la-roche-posay-anthelios-lightweight-facial-sunscreen-.jpg" alt="Product 1">
                <h3>Sunscreen</h3>
                <p>This lightweight 100% mineral face sunscreen with titanium dioxide was developed for sensitive skin </p>
                <span class="price">$19.99</span>
                
            </div>
            <div class="product">
                <img src="Images/LaRochePosay-Product-Toleriane-Toleriane-Purifying-foaming-cleanser.jpg" alt="Product 2">
                <h3>Cleanser</h3>
                <p>Toleriane Purifying Foaming Facial Cleanser is a daily face wash for normal to oily, sensitive skin</p>
                <span class="price">$29.99</span>
                
            </div>
            <div class="product">
                <img src="Images/01_LaRochePosay_Cicaplast-UV_front-shadow.jpg" alt="Product 3">
                <h3>Matte Foundation</h3>
                <p>Cicaplast Balm B5 UV is a soothing therapeutic multi-purpose cream with broad spectrum SPF 50.</p>
                <span class="price">$34.99</span>
                
            </div>
        </div>
    </div>
</section>

<section id="latest-offers">
    <div class="container">
        <h2>Latest Offers</h2>
        <div class="offer-grid">
            <div class="offer">
                <img src="Images/3337875583626-1_Glycolic-B5_30ml.jpg" alt="Offer 1">
                <div class="offer-details">
                    <h3>Summer Sale</h3>
                    <p>This anti-aging ultra hydrating pure hyaluronic acid face and neck serum leaves skin feeling plump </p>
                    
                </div>
            </div>
            <div class="offer">
                <img src="Images/1_Toleriane_DblRepairMoisturizer_Tube.jpg" alt="Offer 2">
                <div class="offer-details">
                    <h3>Free Shipping</h3>
                    <p>Toleriane Double Repair Face Moisturizer is formulated with dermatologist-recommended ingredients.</p>
                    
                </div>
            </div>
        </div>
    </div>
</section>



<footer>
    <div class="container">
        <p>&copy; 2024 SkinCare Store. All rights reserved.</p>
    </div>
</footer>

  </body>
  </html>