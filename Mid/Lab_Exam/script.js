let form = document.getElementById("regForm");

let total = 0;
let virtual = 0;
let inperson = 0;

form.addEventListener("submit", function (e) {

    e.preventDefault();

    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let company = document.getElementById("company").value;

    let type = document.querySelector('input[name="type"]:checked');

    let valid = true;

    document.getElementById("nameError").innerHTML = "";
    document.getElementById("emailError").innerHTML = "";
    document.getElementById("typeError").innerHTML = "";


    if (name.length < 6 || name.length > 100) {
        document.getElementById("nameError").innerHTML =
            "Name must be between 6 and 100 characters.";
        valid = false;
    }

    if (!email.includes("@")) {
        document.getElementById("emailError").innerHTML =
            "Please enter a valid professional email address.";
        valid = false;
    }

    if (!type) {
        document.getElementById("typeError").innerHTML =
            "Please select your attendance type.";
        valid = false;
    }

    if (valid) {

        total++;

        if (type.value === "Virtual") {
            virtual++;
        } else {
            inperson++;
        }

        document.getElementById("total").innerHTML = total;
        document.getElementById("virtual").innerHTML = virtual;
        document.getElementById("inperson").innerHTML = inperson;

        alert("Registration Successful");

        form.reset();

    }

});