<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>

    <link rel="stylesheet" href="CSS/Navbar.css">
    <link rel="stylesheet" href="CSS/Contacts.css" />

    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous">
    </script>
    
    
    
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






   <div class="container">
      <span class="big-circle"></span>
      
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's Connect</h3>
          <p class="text">
            We're here to assist with any questions about our beauty products and services. Reach us via email, phone, or social media for personalized support.
          </p>

          <div class="info">
            <div class="information">
              <img src="Images/location.png" class="icon" alt="" />
              <p>Nairobi, Kenya</p>
            </div>
            <div class="information">
              <img src="Images/icon-email.webp" class="icon" alt="" />
              <p>faithnjung42@gmail.com</p>
            </div>
            <div class="information">
              <img src="Images/phone-icon.png" class="icon" alt="" />
              <p>+254 791249955</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="" method="post">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <button type="submit" class=" Send">Send</button>
            
          </form>
        </div>
      </div>
    </div>
  


    <?php
    require 'Connection.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["name"], $_POST["email"], $_POST["phone"],$_POST["message"])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $message = $_POST["message"];
            

            $duplicate = mysqli_query($conn, "SELECT * FROM contacts WHERE name='$name'");

            if (mysqli_num_rows($duplicate) > 0) {
                echo "<script>alert('Error!');</script>";
            } else {
                $query = "INSERT INTO contacts(name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
                mysqli_query($conn, $query);
                echo "<script>alert('Submission Successful');</script>";
            }
        }
    }
?>

<script src="Contact.js"></script>

    
  </body>
</html>


















 