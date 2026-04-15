let btn = document.getElementById("analyzeBtn");

btn.addEventListener("click", function () {

    let text = document.getElementById("textInput").value.trim();

    let resultDiv = document.getElementById("result");


    if (text === "") {
        resultDiv.innerHTML = "Please enter some text.";
        return;
    }


    let charCount = text.length;


    let words = text.split(/\s+/);
    let wordCount = words.length;


    let reversed = text.split("").reverse().join("");


    resultDiv.innerHTML =
        "Characters: " + charCount + "<br>" +
        "Words: " + wordCount + "<br>" +
        "Reversed Text: " + reversed;

});