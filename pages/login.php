<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Elite TailoringLogin</title>
    <link rel="stylesheet" href="../style.css" />
    <script src="../script.js"></script>
  
  </head>
  <body>
    <div>
      <!--Navigation Bar Start-->
        
      <?php include 'navbar.php';?>
        
      <!--Navigation Bar End-->
    </div>
   <hr><br>
    

    <div id="login-form">
        <form >
            <h1 id="login-text">Login</h1>

    
            <lable class="-form-lable">E-mail:</lable><br>
		    <input type="email" class="login-input" name ="email" placeholder="user@gmail.com"/><br>
        
            <lable class="-form-lable">Password:</lable><br>
		    <input type="password" class="login-input" name ="password" placeholder=""/><br>
            
            <a > <button class="" type="submit" name="submit" >   Register   </button></a>
        </form>
    </div>>
   
    <?php
        include 'footer.php';
    ?>

    

    

    
  </body>
</html>
