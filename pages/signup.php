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
	  <script src="../uvinduscript.js"></script>

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


    <div class="signUp">

<form  action="" method="post" class="uvindusign"  onsubmit="return checkSignPassword()">

<h1 >Sign Up</h1><br>
<h4 >It's free only take few minutes</h4><br>

   <label>First Name</label>
   <input type="text" id="fname" name="fname" class="txts" required><br>

   <label>Last Name</label>
   <input type="text" id="fname" name="fname" class="txts" required><br>

   <label>Email</label>
   <input type="email" id="email" name="E-mail" class="txts" required><br>

   <label>Password</label>
   <input type="password" id="pass" name="pass" class="txts" required><br>

   <label>Re-enter Password</label>
   <input type="password" id="compass" name="compass" class="txts" required><br>
   
   <label>Accept privacy policy terms</label>
    <input type="checkbox" id="chkbxsign" name="chkbxsign" onclick="enableButtonSign()" required><br><br>

   <input type="button" value="SignUp" class="btnsign"  disabled>
   
   <br><br><p class="para">Already have an account? <a href="uvindulogin.php">Log In</a></p>

</form>


</div>

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