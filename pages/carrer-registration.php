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
        <h3 id="fHeader">start your new career </h3>
        <p> register now. enter your personal details below
        <label  id="ld">First Name :</label><br> 
           <input type="text" name="fname" value=""  required><br>
        <label id="ld">Last Name :</label><br> 
           <input type="text" name="lneme" value="" required><br>  
        <label id="ld">Address :</label><br> 
           <textarea name="addr"></textarea>  <br>
          
         <label id="ld">Email : :</label><br> 
              <input type="email"  name="email" required><br>
              
         <label id="ld">Phone number : :</label><br> 
         <input type="email" name="phone" required><br>
    
         <label id="ld">Gender : :</label><br> 
              <input type="radio"  id="Male" name="Male" value="Male">Male
              <input type="radio" id="Male"  name="male"  value="Male">feMale <br>
          
          <label id="ld">Educational Qualifications :</label><br>
          <textarea name="eQual"></textarea><br>
         <br>     <label>Upload your Certificates :</label>
          <input type="file" id="fileUpload"> <br>
    
          <input id="checkClick" type="checkbox" onclick="enableButton()">I accept all the privacy & policy terms
          <br>
         <input type="submit" name="btnSubmit" value="submit">    
    
             
    
    
    
    
    
    
    
    
    
      </form>

<?php
            include "footer.php";
?>

  </body>
</html>
