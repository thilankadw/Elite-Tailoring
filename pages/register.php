<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Elite Tailoring Store</title>
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
    

    <div id="register-form">
        <form >
            <h1 id="register-text">Register</h1>

            
		    <lable class="register-form-lable">First Name :</lable><br>
		    <input type="text" class="register-input" name="fname" placeholder="First Name"/><br>
		    

		    <lable class="register-form-lable">Last Name:</lable><br>
		    <input type="text " class="register-input" name ="lname" placeholder="Last Name"/><br>
            

            <lable class="register-form-lable">E-mail:</lable><br>
		    <input type="email" class="register-input" name ="email" placeholder="user@gmail.com"/><br>
            
            <lable class="register-form-lable">Contact Number:</lable><br>
		    <input type="text" class="register-input" name ="contactno" placeholder="Contact NO"/><br>
		   
            <lable class="register-form-lable">Address:</lable><br>
		    <input type="text" class="register-input" name ="address" placeholder="Address"/><br>
		    
            <div id="t-and-c"><input id="t-and-c-btn" type="checkbox" onclick="enableButton()">I accept all the terms & conditions.</div><br>
            
            <lable class="register-form-lable">Password:</lable><br>
		    <input type="password" class="register-input" name ="password" placeholder=""/><br>
            
            <lable class="register-form-lable">Re-enter password:</lable><br>
		    <input type="password" class="register-input" name ="confirm-password" placeholder=""/><br>
            
        
            <a > <button class="register-form-bttn" type="submit" name="submit" >Register</button></a>

            <h3 id="regiter-text2">Already have account,<a href="login.php">Login here.</a></h3>

        </form>
      <br><Br> <br><Br> <br><Br>
      

    </div>>
   
    <?php
        include 'footer.php';
    ?>

    

    

    
  </body>
</html>
