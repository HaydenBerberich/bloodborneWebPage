let lengthDiv;
let lengthErr;
let inputLength = document.getElementById("name");
//let helpButton = document.getElementById("helpButton");
function userCheckLength() {
    inputLength = document.getElementById("name");
    if (inputLength) {
        if (inputLength.value.length < 6 || inputLength.value.length > 50) {
            lengthDiv = document.getElementById("lengthDiv");
            if (lengthDiv) {
                lengthDiv.classList.add("has-error");
                lengthDiv.classList.remove("has-success");
            }
            lengthErr = document.getElementById("lengthErr");
            if (lengthErr) {
                lengthErr.classList.remove("hide");
                lengthErr.classList.add("show");
                lengthDiv.className = "help-block hide";
            }
            inputLength.style.borderColor = "red";
            submitBlocker();

            return false;
        } else {
            lengthDiv = document.getElementById("lengthDiv");
            if (lengthDiv) {
                lengthDiv.classList.remove("has-error");
                lengthDiv.classList.add("has-success");
            }
            lengthErr = document.getElementById("lengthErr");
            if (lengthErr) {
                lengthErr.classList.add("hide");
                lengthErr.classList.remove("show");
                lengthDiv.classList.add("show")
                lengthDiv.className = "help-block show";
            }
            inputLength.style.borderColor = "#02e01d";
            submitBlocker();
            return true;

        }
        //submitBlocker();
    }
    return false;
}

let nameLength //= document.getElementById("nameLength");
let nameLengthErr;
let nameLengthDiv;
function nameCheckLength() {
    nameLength = document.getElementById("firstName");
    if (nameLength) {
        if (nameLength.value.length > 50 || nameLength.value.length < 1) {
            nameLengthDiv = document.getElementById("nameLengthDiv");
            if (nameLengthDiv) {
                nameLengthDiv.classList.add("has-error");
                nameLengthDiv.classList.remove("has-success");
            }
            nameLengthErr = document.getElementById("nameLengthErr");
            if (nameLengthErr) {
                nameLengthErr.classList.remove("hide");
                nameLengthErr.classList.add("show");
                nameLengthDiv.className = "help-block hide";
            }
            nameLength.style.borderColor = "red";
            submitBlocker();
            return false;
        } else {
            nameLengthDiv = document.getElementById("nameLengthDiv");
            if (nameLengthDiv) {
                nameLengthDiv.classList.remove("has-error");
                nameLengthDiv.classList.add("has-success");
            }
            nameLengthErr = document.getElementById("nameLengthErr");
            if (nameLengthErr) {
                nameLengthErr.classList.add("hide");
                nameLengthErr.classList.remove("show");
                nameLengthDiv.className = "help-block show";
            }
            nameLength.style.borderColor = "#02e01d";
            submitBlocker()
            return true
        }
    }
    return false;
}

let lastNameLength //= document.getElementById("lastNameLength");
let lastNameLengthErr;
let lastNameLengthDiv;
function lastNameCheckLength() {
    lastNameLength = document.getElementById("lastName");
    if (lastNameLength) {
        if (lastNameLength.value.length > 50 || lastNameLength.value.length < 1) {
            lastNameLengthDiv = document.getElementById("lastNameLengthDiv");
            if (lastNameLengthDiv) {
                lastNameLengthDiv.classList.add("has-error");
                lastNameLengthDiv.classList.remove("has-success");
            }
            lastNameLengthErr = document.getElementById("lastNameLengthErr");
            if (lastNameLengthErr) {
                lastNameLengthErr.classList.remove("hide");
                lastNameLengthErr.classList.add("show");
                lastNameLengthDiv.className = "help-block hide";
            }
            lastNameLength.style.borderColor = "red";
            submitBlocker();
            return false;
        } else {
            lastNameLengthDiv = document.getElementById("lastNameLengthDiv");
            if (lastNameLengthDiv) {
                lastNameLengthDiv.classList.remove("has-error");
                lastNameLengthDiv.classList.add("has-success");
            }
            lastNameLengthErr = document.getElementById("lastNameLengthErr");
            if (lastNameLengthErr) {
                lastNameLengthErr.classList.add("hide");
                lastNameLengthErr.classList.remove("show");
                lastNameLengthDiv.className = "help-block show";
            }
            lastNameLength.style.borderColor = "#02e01d";
            submitBlocker();
            return true;
        }
    }
    return false;
}

let addressLength //= document.getElementById("addressLength");
let addressLengthErr;
let addressLengthDiv;
function addressCheckLength() {
    addressLength = document.getElementById("address1");
    if (addressLength) {
        if (addressLength.value.length > 100 || addressLength.value.length < 1) {
            addressLengthDiv = document.getElementById("addressLengthDiv");
            if (addressLengthDiv) {
                addressLengthDiv.classList.add("has-error");
                addressLengthDiv.classList.remove("has-success");
            }
            addressLengthErr = document.getElementById("addressLengthErr");
            if (addressLengthErr) {
                addressLengthErr.classList.remove("hide");
                addressLengthErr.classList.add("show");
                addressLengthDiv.className = "help-block hide";
            }
            addressLength.style.borderColor = "red";
            submitBlocker();
            return false;
        } else {
            addressLengthDiv = document.getElementById("addressLengthDiv");
            if (addressLengthDiv) {
                addressLengthDiv.classList.remove("has-error");
                addressLengthDiv.classList.add("has-success");
            }
            addressLengthErr = document.getElementById("addressLengthErr");
            if (addressLengthErr) {
                addressLengthErr.classList.add("hide");
                addressLengthErr.classList.remove("show");
                addressLengthDiv.className = "help-block show";
            }
            addressLength.style.borderColor = "#02e01d";
            submitBlocker();
            return true;
        }
    }
    return false;
}

