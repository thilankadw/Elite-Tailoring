<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
