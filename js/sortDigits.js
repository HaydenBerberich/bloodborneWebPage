let zipcodeLength //= document.getElementById("zipcodeLength");
let zipcodeLengthErr;
let zipcodeLengthDiv;
function zipcodeCheckLength() {
    zipcodeLength = document.getElementById("zipcode");
    if (zipcodeLength) {
        if (zipcodeLength.value.length < 5 || zipcodeLength.value.length > 10) {
            zipcodeLengthDiv = document.getElementById("zipcodeLengthDiv");
            if (zipcodeLengthDiv) {
                zipcodeLengthDiv.classList.add("has-error");
                zipcodeLengthDiv.classList.remove("has-success");
            }
            zipcodeLengthErr = document.getElementById("zipcodeLengthErr");
            if (zipcodeLengthErr) {
                zipcodeLengthErr.classList.remove("hide");
                zipcodeLengthErr.classList.add("show");
                zipcodeLengthDiv.className = "help-block hide";
            }
            zipcodeLength.style.borderColor = "red";
            submitBlocker();
            return false;
        } else {
            zipcodeLengthDiv = document.getElementById("zipcodeLengthDiv");
            if (zipcodeLengthDiv) {
                zipcodeLengthDiv.classList.remove("has-error");
                zipcodeLengthDiv.classList.add("has-success");
            }
            zipcodeLengthErr = document.getElementById("zipcodeLengthErr");
            if (zipcodeLengthErr) {
                zipcodeLengthErr.classList.add("hide");
                zipcodeLengthErr.classList.remove("show");
                zipcodeLengthDiv.className = "help-block show";
            }
            zipcodeLength.style.borderColor = "#02e01d";
            submitBlocker();
            return true;
        }
    }
    return false;
}

let phoneLength //= document.getElementById("phoneLength");
let phoneLengthErr;
let phoneLengthDiv;
function phoneCheckLength() {
    phoneLength = document.getElementById("phone");
    if (phoneLength) {
        if (phoneLength.value.length !== 12) {
            phoneLengthDiv = document.getElementById("phoneLengthDiv");
            if (phoneLengthDiv) {
                phoneLengthDiv.classList.add("has-error");
                phoneLengthDiv.classList.remove("has-success");
            }
            phoneLengthErr = document.getElementById("phoneLengthErr");
            if (phoneLengthErr) {
                phoneLengthErr.classList.remove("hide");
                phoneLengthErr.classList.add("show");
                phoneLengthDiv.className = "help-block hide";
            }
            phoneLength.style.borderColor = "red";
            submitBlocker();
            return false;
        } else {
            phoneLengthDiv = document.getElementById("phoneLengthDiv");
            if (phoneLengthDiv) {
                phoneLengthDiv.classList.remove("has-error");
                phoneLengthDiv.classList.add("has-success");
            }
            phoneLengthErr = document.getElementById("phoneLengthErr");
            if (phoneLengthErr) {
                phoneLengthErr.classList.add("hide");
                phoneLengthErr.classList.remove("show");
                phoneLengthDiv.className = "help-block show";
            }
            phoneLength.style.borderColor = "#02e01d";
            submitBlocker();
            return true;
        }
    }
    return false;
}

function formatPhoneNumber(value){
    if (!value) return value;
    const phoneNumber = value.replace(/\D/g, '');
    const phoneNumberLength = phoneNumber.length;
    if (phoneNumberLength < 4) return phoneNumber;
    if (phoneNumberLength < 7) {
        return `${phoneNumber.slice(0, 3)}-${phoneNumber.slice(3)}`;
    }
    return `${phoneNumber.slice(0, 3)}-${phoneNumber.slice(
        3,
        6,
    )}-${phoneNumber.slice(6, 9)}`;
}

function phoneNumberFormatter(){
    const phoneLength = document.getElementById("phone");
    phoneLength.value = formatPhoneNumber(phoneLength.value);
}

function formatZipcode(value){
    if (!value) return value;
    const zipcodeNumber = value.replace(/\D/g, '');
    const zipcodeNumberLength = zipcodeNumber.length;
    if (zipcodeNumberLength < 6) return zipcodeNumber;
    if (zipcodeNumberLength < 10) {
        return `${zipcodeNumber.slice(0, 5)}-${zipcodeNumber.slice(5, 8)}`;
    }
}

function zipcodeFormatter(){
    const zipcodeLength = document.getElementById("zipcode");
    zipcodeLength.value = formatZipcode(zipcodeLength.value);
}