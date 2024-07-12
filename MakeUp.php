<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MakeUp</title>

  <link rel="stylesheet" href="CSS/Navbar.css">
  <link rel="stylesheet" href="CSS/MakeUp.css">


 
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
        <h2>Welcome to Makeup Store</h2>
        <p>Discover the perfect makeup products for your beauty needs.</p>
    </div>
</section>

<section id="featured-products">
    <div class="container">
        <h2>Featured Products</h2>
        <div class="product-grid">
            <div class="product">
                <img src="Images/LuxuryLipstick.webp" alt="Product 1">
                <h3>Luxury Lipstick</h3>
                <p>A vibrant range of colors for every occasion.</p>
                <span class="price">$19.99</span>
                
            </div>
            <div class="product">
                <img src="Images/NaturalShadowPallette.jpg" alt="Product 2">
                <h3>Natural Eyeshadow Palette</h3>
                <p>Easily blendable shades for a natural look.</p>
                <span class="price">$29.99</span>
                
            </div>
            <div class="product">
                <img src="Images/Foundation.webp" alt="Product 3">
                <h3>Matte Foundation</h3>
                <p>Lightweight formula that lasts all day.</p>
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
                <img src="Images/BackgroundImage.jpeg" alt="Offer 1">
                <div class="offer-details">
                    <h3>Summer Sale</h3>
                    <p>Save up to 30% on selected makeup products.</p>
                    
                </div>
            </div>
            <div class="offer">
                <img src="Images/Lipstick.jpeg" alt="Offer 2">
                <div class="offer-details">
                    <h3>Free Shipping</h3>
                    <p>Enjoy free shipping on orders over $50.</p>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section id="order">
    <div class="container">
        <h2>Place Your Order</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="product">Select Product</label>
                <select id="product" name="product" required>
                    <option value="">Select...</option>
                    <option value="lipstick">Luxury Lipstick</option>
                    <option value="eyeshadow">Natural Eyeshadow Palette</option>
                    <option value="foundation">Matte Foundation</option>
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" id="quantity" name="quantity" min="1" required>
            </div>
            <div class="form-group">
                <label for="message">Additional Notes</label>
                <textarea id="message" name="message" rows="4"></textarea>
            </div>
            <button type="submit" class="btn">Place Order</button>
        </form>
    </div>
</section>

<?php
    require 'Connection.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["name"], $_POST["email"], $_POST["product"],$_POST["quantity"],$_POST["message"])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $product = $_POST["product"];
            $quantity= $_POST["quantity"];
            $message = $_POST["message"];
            

            $duplicate = mysqli_query($conn, "SELECT * FROM MakeUp WHERE name='$name'");

            if (mysqli_num_rows($duplicate) > 0) {
                echo "<script>alert('Error!');</script>";
            } else {
                $query = "INSERT INTO MakeUp(name, email, product, quantity, message) VALUES ('$name', '$email', '$product', '$quantity', '$message')";
                mysqli_query($conn, $query);
                echo "<script>alert('Submission Successful');</script>";
            }
        }
    }
?>







<footer>
    <div class="container">
        <p>&copy; 2024 Makeup Store. All rights reserved.</p>
    </div>
</footer>

  </body>
  </html>