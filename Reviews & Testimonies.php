<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Testimonies</title>

  <link rel="stylesheet" href="CSS/Navbar.css">
  <link rel="stylesheet" href="CSS/Reviews & Testimonies.css">

 
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


<header>
    <h1>Customer Reviews</h1>
</header>
<main>
    <section class="testimony">
        <div class="testimony-content">
            <p>"BelleBeauty has transformed my skincare routine! Their products are amazing and my skin has never looked better."</p>
            <h3>- Jane Doe</h3>
        </div>
    </section>
    <section class="testimony">
        <div class="testimony-content">
            <p>"The makeup tutorials on BelleBeauty are so easy to follow. I've learned so many new techniques!"</p>
            <h3>- Mary Smith</h3>
        </div>
    </section>
    <section class="testimony">
        <div class="testimony-content">
            <p>"I love the personalized skincare advice I received from BelleBeauty. They really understand individual needs."</p>
            <h3>- Emily Johnson</h3>
        </div>
    </section>
    <section class="testimony">
        <div class="testimony-content">
            <p>"BelleBeauty's customer service is top-notch. They helped me choose the perfect products for my skin type."</p>
            <h3>- Sarah Brown</h3>
        </div>
    </section>
</main>

</body>
</html>
