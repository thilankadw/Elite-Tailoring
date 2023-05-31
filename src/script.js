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


/*----------------------------------------------------------
        Product Detaisl Section Order Type Selection
-----------------------------------------------------------*/
document.querySelector(".product-details-content-custom-sizes").style.display = "none";

document.querySelector("#custom-size").addEventListener("click", () => {
    document.querySelector(".product-details-content-sizes").style.display = "none";
    document.querySelector(".product-details-content-custom-sizes").style.display = "block";
});