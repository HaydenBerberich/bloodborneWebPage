function resetButton(){
    if(inputLength){
        lengthDiv.className = "help-block hide";
        lengthErr.className = "help-block hide";
        inputLength.style.borderColor = "black";
    }

    if(nameLength){
        nameLengthDiv.className = "help-block hide";
        nameLengthErr.className = "help-block hide";
        nameLength.style.borderColor = "black";
    }

    if(lastNameLength){
        lastNameLengthDiv.className = "help-block hide";
        lastNameLengthErr.className = "help-block hide";
        lastNameLength.style.borderColor = "black";
    }

    if(addressLength){
        addressLengthDiv.className = "help-block hide";
        addressLengthErr.className = "help-block hide";
        addressLength.style.borderColor = "black";
    }

    if(address2Length){
        address2LengthDiv.className = "help-block hide";
        address2LengthErr.className = "help-block hide";
        address2Length.style.borderColor = "black";
    }

    if(cityLength){
        cityLengthDiv.className = "help-block hide";
        cityLengthErr.className = "help-block hide";
        cityLength.style.borderColor = "black";
    }

    if(init){
        initDiv.className = "help-block hide";
        initErr.className = "help-block hide";
        init.style.borderColor = "black";
    }

    if(sec){
        secDiv.className = "help-block hide";
        secErr.className = "help-block hide";
        sec.style.borderColor = "black";
    }

    if(email){
        emailDiv.className = "help-block hide";
        emailErr.className = "help-block hide";
        email.style.borderColor = "black";
    }

    if(maleGender || femaleGender || otherGender){
        genderCheckDiv.className = "help-block hide";
        genderCheckErr.className = "help-block hide";
    }

    if(married || widowed || separated || divorced || single){
        maritalCheckDiv.className = "help-block hide";
        maritalCheckErr.className = "help-block hide";
    }

    if(stateLength){
        stateDiv.className = "help-block hide";
        stateErr.className = "help-block hide";
        stateLength.style.borderColor = "black";
    }

    if(birthdayLength){
        birthdayLengthDiv.className = "help-block hide";
        birthdayLengthErr.className = "help-block hide";
        birthdayLength.style.borderColor = "black";
    }

    if(zipcodeLength){
        zipcodeLengthDiv.className = "help-block hide";
        zipcodeLengthErr.className = "help-block hide";
        zipcodeLength.style.borderColor = "black";
    }

    if(phoneLength){
        phoneLengthDiv.className = "help-block hide";
        phoneLengthErr.className = "help-block hide";
        phoneLength.style.borderColor = "black";
    }

    if(resetButton){
        sec.disabled = true;
    }

//}
//let i = 0;
//let arrayOfFunctions = [];

//function helpButton() {
  //  if (helpButton) {
      //  arrayOfFunctions.push(userCheckLength);
     //   arrayOfFunctions.push(nameCheckLength);
     //   arrayOfFunctions.push(lastNameCheckLength);
      //  arrayOfFunctions.push(addressCheckLength);
     //   arrayOfFunctions.push(address2CheckLength);
     //   arrayOfFunctions.push(cityCheckLength);
     //   arrayOfFunctions.push(birthdayCheckLength);
     //   arrayOfFunctions.push(genderChecker);
    //    arrayOfFunctions.push(maritalChecker);
     //   arrayOfFunctions.push(verifyPasswords);
    //    arrayOfFunctions.push(emailValidator);
    //    arrayOfFunctions.push(Password.chkPasswords);
   //     arrayOfFunctions.push(stateCheckLength);
  //      arrayOfFunctions.push(phoneCheckLength);
  //      arrayOfFunctions.push(zipcodeCheckLength);

//        arrayOfFunctions[i]();
    }
//}

//function helpButton() {
  //if (helpButton) {
    // userCheckLength();
      //nameCheckLength();
      //lastNameCheckLength();
     // addressCheckLength();
   //   address2CheckLength();
  //   cityCheckLength();
  //   birthdayCheckLength();
   //  genderChecker();
  //   maritalChecker();
   //  verifyPasswords();
  //   emailValidator();
  //  Password.chkPasswords();
  //   stateCheckLength();
  //  phoneCheckLength();
  //   zipcodeCheckLength();
//  }
//}