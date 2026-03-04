let form = document.getElementById("LoginForm");
let errorMessage = document.getElementById("errorMessage");
let counterDisplay = document.getElementById("counter");
let wrongCount = 0;

form.addEventListener("submit", function (event) {

    event.preventDefault();

    let email = document.getElementById("Email").value;
    let password = document.getElementById("password").value;

    let error = "";


    if (!email.includes("@")) {
        error += "Email must contain @ symbol.<br>";
    }


    if (password.length < 6) {
        error += "Password must be at least 6 characters long.<br>";
    }

    if (!password.includes("#")) {
        error += "Password must contain # symbol.<br>";
    }


    if (error !== "") {
        wrongCount++;
        counterDisplay.innerHTML = wrongCount;
        errorMessage.innerHTML = error;
    }
    else {
        errorMessage.innerHTML = "Login Successful!";
        errorMessage.style.color = "green";
    }


});