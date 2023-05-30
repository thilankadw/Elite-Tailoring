<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<<<<<<< HEAD
    <title>Elite Tailoring</title>
    <!--<link rel="stylesheet" href="../style.css" />-->
    
    <!--Font_Awesome library importing-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body>

    <div>
      <!--Navigation Bar Start-->

      <?php include 'navbar.php';?>

      <!--Navigation Bar End-->
    </div>

    <div class="hero-container">
      <div class="hero-banner-1">
        <img src="../assets/home/banner-image-3.png" alt="" style="width: 90%;">
      </div>
    </div>

    <div>
      <!--Footer Start-->

      <?php include 'footer.php';?>

      <!--Footer End-->
    </div>



    <script src="../script.js"></script>

  </body>

</html>

=======
    <title>Elite TailoringLogin</title>
    <link rel="stylesheet" href="../elite_style.css" />
    <script src="../script.js"></script>
  
  </head>
  <body>
    <div>
      <!--Navigation Bar Start-->
        
      <?php include 'navbar.php';?>
        
      <!--Navigation Bar End-->
    </div>
   <hr><br>
    
   <section id="login_section">

   <div class="login-box">   
        <form action="" class="form-login">
             <P id="log-txt">LOGIN</P>
            <div class="login-input"> 
                <span class="icon"> <ion-icon name="mail"></ion-icon></span>
                <label>E-mail</label>
                <input type="email"  name ="email" required/>
                
            </div>
        
            <div class="login-input"> 
                <span class="icon"> <ion-icon name="lock-closed"></ion-icon> </span>
                <label>Password</label>
                <input type="password"  name ="password" required/>
                
            </div>
        
            <div class="login-btn">
                 <a > <button class="login-bttn" type="submit" name="login" >   Login   </button></a>
            </div>

            <div>
                <p class="loginreg">Don't have an account?<a href="register.php">Register</a></p>

            </div>

         </form>
    </div>
</section>

      


    <?php
        include 'footer.php';
    ?>

    

    

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>
>>>>>>> 9239de77d30aa941aba5a20171ba87e62d0e1b17
