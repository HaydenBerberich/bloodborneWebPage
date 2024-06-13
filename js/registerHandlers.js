function registerHandlers() {
    document.getElementById("name").oninput = submitBlocker;
    document.getElementById("name").onblur = userCheckLength;

    document.getElementById("firstName").onblur = nameCheckLength;
    document.getElementById("firstName").oninput = submitBlocker;

    document.getElementById("lastName").onblur = lastNameCheckLength;
    document.getElementById("lastName").oninput = submitBlocker;

    document.getElementById("address1").onblur = addressCheckLength;
    document.getElementById("address1").oninput = submitBlocker;

    document.getElementById("address2").onblur = address2CheckLength;
    document.getElementById("address2").oninput = submitBlocker;

    document.getElementById("city").onblur = cityCheckLength;
    document.getElementById("city").oninput = submitBlocker;

    document.getElementById("birthday").oninput = birthdayCheckLength;
    document.getElementById("birthday").onblur = submitBlocker;

    document.getElementById("male").oninput = genderChecker;
    document.getElementById("male").onmousedown = submitBlocker;

    document.getElementById("female").oninput = genderChecker;
    document.getElementById("female").onmousedown = submitBlocker;

    document.getElementById("other").oninput = genderChecker;
    document.getElementById("other").onmousedown = submitBlocker;

    document.getElementById("married").oninput = maritalChecker;
    document.getElementById("married").onmousedown = submitBlocker;

    document.getElementById("widowed").oninput = maritalChecker;
    document.getElementById("widowed").onmousedown = submitBlocker;

    document.getElementById("separated").oninput = maritalChecker;
    document.getElementById("separated").onmousedown = submitBlocker;

    document.getElementById("divorced").onmousedown = submitBlocker;
    document.getElementById("divorced").oninput = maritalChecker;

    document.getElementById("single").oninput = maritalChecker;
    document.getElementById("single").onmousedown = submitBlocker;

    document.getElementById("password2").onkeyup = verifyPasswords;
    document.getElementById("password2").oninput = submitBlocker;

    document.getElementById("email").onblur = emailValidator;
    document.getElementById("email").oninput = submitBlocker;

    document.getElementById("state").onchange = stateCheckLength;
    document.getElementById("state").oninput = submitBlocker;

    document.getElementById("zipcode").onblur = zipcodeCheckLength;
    document.getElementById("zipcode").oninput = submitBlocker;
    document.getElementById("zipcode").onkeydown = zipcodeFormatter;

    document.getElementById("phone").onblur = phoneCheckLength;
    document.getElementById("phone").oninput = submitBlocker;
    document.getElementById("phone").onkeydown = phoneNumberFormatter;

    document.getElementById("password1").onblur = Password.chkPasswords;
    document.getElementById("password1").oninput = submitBlocker;

    document.getElementById("resetButton").onclick = resetButton;

}