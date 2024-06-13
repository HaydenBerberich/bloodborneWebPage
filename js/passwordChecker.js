let initErr;
let initDiv;
let init //= document.getElementById("initial");
let sec //= document.getElementById("second");
let secBtn
const decimal = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,50}$/;
class Password {
    static chkPasswords() {
        //let secErr;
        //let secDiv;
        init = document.getElementById("password1");
        sec = document.getElementById("password2");
        secBtn = document.getElementById("password2");
        if (init && sec) {
            if (init.value === "" || !init.value.match(decimal)) {
                initDiv = document.getElementById("passDiv");
                if (initDiv) {
                    initDiv.classList.add("has-error");
                    initDiv.classList.remove("has-success");
                }
                initErr = document.getElementById("passErr");
                if (initErr) {
                    initErr.classList.remove("hide");
                    initErr.classList.add("show");
                    initDiv.className = "help-block hide";
                }
                    sec.disabled = true;
                init.style.borderColor = "red";
                submitBlocker();
                return false;
            } else {
                initDiv = document.getElementById("passDiv");
                if (initDiv) {
                    initDiv.classList.remove("has-error");
                    initDiv.classList.add("has-success");
                    sec.title="Please fill out this field.";
                    secBtn.disabled = false;
                }
                initErr = document.getElementById("passErr");
                if (initErr) {
                    initErr.classList.add("hide");
                    initErr.classList.remove("show");
                    init.onkeyup = verifyPasswords;
                    initDiv.className = "help-block show";
                }

                //document.getElementById("initial").onblur = this.chkPasswords;
                //
                init.style.borderColor = "#02e01d";
                submitBlocker();

                return true;
            }

        }
        return false;
    }
}

let secErr;
let secDiv;
function verifyPasswords() {
    //let initErr;
    //let initDiv;
    init = document.getElementById("password1");
    sec = document.getElementById("password2");
    secDiv = document.getElementById("verPassDiv");
    if (init.value !== sec.value || sec.value === '') {

        if (secDiv) {
            secDiv.classList.add("has-error");
            secDiv.classList.remove("has-success");
        }
        secErr = document.getElementById("verPassErr");
        if (secErr) {
            secErr.classList.remove("hide");
            secErr.classList.add("show");
            secDiv.className = "help-block hide";
        }
        sec.style.borderColor = "red";
        submitBlocker();
        return false;
    } else {
        secDiv = document.getElementById("verPassDiv");
        if (secDiv) {
            secDiv.classList.remove("has-error");
            secDiv.classList.add("has-success");
        }
        secErr = document.getElementById("verPassErr");
        if (secErr) {
            secErr.classList.add("hide");
            secErr.classList.remove("show");
            secDiv.className = "help-block show";
        }
        sec.style.borderColor = "#02e01d";
        submitBlocker();
        return true;

    }
}