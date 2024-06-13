//let subBtn = document.getElementById("submitButton");
//if (Password.chkPasswords.init.value==='') {
//    subBtn.disabled = false;
//}
//else{
//    subBtn.disabled = false;
//}
//return true;
//let subBtn = document.getElementById("submitButton");
//function submitBlocker(){

   // if (subBtn) {
   //     subBtn.disabled = true;
   // }
  //  return true;
//}

//let helpButton //= document.getElementById("helpButton");
let subBtn //= document.getElementById("submitButton");
function submitBlocker() {
    subBtn = document.getElementById("submitButton");
    //let helpButton = document.getElementById("helpButton");
    if(subBtn){
        if(email.value.length < 1 || !email.value.match(pattern) || inputLength.value.length < 6 || inputLength.value.length > 50 ||
            nameLength.value.length > 50 || nameLength.value.length < 1 || lastNameLength.value.length > 50 ||
            lastNameLength.value.length < 1 || addressLength.value.length > 100 || addressLength.value.length < 1 ||
             cityLength.value.length > 50 || cityLength.value.length < 1 ||
            birthdayLength.value.length < 1 || stateLength.value === 'null' || init.value === "" || !init.value.match(decimal) ||
            init.value !== sec.value || sec.value === '' || (!maleGender.checked && !femaleGender.checked && !otherGender.checked) ||
            (!married.checked && !widowed.checked && !separated.checked && !divorced.checked && !single.checked) ||
            zipcodeLength.value.length < 5 || zipcodeLength.value.length > 10 || phoneLength.value.length > 12 || phoneLength.value.length < 8){
            subBtn.disabled = true;
            //helpButton.disabled = false;
            return true;
        }
        else{
            subBtn.disabled = false;
            //helpButton.disabled = true;
        }
        return true
    }
    return true;
}

//function submitBlocker2() {
    //subBtn = document.getElementById("submitButton");
    //if (!subBtn) {
        //subBtn.disabled = true;
    //} else {
        //if (inputLength.value.length < 6 || inputLength.value.length > 50) {
            ///subBtn.disabled = false;
        //}
        //return true;
    //}
//}

