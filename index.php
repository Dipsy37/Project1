<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BelleBeauty.Co</title>

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="CSS/Home.css">

 
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
      <h2>Welcome to Belle Beauty</h2>
      <p>Discover the essence of beauty with our exclusive range of products.</p>
      
  </div>
</section>

<section id="videos">
  <div class="container">
      <h2>Featured Videos</h2>
      <div class="video-grid">
          <div class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/pgcrU-V2oTg" frameborder="0" allowfullscreen></iframe>
              <p>A quick tutorial on how to achieve flawless skin using Belle Beauty's skincare products.</p>
          </div>
          <div class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/x_kD3IUQpX0" frameborder="0" allowfullscreen></iframe>
              <p>Explore our latest makeup collection and learn expert makeup tips from our beauty experts.</p>
          </div>
      </div>
  </div>
</section>

<section id="photos">
  <div class="container">
      <h2>Photo Gallery</h2>
      <div class="photo-grid">
          <div class="photo">
              <img src="Images/JelenaTerry.jpeg" alt="Photo 1">
              <p>Discover the vibrant colors of our new lipstick collection.</p>
          </div>
          <div class="photo">
              <img src="Images/FadedEyeMasks.webp" alt="Photo 2">
              <p>Explore the soothing effects of our luxury skincare products.</p>
          </div>
          <div class="photo">
              <img src="Images/🕊️.jpeg" alt="Photo 3">
              <p>Get inspired by our range of makeup looks perfect for any occasion.</p>
          </div>
      </div>
  </div>
</section>

<footer>
  <div class="container">
      <p>&copy; 2024 Belle Beauty. All rights reserved.</p>
  </div>
</footer>

 
</body>
</html>












