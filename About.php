<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>

  <link rel="stylesheet" href="CSS/Navbar.css">
  <link rel="stylesheet" href="CSS/About.css">

 
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

<div class="about-section">
  <div class="photo-section">
      <img src="Images/Neutral Beige Simple Aesthetic Flower Boutique Logo.png" alt="About Photo">
  </div>
  <div class="text-section">
      <h1>About Us</h1>
      <p>Welcome to BelleBeauty, where we believe that healthy, radiant skin is the foundation of confidence and beauty. 
        Our journey began with a simple yet profound mission: to provide high-quality, effective, and safe skincare products that cater to the unique needs of every individual.
        Our team of experts, including dermatologists, chemists, and skincare enthusiasts, works tirelessly to develop products that are not only innovative but also backed by the latest research and technology. 
        Thank you for choosing BelleBeauty. 
        Here's to a brighter, more radiant you!!
      </p>
  </div>
</div>

</body>
</html>
