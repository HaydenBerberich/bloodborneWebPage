<?php
// define variables and set to empty values
$nameErr = $maritalErr = $password1Err = $password2Err = $zipcodeErr = $stateErr = $birthdayErr = $emailErr = $address1Err = $phoneErr = $cityErr = $address2Err = $genderErr = $websiteErr = $firstNameErr = $lastNameErr = "";
$name = $email = $city = $marital = $password1 = $password2 = $state = $birthday = $phone = $zipcode = $address1 = $address2 = $gender = $comment = $website = $firstName = $lastName = "";
$isValid = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $isValid = true;

    //username
    $name = clean_input($_POST["name"]);
    if (empty($name)) {
        $nameErr = "❌ Username is required";
        $isValid = false;
        $color = "red";
    } else {
        // check if name only contains letters and whitespace
        if (strlen($name) < 6 || strlen($name) > 50) {
            /*
            The preg_match() function searches a string for pattern,
            returning true if the pattern exists, and false otherwise.
            */
            $nameErr = "❌ Please enter a username with 6 to 50 characters.";
            $isValid = false;
            $color = "red";
        }
        else{
            $nameErr = "Valid ✔️";
            $color = "#00db21";
        }
    }

    //password
    $password1 = clean_input($_POST["password1"]);
    if (empty($password1)) {
        $password1Err = "❌ Password is required";
        $isValid = false;
        $password1Color = "red";
    } else {
        // check if name only contains letters and whitespace
        if (!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,50}$/', $password1)) {
            /*
            The preg_match() function searches a string for pattern,
            returning true if the pattern exists, and false otherwise.
            */
            $password1Err = "❌ Please enter a password with 8 to 50 characters that includes at least 1 capital, 1 lowercase, 1 digit, and 1 special character.";
            $isValid = false;
            $password1Color = "red";
        }
        else{
            $password1Err = "Valid ✔️";
            $password1Color = "#00db21";
        }
    }

    //repeat password
    $password2 = clean_input($_POST["password2"]);
    if (empty($password2)) {
        $password2Err = "❌ Repeat password is required";
        $isValid = false;
        $password2Color = "red";
    } else {
        // check if name only contains letters and whitespace
        if ($password1 !== $password2) {
            /*
            The preg_match() function searches a string for pattern,
            returning true if the pattern exists, and false otherwise.
            */
            $password2Err = "❌ Please enter your first name with less than 50 characters.";
            $isValid = false;
            $password2Color = "red";
        }
        else{
            $password2Err = "Valid ✔️";
            $password2Color = "#00db21";
        }
    }

    //first name
    $firstName = clean_input($_POST["firstName"]);
    if (empty($firstName)) {
        $firstNameErr = "❌ First name is required";
        $isValid = false;
        $firstNameColor = "red";
    } else {
        // check if name only contains letters and whitespace
        if (strlen($firstName) > 50 || strlen($firstName) < 1) {
            /*
            The preg_match() function searches a string for pattern,
            returning true if the pattern exists, and false otherwise.
            */
            $firstNameErr = "❌ Please enter your first name with less than 50 characters.";
            $isValid = false;
            $firstNameColor = "red";
        }
        else{
            $firstNameErr = "Valid ✔️";
            $firstNameColor = "#00db21";
        }
    }

    //last name
    $lastName = clean_input($_POST["lastName"]);
    if (empty($lastName)) {
        $lastNameErr = "❌ Last name is required";
        $isValid = false;
        $lastNameColor = "red";
    } else {
        // check if name only contains letters and whitespace
        if (strlen($lastName) > 50 || strlen($lastName) < 1) {
            /*
            The preg_match() function searches a string for pattern,
            returning true if the pattern exists, and false otherwise.
            */
            $lastNameErr = "❌ Please enter your last name with less than 50 characters.";
            $isValid = false;
            $lastNameColor = "red";
        }
        else{
            $lastNameErr = "Valid ✔️";
            $lastNameColor = "#00db21";
        }
    }

    //address line 1
    $address1 = clean_input($_POST["address1"]);
    if (empty($address1)) {
        $address1Err = "❌ Address line 1 is required";
        $isValid = false;
        $address1Color = "red";
    } else {
        // check if name only contains letters and whitespace
        if (strlen($address1) > 100 || strlen($address1) < 1) {
            /*
            The preg_match() function searches a string for pattern,
            returning true if the pattern exists, and false otherwise.
            */
            $address1Err = "❌ Please enter your address line 1 with less than 100 characters.";
            $isValid = false;
            $address1Color = "red";
        }
        else{
            $address1Err = "Valid ✔️";
            $address1Color = "#00db21";
        }
    }

    //address line 2
    $address2 = clean_input($_POST["address2"]);
    if (empty($address2)) {
        $address2Err = "Valid ✔️";
        $address2Color = "#00db21";
    } else {
        // check if name only contains letters and whitespace
        if (strlen($address2) > 100) {
            /*
            The preg_match() function searches a string for pattern,
            returning true if the pattern exists, and false otherwise.
            */
            $address2Err = "❌ Please enter your address line 2 with less than 100 characters.";
            $isValid = false;
            $address2Color = "red";
        }
        else{
            $address2Err = "Valid ✔️";
            $address2Color = "#00db21";
        }
    }

    //city
    $city = clean_input($_POST["city"]);
    if (empty($city)) {
        $cityErr = "❌ City is required";
        $isValid = false;
        $cityColor = "red";
    } else {
        // check if name only contains letters and whitespace
        if (strlen($city) > 50 || strlen($city) < 1) {
            /*
            The preg_match() function searches a string for pattern,
            returning true if the pattern exists, and false otherwise.
            */
            $cityErr = "❌ Please enter your city with less than 50 characters.";
            $isValid = false;
            $cityColor = "red";
        }
        else{
            $cityErr = "Valid ✔️";
            $cityColor = "#00db21";
        }
    }

    //state
    $state = clean_input($_POST["state"]);
    if (empty($state)) {
        $stateErr = "❌ State is required";
        $isValid = false;
        $stateColor = "red";
    } else {
        // check if name only contains letters and whitespace
        if ($state == 'null') {
            /*
            The preg_match() function searches a string for pattern,
            returning true if the pattern exists, and false otherwise.
            */
            $stateErr = "❌ Please select a state.";
            $isValid = false;
            $stateColor = "red";
        }
        else{
            $stateErr = "Valid ✔️";
            $stateColor = "#00db21";
        }
    }

    //zip code
    $zipcode = clean_input($_POST["zipcode"]);
    if (empty($zipcode)) {
        $zipcodeErr = "❌ Zip code is required";
        $isValid = false;
        $zipcodeColor = "red";
    } else {
        // check if name only contains letters and whitespace
        if (!preg_match('/^[0-9]{5}(-[0-9]{4})?$/', $zipcode)) {
            /*
            The preg_match() function searches a string for pattern,
            returning true if the pattern exists, and false otherwise.
            */
            $zipcodeErr = "❌ Please enter zip code in XXXXX or XXXXX-XXXX format with only numbers.";
            $isValid = false;
            $zipcodeColor = "red";
        }
        else{
            $zipcodeErr = "Valid ✔️";
            $zipcodeColor = "#00db21";
        }
    }

    //phone number
    $phone = clean_input($_POST["phone"]);
    if (empty($phone)) {
        $phoneErr = "❌ Phone number is required";
        $isValid = false;
        $phoneColor = "red";
    } else {
        // check if name only contains letters and whitespace
        if (!preg_match('/^(\+1|001)?\(?([0-9]{3})\)?([ .-]?)([0-9]{3})([ .-]?)([0-9]{4})/', $phone) || strlen($phone) != 12) {
            /*
            The preg_match() function searches a string for pattern,
            returning true if the pattern exists, and false otherwise.
            */
            $phoneErr = "❌ Please enter phone number in xxx-xxx-xxxx format with only numbers.";
            $isValid = false;
            $phoneColor = "red";
        }
        else{
            $phoneErr = "Valid ✔️";
            $phoneColor = "#00db21";
        }
    }

    //email
    $email = clean_input($_POST["email"]);
    if (empty($email)) {
        $emailErr = "❌ Email is required";
        $isValid = false;
        $emailColor = "red";
    } else {
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            /*
            The filter_var() function is the easiest and safest way
            to check whether an email address is well-formed.
            */
            $emailErr = "❌ Invalid email format";
            $isValid = false;
            $emailColor = "red";
        }
        else{
            $emailErr = "Valid ✔️";
            $emailColor = "#00db21";
        }
    }

    //birthday
    $birthday = clean_input($_POST["birthday"]);
    if (empty($birthday)) {
        $birthdayErr = "❌ Birthday is required";
        $isValid = false;
        $birthdayColor = "red";
    } else {
        // check if e-mail address is well-formed
        if (!strlen($birthday) > 0) {
            /*
            The filter_var() function is the easiest and safest way
            to check whether an email address is well-formed.
            */
            $birthdayErr = "❌ Please select your birthday.";
            $isValid = false;
            $birthdayColor = "red";
        }
        else{
            $birthdayErr = "Valid ✔️";
            $birthdayColor = "#00db21";
        }
    }

    //gender
    if (isset($_POST["gender"])) {
        $gender = clean_input($_POST["gender"]);
        if (empty($_POST["gender"])) {
            $genderErr = "❌ Gender is required";
            $isValid = false;
            $genderColor = "red";
        }
        else{
            $genderErr = "Valid ✔️";
            $genderColor = "#00db21";
        }
    } else {
        $genderErr = "❌ Gender is required";
        $isValid = false;
        $genderColor = "red";
    }

    //marital status
    if (isset($_POST["marital"])) {
        $marital = clean_input($_POST["marital"]);
        if (empty($_POST["marital"])) {
            $maritalErr = "❌ Marital status is required";
            $isValid = false;
            $maritalColor = "red";
        }
        else{
            $maritalErr = "Valid ✔️";
            $maritalColor = "#00db21";
        }
    } else {
        $maritalErr = "❌ Marital status is required";
        $isValid = false;
        $maritalColor = "red";
    }

}

function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}