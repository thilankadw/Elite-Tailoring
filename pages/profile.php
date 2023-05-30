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
        <div id="profile-c">

                    <h4>Personal Information</h4>
                    <div id="profile-c1">
                            <h5>
                               Name  :

                            </h5><br>
                            <h6 id="profile-info">malith nimsara</h6>
                            <br>

                            <h5>
                                Email Address  :

                            </h5><br>
                            <h6 id="profile-info">malithnimsara@gmail.com</h6>
                            <br>


                            <h5>
                                Password :

                            </h5><br>
                            <h6 id="profile-info">************</h6>
                            <br>


                            <h5>
                               Phone Number  :

                            </h5><br>
                            <h6 id="profile-info">...........<h6>
                            <br>


                           

                    </div>
                    <button id="personal-data-edit">EDIT</button>

    
    
    
    
    
    
    
        </div>







        <?php
        /*footer start*/
                include 'footer.php';
        /*footer end*/
?>

</body>
</html>