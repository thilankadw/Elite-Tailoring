<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">

    <!--Font_Awesome library importing-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <nav>
        <div class="nav-upper-section">
            <div class="nav-signin-btn">
                <?php
                if (isset($_SESSION['user_first_name'])) {
                    echo
                    "<a href='../useraccount/useraccount.php'>
                    <i class='fa-regular fa-user' style='color: #2c2d30; maegin-left: 0.4rem;'></i>" .
                        $_SESSION['user_first_name'] . "</a>";
                } else {
                    echo
                    "<button id='signin'>
                            <i class='fa-regular fa-user' style='color: #2c2d30;'></i>
                            SIGN IN
                        </button>";
                }
                ?>

            </div>
            <div class="nav-wishlit-btn">
                <a href="../wishlist/wishlist.php">
                    <i class="fa-regular fa-heart"></i>
                    WISHLIST
                </a>
            </div>
            <div class="nav-cart-btn">
                <a href="../shoppingcart/shoppingcart.php">
                    <i class="fa-regular fa-heart"></i>
                    CART
                </a>
            </div>
        </div>
        <div class="nav-middle-section">
            <div class="nav-logo"><a href="../index/index.php"><img src="../assets/logo/logo.jpg" alt=""></a></div>
            <div class="nav-searchbar">
                <form action="../store/store.php" method="GET">
                    <i class="fa-solid fa-magnifying-glass"><input type="submit" name="search-submit"></i>
                    <input type="text" name="search" placeholder="Search">
                </form>
            </div>
            <div class="nav-menu">
                <a href="../store/store.php">STORE</a>
                <a href="../appointments/appointments.php">APPOINTMENTS</a>
                <a href="../customization/customization.php">CUSTOMIZATION</a>
                <a href="../aboutus/aboutus.php">ABOUT US</a>
                <!--  <a href="../contact/contact.php">CONTACT US</a>  -->
            </div>
        </div>
    </nav>

    <div class="login-popup-container">

        <div class="login-close-btn">
            <i class="fa-solid fa-xmark"></i>
        </div>

        <div class="login-form">
            <button id="login">
                <h2>Login</h2>
            </button>
            <button id="register">
                <h2>Register</h2>
            </button>
        </div>

        <div class="login-form-display">
            <form action="../inc/signin.php" method="POST" autocomplete="on">
                <div class="login-form-element">
                    <label for="email" id="email">Email</label>
                    <input type="email" id="email" name="email-login" autofocus required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                </div>
                <div class="login-form-element" id="login-password">
                    <label for="password" id="password">Password</label>
                    <input type="password" id="password" name="password-login">
                </div>
                <div class="login-form-element">
                    <input type="submit" name="btn-login" id="login" value="Sign In">
                </div>
            </form>
        </div>

        <div class="register-form-display">
            <form action="../inc/signup.php" method="POST" autocomplete="on" name="register">
                <div class="login-form-element">
                    <label for="firstname" id="firstname">First Name</label>
                    <input type="text" id="firstname" name="firstname" autofocus required pattern="[a-zA-Z]+">
                </div>
                <div class="login-form-element">
                    <label for="lastname" id="lastname">Last Name</label>
                    <input type="text" id="lastname" name="lastname" required pattern="[a-zA-Z]+">
                </div>
                <div class="login-form-element" id="gender-select">
                    <label for="gender" id="gender">Gender</label>
                    <input type="radio" id="gender" name="gender" required value="Male">
                    <label for="gender" id="gender">Male</label>
                    <input type="radio" id="gender" name="gender" required value="Female">
                    <label for="gender" id="gender">Female</label>
                </div>
                <div class="login-form-element">
                    <label for="email" id="email">Email</label>
                    <input type="email" id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                </div>
                <div class="login-form-element">
                    <label for="address-line1" id="address-line1">Address Line 1</label>
                    <input type="text" id="address-line1" name="address-line1" required>
                </div>
                <div class="login-form-element">
                    <label for="address-line2" id="address-line2">Address Line 2</label>
                    <input type="text" id="address-line2" name="address-line2" required>
                </div>
                <div class="login-form-element">
                    <label for="address-line3" id="address-line3">Address Line 3</label>
                    <input type="text" id="address-line3" name="address-line3" required>
                </div>
                <div class="login-form-element">
                    <label for="contact-number" id="contact-number">Contact Number</label>
                    <input type="text" id="contact-number" name="contact-number" required pattern="[0-9+]+">
                </div>
                <div class="login-form-element">
                    <label for="password" id="password">Password</label>
                    <input type="password" name="password" id="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
                </div>
                <div class="login-form-element">
                    <label for="confirm-password" id="confirm-password">Confirm Password</label>
                    <input type="password" name="confirm-password" id="confirm-password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
                </div>
                <div class="login-form-element">
                    <input type="submit" name="register-btn" id="register-btn" value="Sign Up" onclick="validateForm(event)">
                </div>
            </form>
        </div>
    </div>




    <script src="../script.js"></script>

</body>

</html>