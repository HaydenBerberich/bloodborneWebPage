let genderCheckErr;
let genderCheckDiv;
let maleGender;
let femaleGender;
let otherGender;
function genderChecker() {
    maleGender = document.getElementById("male");
    femaleGender = document.getElementById("female");
    otherGender = document.getElementById("other");
    if (maleGender || femaleGender || otherGender) {
        if (!maleGender.checked && !femaleGender.checked && !otherGender.checked) {
            genderCheckDiv = document.getElementById("genderCheckDiv");
            if (genderCheckDiv) {
                genderCheckDiv.classList.add("has-error");
                genderCheckDiv.classList.remove("has-success");
            }
            genderCheckErr = document.getElementById("genderCheckErr");
            if (genderCheckErr) {
                genderCheckErr.classList.remove("hide");
                genderCheckErr.classList.add("show");
                genderCheckDiv.className = "help-block hide"
            }
            submitBlocker();
            return false;
        } else {
            genderCheckDiv = document.getElementById("genderCheckDiv");
            if (genderCheckDiv) {
                genderCheckDiv.classList.remove("has-error");
                genderCheckDiv.classList.add("has-success");
            }
            genderCheckErr = document.getElementById("genderCheckErr");
            if (genderCheckErr) {
                genderCheckErr.classList.add("hide");
                genderCheckErr.classList.remove("show");
                genderCheckDiv.className = "help-block show"
            }
            submitBlocker();
            return true;
        }
    }
    return false;
}

let maritalCheckErr;
let maritalCheckDiv;
let married;
let widowed;
let separated;
let divorced;
let single;
function maritalChecker() {
    married = document.getElementById("married");
    widowed = document.getElementById("widowed");
    separated = document.getElementById("separated");
    divorced = document.getElementById("divorced");
    single = document.getElementById("single");
    if (married || widowed || separated || divorced || single) {
        if (!married.checked && !widowed.checked && !separated.checked && !divorced.checked && !single.checked) {
            maritalCheckDiv = document.getElementById("maritalCheckDiv");
            if (maritalCheckDiv) {
                maritalCheckDiv.classList.add("has-error");
                maritalCheckDiv.classList.remove("has-success");
            }
            maritalCheckErr = document.getElementById("maritalCheckErr");
            if (maritalCheckErr) {
                maritalCheckErr.classList.remove("hide");
                maritalCheckErr.classList.add("show");
                maritalCheckDiv.className = "help-block hide"
            }
            submitBlocker();
            return false;
        } else {
            maritalCheckDiv = document.getElementById("maritalCheckDiv");
            if (maritalCheckDiv) {
                maritalCheckDiv.classList.remove("has-error");
                maritalCheckDiv.classList.add("has-success");
            }
            maritalCheckErr = document.getElementById("maritalCheckErr");
            if (maritalCheckErr) {
                maritalCheckErr.classList.add("hide");
                maritalCheckErr.classList.remove("show");
                maritalCheckDiv.className = "help-block show"
            }
            submitBlocker();
            return true;
        }
    }
    return false;
}