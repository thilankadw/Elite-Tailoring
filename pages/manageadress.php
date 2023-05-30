<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite tailoring/user account</title>
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../elite_style.css" />
    <script src="../script.js"></script>
</head>
<body>

<?php
/*navigation bar start*/
          include 'navbar.php';
 /*navigation bar end*/         
  ?>
        <div id="useraccount-bar">
            <ul>
              <li><a href="profile.php" id="user-account-bar-elements">profile</a></li>
              <li >|</li>
              <li><a href="myorders.php" id="user-account-bar-elements">my orders</a></li>
              <li>|</li>
              <li><a href="manageadress.php" id="user-account-bar-elements">manage address</a></li>
              <li>|</li>
              <li><a href="giftcuppons&cards.php" id="user-account-bar-elements">gift cuppons & cards</a></li>
              <li>|</li>
              <li><a href="" id="user-account-bar-elements">size profile</a></li>

            </ul>
        </div>
        <div>
               <h3 id="manage-address-header">Shipping Address</h3><br><br>
               <form id="manage-address-form" name="manage-address-form">

               <label id="manage-address-label" name="manage-address-label">Name</label>
               <input type="text" id="manage-address-input" name="manage-address-input">

               <label id="manage-address-label" name="manage-address-label">Mobile Number</label>
               <input  type="text" id="manage-address-input" name="manage-address-input"> 

               <label id="manage-address-label" name="manage-address-label">Address</label>
               <textarea id="manage-address-label" name="manage-address-label" ></textarea>

               <label id="manage-address-label" name="manage-address-label">City</label>
               <input type="text" id="manage-address-input" name="manage-address-input"> 

               <label id="manage-address-label" name="manage-address-label">Zip Code</label>
               <input type="text" id="manage-address-input" name="manage-address-input"> 

               <label id="manage-address-label" name="manage-address-label">Country</label>
               <input type="text" id="manage-address-input" name="manage-address-input"> 
                            <br>
                <button id="manage-address-button" name="manage-address-button">Save</button>

             </form>

        </div>

        <div>
               <h3 id="manage-address-header">Payment Details</h3><br><br>
               <form id="manage-address-form" name="manage-address-form">

               <label id="manage-address-label" name="manage-address-label">Name</label>
               <input type="text" id="manage-address-input" name="manage-address-input">

               <label id="manage-address-label" name="manage-address-label">Mobile Number</label>
               <input  type="text" id="manage-address-input" name="manage-address-input"> 

               <label id="manage-address-label" name="manage-address-label">Address</label>
               <textarea id="manage-address-label" name="manage-address-label" ></textarea>

               <label id="manage-address-label" name="manage-address-label">City</label>
               <input type="text" id="manage-address-input" name="manage-address-input"> 

               <label id="manage-address-label" name="manage-address-label">Zip Code</label>
               <input type="text" id="manage-address-input" name="manage-address-input"> 

               <label id="manage-address-label" name="manage-address-label">Country</label>
               <input type="text" id="manage-address-input" name="manage-address-input"> 
                            <br>
                <button id="manage-address-button" name="manage-address-button">Save</button>

             </form>

        </div>





        <?php
        /*footer start*/
                include 'footer.php';
        /*footer end*/
?>

</body>
</html>