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
                <button id="signin">
                    <i class="fa-regular fa-user" style="color: #2c2d30;"></i>
                    SIGN IN
                </button>
            </div>
            <div class="nav-wishlit-btn">
                <a href="#">
                    <i class="fa-regular fa-heart"></i>
                    WISHLIT
                </a>
            </div>
            <div class="nav-cart-btn">
                <a href="../shoppingcart/shoppingcart.php">
                    <i class="fa-regular fa-cart-shopping"></i>
                    CART
                </a>
            </div>
        </div>
        <div class="nav-middle-section">
            <div class="nav-logo">Elite</div>
            <div class="nav-searchbar">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Search">
            </div>
            <div class="nav-menu">
                <a href="../store/store.php">STORE</a>
                <a href="#">APPOINTMENTS</a>
                <a href="../customization/customization.php">CUSTOMIZATION</a>
                <a href="#">ABOUT US</a>
              <!--  <a href="../contact/contact.php">CONTACT US</a>  -->
            </div>
        </div>
    </nav>

    <div class="login-popup-container">

        <div class="login-close-btn">
            <i class="fa-solid fa-xmark"></i>
        </div>

        <div class="login-form">
            <button id="login"><h2>Login</h2></button>
            <button id="register"><h2>Register</h2></button>
        </div>

        <div class="login-form-display">
            <div class="login-form-element">
                <label for="email" id="email">Email</label>
                <input type="email" id="email">
            </div>
            <div class="login-form-element" id="login-password">
                <label for="password" id="password">Password</label>
                <input type="password" id="password">
            </div>
            <div class="login-form-element">
                <input type="checkbox" id="remember-me">
                <label for="password" id="password">Remember Me</label>
            </div>
            <div class="login-form-element">
                <input type="submit" id="login" value="Sign In">
            </div>
        </div>

        <div class="register-form-display">
            <div class="login-form-element">
                <label for="firstname" id="firstname">First Name</label>
                <input type="text" id="firstnamel">
            </div>
            <div class="login-form-element">
                <label for="lastname" id="lastname">Last Name</label>
                <input type="text" id="lastnamel">
            </div>
            <div class="login-form-element">
                <label for="email" id="email">Email</label>
                <input type="email" id="email">
            </div>
            <div class="login-form-element">
                <label for="address-line1" id="address-line1">Address Line 1</label>
                <input type="text" id="address-line1">
            </div>
            <div class="login-form-element">
                <label for="address-line2" id="address-line2">Address Line 2</label>
                <input type="text" id="address-line2">
            </div>
            <div class="login-form-element">
                <label for="address-line3" id="address-line3">Address Line 3</label>
                <input type="text" id="address-line3">
            </div>
            <div class="login-form-element">
                <label for="contact-number" id="contact-number">Contact Number</label>
                <input type="text" id="contact-number">
            </div>
            <div class="login-form-element">
                <label for="password" id="password">Password</label>
                <input type="password" id="password">
            </div>
            <div class="login-form-element">
                <label for="confirm-password" id="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password">
            </div>
            <div class="login-form-element">
                <input type="submit" id="register-btn" value="Sign Up">
            </div>
        </div>
    </div>
    



    <script src="../script.js"></script>


</body>
</html>