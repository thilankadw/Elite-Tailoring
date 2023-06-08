/*------------------------------------------------
        Login and Register Form Function
-------------------------------------------------*/

document.querySelector(".register-form-display").style.display = "none";

document.querySelector("#signin").addEventListener("click", () => {
    document.querySelector(".login-popup-container").classList.add("login-popup-active");
});
document.querySelector(".login-popup-container .login-close-btn").addEventListener("click", () => {
    document.querySelector(".login-popup-container").classList.remove("login-popup-active");
    document.querySelector(".register-form-display").style.display = "none";
    document.querySelector(".login-form-display").style.display = "block";
});

document.querySelector("#register").addEventListener("click", () => {
    document.querySelector(".login-form-display").style.display = "none";
    document.querySelector(".register-form-display").style.display = "block";
});

document.querySelector("#login").addEventListener("click", () => {
    document.querySelector(".register-form-display").style.display = "none";
    document.querySelector(".login-form-display").style.display = "block";
});

//function for matching passwords.
function validateForm(event) {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm-password").value;

    if (password !== confirmPassword) {
        event.preventDefault(); // Prevent form submission
        alert("Password and Confirm Password do not match.");
    }
}


/*------------------------------------------------
        Customization Function
-------------------------------------------------

document.getElementById("custom-size").style.display = "none";
document.getElementById("product-details-content-sizes").style.display = "none";

document.getElementById("standard-size").addEventListener("click", () => { 
    document.getElementById("product-details-content-custom-sizes").style.display = "none";
    document.getElementById("product-details-content-sizes").style.display = "block";
    document.getElementById("standard-size").style.display = "none";
    document.getElementById("custom-size").style.display = "block";
});

document.getElementById("custom-size").addEventListener("click", () => { 
    document.getElementById("product-details-content-sizes").style.display = "none";
    document.getElementById("product-details-content-custom-sizes").style.display = "block";
    document.getElementById("custom-size").style.display = "none";
    document.getElementById("standard-size").style.display = "block";
});*/