let address2Length //= document.getElementById("address2Length");
let address2LengthErr;
let address2LengthDiv;
function address2CheckLength() {
    address2Length = document.getElementById("address2");
    if (address2Length) {
        if (address2Length.value.length > 100) {
            address2LengthDiv = document.getElementById("address2LengthDiv");
            if (address2LengthDiv) {
                address2LengthDiv.classList.add("has-error");
                address2LengthDiv.classList.remove("has-success");
            }
            address2LengthErr = document.getElementById("address2LengthErr");
            if (address2LengthErr) {
                address2LengthErr.classList.remove("hide");
                address2LengthErr.classList.add("show");
                address2LengthDiv.className = "help-block hide";
            }
            subBtn.disabled="disabled";
            address2Length.style.borderColor = "red";
            return false;
        } else {
            address2LengthDiv = document.getElementById("address2LengthDiv");
            if (address2LengthDiv) {
                address2LengthDiv.classList.remove("has-error");
                address2LengthDiv.classList.add("has-success");
            }
            address2LengthErr = document.getElementById("address2LengthErr");
            if (address2LengthErr) {
                address2LengthErr.classList.add("hide");
                address2LengthErr.classList.remove("show");
                address2LengthDiv.className = "help-block show";
            }
            address2Length.style.borderColor = "#02e01d";
            return true;

        }
    }
    return false;
}

let cityLength //= document.getElementById("cityLength");
let cityLengthErr;
let cityLengthDiv;
function cityCheckLength() {
    cityLength = document.getElementById("city");
    if (cityLength) {
        if (cityLength.value.length > 50 || cityLength.value.length < 1) {
            cityLengthDiv = document.getElementById("cityLengthDiv");
            if (cityLengthDiv) {
                cityLengthDiv.classList.add("has-error");
                cityLengthDiv.classList.remove("has-success");
            }
            cityLengthErr = document.getElementById("cityLengthErr");
            if (cityLengthErr) {
                cityLengthErr.classList.remove("hide");
                cityLengthErr.classList.add("show");
                cityLengthDiv.className = "help-block hide";
            }
            cityLength.style.borderColor = "red";
            submitBlocker();
            return false;
        } else {
            cityLengthDiv = document.getElementById("cityLengthDiv");
            if (cityLengthDiv) {
                cityLengthDiv.classList.remove("has-error");
                cityLengthDiv.classList.add("has-success");
            }
            cityLengthErr = document.getElementById("cityLengthErr");
            if (cityLengthErr) {
                cityLengthErr.classList.add("hide");
                cityLengthErr.classList.remove("show");
                cityLengthDiv.className = "help-block show";
            }
            cityLength.style.borderColor = "#02e01d";
            submitBlocker();
            return true;
        }
    }
    return false;
}

let birthdayLength //= document.getElementById("birthdayLength");
let birthdayLengthErr;
let birthdayLengthDiv;
function birthdayCheckLength() {
    birthdayLength = document.getElementById("birthday");
    if (birthdayLength) {
        if (birthdayLength.value.length < 1) {
            birthdayLengthDiv = document.getElementById("birthdayLengthDiv");
            if (birthdayLengthDiv) {
                birthdayLengthDiv.classList.add("has-error");
                birthdayLengthDiv.classList.remove("has-success");
            }
            birthdayLengthErr = document.getElementById("birthdayLengthErr");
            if (birthdayLengthErr) {
                birthdayLengthErr.classList.remove("hide");
                birthdayLengthErr.classList.add("show");
                birthdayLengthDiv.className = "help-block hide";
            }
            birthdayLength.style.borderColor = "red";
            submitBlocker();
            return false;
        } else {
            birthdayLengthDiv = document.getElementById("birthdayLengthDiv");
            if (birthdayLengthDiv) {
                birthdayLengthDiv.classList.remove("has-error");
                birthdayLengthDiv.classList.add("has-success");
            }
            birthdayLengthErr = document.getElementById("birthdayLengthErr");
            if (birthdayLengthErr) {
                birthdayLengthErr.classList.add("hide");
                birthdayLengthErr.classList.remove("show");
                birthdayLengthDiv.className = "help-block show";
            }
            birthdayLength.style.borderColor = "#02e01d";
            submitBlocker();
            return true;
        }
    }
    return false;
}

let stateDiv;
let stateErr;
let stateLength //= document.getElementById("state");
function stateCheckLength() {
    stateLength = document.getElementById("state");
    if (stateLength) {
        if (stateLength.value === 'null') {
            stateDiv = document.getElementById("stateDiv");
            if (stateDiv) {
                stateDiv.classList.add("has-error");
                stateDiv.classList.remove("has-success");
            }
            stateErr = document.getElementById("stateErr");
            if (stateErr) {
                stateErr.classList.remove("hide");
                stateErr.classList.add("show");
                stateDiv.className = "help-block hide";
            }
            stateLength.style.borderColor = "red";
            submitBlocker();
            return false;
        } else {
            stateDiv = document.getElementById("stateDiv");
            if (stateDiv) {
                stateDiv.classList.remove("has-error");
                stateDiv.classList.add("has-success");
            }
            stateErr = document.getElementById("stateErr");
            if (stateErr) {
                stateErr.classList.add("hide");
                stateErr.classList.remove("show");
                stateDiv.classList.add("show")
                stateDiv.className = "help-block show";
            }
            stateLength.style.borderColor = "#02e01d";
            submitBlocker();
            return true;
        }
    }
    return false;
}