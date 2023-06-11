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

/*------function for matching passwords.--------*/
function validateForm(event) {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm-password").value;

    if (password !== confirmPassword) {
        event.preventDefault(); // Prevent form submission
        alert("Password and Confirm Password do not match.");
    }
}
