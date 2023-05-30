<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Elite Tailoring</title>
    <link rel="stylesheet" href="../style.css" />
    <script src="../script.js"></script>
  </head>
  <body>
    
<?php
    include "navbar.php";
?>
    <form id="formSubmit" method="post" action="carrerFormSub.php">
        <h3 id="fHeader">start your new career </h3><br>
        <p> register now. enter your personal details below
        <label  id="ld">First Name :</label><br> 
           <input type="text" id="input-c" name="fname" value=""  width="100%" required><br>
        <label id="ld">Last Name :</label><br> 
           <input type="text" id="input-c" name="lneme" value=""  width="100%" required><br>  
        <label id="ld">Address :</label><br> 
           <textarea  id="input-c" name="addr"  width="100%"></textarea>  <br>
          
         <label id="ld">Email : </label><br> 
              <input type="email" id="input-c"  name="email"  width="100%" required><br>
              
         <label id="ld">Phone number : </label><br> 
         <input type="phone"  id="input-c" name="phone"  width="100%" required><br>
    
         <label id="ld">Gender : </label><br> 
              <input type="radio"  id="ld" name="Male" value="Male">Male
              <input type="radio" id="ld"  name="male"  value="Male">feMale <br>
          
          <label id="ld"  width="100%">Educational Qualifications :</label><br>
          <textarea name="eQual" id="ld" width="100%"></textarea><br>
         <br>     <label id="ld" name="upload" >Upload your Certificates :</label>
          <input type="file" name="fileUpload"> <br>
    
          <input id="ld" type="checkbox" onclick="enableButton()">I accept all the privacy & policy terms
          <br>
         <input type="submit" name="btnSubmit" value="submit" id="btnSubmit" disabled>    
    
             
    
    
    
    
    
    
    
    
    
      </form>

<?php
            include "footer.php";
?>

  </body>
</html>
