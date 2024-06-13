let emailErr;
let emailDiv;
let email;
let pattern ;
function emailValidator() {
    pattern = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]/;
    email = document.getElementById("email");
    if (email) {
        if (email.value.length < 1 || !email.value.match(pattern)) {
            emailDiv = document.getElementById("emailDiv");
            if (emailDiv) {
                emailDiv.classList.add("has-error");
                emailDiv.classList.remove("has-success");
            }
            emailErr = document.getElementById("emailErr");
            if (emailErr) {
                emailErr.classList.remove("hide");
                emailErr.classList.add("show");
                emailDiv.className = "help-block hide";
            }
            email.style.borderColor = "red";
            submitBlocker();
            return false;
        } else {
            emailDiv = document.getElementById("emailDiv");
            if (emailDiv) {
                emailDiv.classList.remove("has-error");
                emailDiv.classList.add("has-success");
            }
            emailErr = document.getElementById("emailErr");
            if (emailErr) {
                emailErr.classList.add("hide");
                emailErr.classList.remove("show");
                emailDiv.className = "help-block show";
            }
            email.style.borderColor = "#02e01d";
            submitBlocker();
            return true;
        }
    }
    return false;
}