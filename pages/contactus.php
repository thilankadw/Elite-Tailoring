<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Elite Tailoring</title>
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../uvinducss.css" />
    <script src="../script.js"></script>
    
    <!--Font_Awesome library importing-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body>
    <div>
      <!--Navigation Bar Start-->
        <nav>
          <div class="logo">ELITE</div>
            <div class="menu">
              <ul>
                <li><a href="index.php" class="menu-elements">Home</a></li>
                <li><a href="online_store.php" class="menu-elements">Store</a></li>
                <li><a href="appointment_booking.php" class="menu-elements">Book Appointments</a></li>
                <li><a href="measurements_input.php" class="menu-elements">Career</a></li>
                <li><a href="carrer.php" class="menu-elements">Career</a></li>

                <li><a href="faq.php" class="menu-elements">Contact Us</a></li>
                <li><a href="#" class="menu-elements">About Us</a></li>
              </ul>
            </div>
            <div class="navigation-left">
              <div class="cart">
                <a href="#">
                  <i class="fa-solid fa-cart-shopping" style="color: #3b3b3b;"></i>
                </a>
              </div>
              <div class="profile">
                <a href="register.php">
                  <i class="fa-solid fa-user" style="color: #3b3b3b;"></i>
                </a>
              </div>
            </div>
        </nav>
      <!--Navigation Bar End-->
    </div>
   
<!--Contact Us form -->

    <div id="ContactusForm">
      

<form action="connect.php" method="post" class="uvinduContact">

<h1 id="contactHead">
      Contact Us   
      </h1><br><br>

<label>First Name</label><br>
<input type="text" id="fname" name="fname"  class="txtcn" required><br><br>

<label>Last Name</label><br>
<input type="text" id="lname" name="lname"  class="txtcn" required><br><br>

<label >Mobile Number</label><br>
<input type="number" id="Mno" name="Mno" class="txtcn" required><br><br>

<label>Email</label><br>
<input type="email" id="email" name="email" class="txtcn"  required><br><br>

<label>Message</label><br>
<textarea id="address" name="address" rows="4" cols="50" class="txtcn" required></textarea><br><br>

<label>Accept privacy policy terms</label>
<input type="checkbox" id="chkbx" name="chkbx" onclick="enableButton()" required><br><br>

<input type="submit" value="Submit" class="conbtn"  >

        
      </form>
        
    </div>
    <!--Contact Us form ends -->
     <!--Footer Start-->
      
     <div class="footer-container">
        <div class="footer-logo"></div>
        <div class="footer-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab quas deleniti voluptatum porro voluptas nesciunt, repellendus perspiciatis temporibus, vitae tempore esse ad eum numquam fugiat quam voluptatibus pariatur earum debitis!</div>
        <div class="footer-navigation">

            <ul>
                <li><a href="index.php" class="footer-navigation-elements">Home</a></li>
                <li><a href="online_store.php" class="footer-navigation-elements">Store</a></li>
                <li><a href="appointment_booking.php" class="footer-navigation-elements">Book Appointments</a></li>
                <li><a href="measurements_input.php" class="footer-navigation-elements">Career</a></li>
                <li><a href="faq.php" class="footer-navigation-elements">Contact Us</a></li>
                <li><a href="#" class="footer-navigation-elements">About Us</a></li>
            </ul>

        </div>
        <div class="footer-social-links">
          <a href="#"><p class="footer-facebook"><i class="fa-brands fa-facebook fa-2xl" style="color: #3b3b3b;"></i></p></a>
          <a href="#"><p class="footer-instagram"><i class="fa-brands fa-instagram fa-2xl" style="color: #082f72;"></i></i></p></a>
        </div>
        <div class="footer-contact">
          <p class="footer-phone">+94 11 234 5678</p>
        </div>
      </div>
      

      <!--Footer End-->
    </div>
  </body>
</html>
