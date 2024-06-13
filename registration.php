<!DOCTYPE html>
<?php
include 'connectionInfo.php';
ob_start();
?>
<html lang="en">
<head>
    <?php const title = "Bloodborne";?>
    <title><?php echo title;?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/w3styles.css">
    <link rel="stylesheet" href="./css/styles.css"/>
    <link rel="stylesheet" href="./css/w3fonts.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="/confirmation.php">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="./js/resetButton.js"></script>
    <script src="./js/passwordChecker.js"></script>
    <script src="./js/radioChecker.js"></script>
    <script src="./js/sortDigits.js"></script>
    <script src="js/checkLength.js"></script>
    <script src="./js/registerHandlers.js"></script>
    <script src="./js/emailValidator.js"></script>
    <script src="./js/submitBlocker.js"></script>

    <style>
        body {font-family: "FleshAndBlood", sans-serif}
        .mySlides {display: none}
    </style>

    <style>
        body {
            background-image: url('./img/bloodborneBackground.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
        }
    </style>

</head>
<body onload="registerHandlers();">
<?php
include 'inputValidate.php';
?>
<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-black w3-card" style="font-size: 15px; padding-top: 1px">
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
        <a href="registration.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">REGISTRATION</a>
        <a href="animation.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ANIMATION</a>
    </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">HOME</a>
    <a href="registration.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">REGISTRATION</a>
    <a href="animation.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">ANIMATION</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:43px">

    <div class="container outline w3-auto w3-panel">
        <h2 style="font-size: 50px; text-align: center">Hunter Creation</h2>
        <p style="font-size: 17px">* required field.</p>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="myForm">
            <!-- Username -->
            <div class="row">
                <div class="col-25">
                    <label for="name">Username *</label>
                </div>
                <div class="col-75" style="padding-right: 25px">
                    <input style="color: black; border-color: <?php echo $color;?>" type="text" id="name" name="name" placeholder="Username" required="required" value="<?php echo $name;?>">
                    <span style="color: <?php echo $color;?>"> <?php echo $nameErr;?></span>
                    <span style="color: red" id="lengthErr" class="help-block hide">❌ Please enter a username with 6 to 50 characters.</span>
                    <span style="color: #02e01d" id="lengthDiv" class="help-block hide"> Valid ✔️</span>
                </div>
            </div>
            <!-- Initial Password -->
            <div class="row">
                <div class="col-25">
                    <label for="password1">Password *</label>
                </div>
                <div class="col-75" style="padding-right: 25px">
                    <input style="color: black; border-color: <?php echo $password1Color;?>" type="password" id="password1" name="password1" placeholder="Password" required="required" value="<?php echo $password1;?>">
                    <span style="color: <?php echo $password1Color;?>"> <?php echo $password1Err;?></span>
                    <span id="passErr" style="color: red" class="help-block hide">❌ Please enter a password with 8 to 50 characters that
                        includes at least 1 capital, 1 lowercase, 1 digit, and 1 special character.</span>
                    <span style="color: #02e01d" id="passDiv" class="help-block hide"> Valid ✔️</span>
                </div>
            </div>
            <!-- Second Password -->
            <div class="row">
                <div class="col-25">
                    <label for="password2">Repeat Password *</label>
                </div>
                <div class="col-75" style="padding-right: 25px">
                    <input style="color: black; border-color: <?php echo $password2Color;?>" type="password" disabled="disabled" id="password2" name="password2" placeholder="Password" required="required" value="<?php echo $password2; ?>">
                    <span style="color: <?php echo $password2Color;?>"> <?php echo $password2Err;?></span>
                    <span id="verPassErr" style="color: red" class="help-block hide">❌ The two passwords you entered are not the same.</span>
                    <span style="color: #02e01d" id="verPassDiv" class="help-block hide"> Valid ✔️</span>
                </div>
            </div>
            <!-- First Name -->
            <div class="row">
                <div class="col-25">
                    <label for="firstName">First Name *</label>
                </div>
                <div class="col-75" style="padding-right: 25px">
                    <input style="color: black; border-color: <?php echo $firstNameColor;?>" type="text" id="firstName" name="firstName" placeholder="Your first name..." required="required" value="<?php echo $firstName; ?>">
                    <span style="color: <?php echo $firstNameColor;?>"> <?php echo $firstNameErr;?></span>
                    <span id="nameLengthErr" style="color: red" class="help-block hide"> ❌ Please enter your first name with less than 50 characters.</span>
                    <span style="color: #02e01d" id="nameLengthDiv" class="help-block hide"> Valid ✔️</span>
                </div>
            </div>
            <!-- Last Name -->
            <div class="row">
                <div class="col-25">
                    <label for="lastName">Last Name *</label>
                </div>
                <div class="col-75" style="padding-right: 25px">
                    <input style="color: black; border-color: <?php echo $lastNameColor;?>" type="text" id="lastName" name="lastName" placeholder="Your last name..." required="required" value="<?php echo $lastName; ?>">
                    <span style="color: <?php echo $lastNameColor;?>"> <?php echo $lastNameErr;?></span>
                    <span id="lastNameLengthErr" style="color: red" class="help-block hide"> ❌ Please enter your last name with less than 50 characters.</span>
                    <span style="color: #02e01d" id="lastNameLengthDiv" class="help-block hide"> Valid ✔️</span>
                </div>
            </div>
            <!-- Address Line 1 -->
            <div class="row">
                <div class="col-25">
                    <label for="address1"> Address line 1 *</label>
                </div>
                <div class="col-75" style="padding-right: 25px">
                    <input style="color: black; border-color: <?php echo $address1Color;?>" type="text" id="address1" name="address1" placeholder="Address line 1" required="required" value="<?php echo $address1; ?>">
                    <span style="color: <?php echo $address1Color;?>"> <?php echo $address1Err;?></span>
                    <span id="addressLengthErr" style="color: red" class="help-block hide"> ❌ Please enter your address line 1 with less than 100 characters.</span>
                    <span style="color: #02e01d" id="addressLengthDiv" class="help-block hide"> Valid ✔️</span>
                </div>
            </div>
            <!-- Address Line 2 -->
            <div class="row">
                <div class="col-25">
                    <label for="address2"> Address line 2</label>
                </div>
                <div class="col-75" style="padding-right: 25px">
                    <input style="color: black; border-color: <?php echo $address2Color;?>" type="text" id="address2" name="address2" placeholder="(Optional)" value="<?php echo $address2; ?>">
                    <span style="color: <?php echo $address2Color;?>"> <?php echo $address2Err;?></span>
                    <span id="address2LengthErr" style="color: red" class="help-block hide"> ❌ Please enter your address line 2 with less than 100 characters.</span>
                    <span style="color: #02e01d" id="address2LengthDiv" class="help-block hide"> Valid ✔️</span>
                </div>
            </div>
            <!-- City -->
            <div class="row">
                <div class="col-25">
                    <label for="city"> City *</label>
                </div>
                <div class="col-75" style="padding-right: 25px">
                    <input style="color: black; border-color: <?php echo $cityColor;?>" type="text" id="city" name="city" placeholder="City" required="required" value="<?php echo $city; ?>">
                    <span style="color: <?php echo $cityColor;?>"> <?php echo $cityErr;?></span>
                    <span id="cityLengthErr" style="color: red" class="help-block hide"> ❌ Please enter your city with less than 50 characters.</span>
                    <span style="color: #02e01d" id="cityLengthDiv" class="help-block hide"> Valid ✔️</span>
                 </div>
             </div>
             <!-- State -->
            <div class="row">
                <div class="col-25">
                    <label for="state">State *</label>
                </div>
                <div class="col-75" style="padding-right: 25px">
                    <select style="color: black; font-family: Arial,serif; border-color: <?php echo $stateColor;?>" id="state" name="state">
                        <option value="null" style='display: none'>State</option>
                        <option <?php if(isset($state) && $state=="other") {?> selected="selected"  <?php } ?> value="other">Other</option>
                        <option <?php if(isset($state) && $state=="alabama") {?> selected="selected"  <?php } ?> value="alabama">Alabama</option>
                        <option <?php if(isset($state) && $state=="alaska") {?> selected="selected"  <?php } ?>  value="alaska">Alaska</option>
                        <option <?php if(isset($state) && $state=="arizona") {?> selected="selected"  <?php } ?>  value="arizona">Arizona</option>
                        <option <?php if(isset($state) && $state=="arkansas") {?> selected="selected"  <?php } ?>  value="arkansas">Arkansas</option>
                        <option <?php if(isset($state) && $state=="california") {?> selected="selected"  <?php } ?>  value="california">California</option>
                        <option <?php if(isset($state) && $state=="colorado") {?> selected="selected"  <?php } ?>  value="colorado">Colorado</option>
                        <option <?php if(isset($state) && $state=="connecticut") {?> selected="selected"  <?php } ?>  value="connecticut">Connecticut</option>
                        <option <?php if(isset($state) && $state=="delaware") {?> selected="selected"  <?php } ?>  value="delaware">Delaware</option>
                        <option <?php if(isset($state) && $state=="florida") {?> selected="selected"  <?php } ?>  value="florida">Florida</option>
                        <option <?php if(isset($state) && $state=="georgia") {?> selected="selected"  <?php } ?>  value="georgia">Georgia</option>
                        <option <?php if(isset($state) && $state=="hawaii") {?> selected="selected"  <?php } ?>  value="hawaii">Hawaii</option>
                        <option <?php if(isset($state) && $state=="idaho") {?> selected="selected"  <?php } ?>  value="idaho">Idaho</option>
                        <option <?php if(isset($state) && $state=="illinois") {?> selected="selected"  <?php } ?>  value="illinois">Illinois</option>
                        <option <?php if(isset($state) && $state=="indiana") {?> selected="selected"  <?php } ?>  value="indiana">Indiana</option>
                        <option <?php if(isset($state) && $state=="iowa") {?> selected="selected"  <?php } ?> value="iowa">Iowa</option>
                        <option <?php if(isset($state) && $state=="kansas") {?> selected="selected"  <?php } ?>  value="kansas">Kansas</option>
                        <option <?php if(isset($state) && $state=="kentucky") {?> selected="selected"  <?php } ?>  value="kentucky">Kentucky</option>
                        <option <?php if(isset($state) && $state=="louisiana") {?> selected="selected"  <?php } ?>  value="louisiana">Louisiana</option>
                        <option <?php if(isset($state) && $state=="maine") {?> selected="selected"  <?php } ?>  value="maine">Maine</option>
                        <option <?php if(isset($state) && $state=="maryland") {?> selected="selected"  <?php } ?>  value="maryland">Maryland</option>
                        <option <?php if(isset($state) && $state=="massachusetts") {?> selected="selected"  <?php } ?>  value="massachusetts">Massachusetts</option>
                        <option <?php if(isset($state) && $state=="michigan") {?> selected="selected"  <?php } ?>  value="michigan">Michigan</option>
                        <option <?php if(isset($state) && $state=="minnesota") {?> selected="selected"  <?php } ?>  value="minnesota">Minnesota</option>
                        <option <?php if(isset($state) && $state=="mississippi") {?> selected="selected"  <?php } ?>  value="mississippi">Mississippi</option>
                        <option <?php if(isset($state) && $state=="missouri") {?> selected="selected"  <?php } ?>  value="missouri">Missouri</option>
                        <option <?php if(isset($state) && $state=="montana") {?> selected="selected"  <?php } ?>  value="montana">Montana</option>
                        <option <?php if(isset($state) && $state=="nebraska") {?> selected="selected"  <?php } ?>  value="nebraska">Nebraska</option>
                        <option <?php if(isset($state) && $state=="nevada") {?> selected="selected"  <?php } ?>  value="nevada">Nevada</option>
                        <option <?php if(isset($state) && $state=="newHampshire") {?> selected="selected"  <?php } ?>  value="newHampshire">New Hampshire</option>
                        <option <?php if(isset($state) && $state=="newJersey") {?> selected="selected"  <?php } ?>  value="newJersey">New Jersey</option>
                        <option <?php if(isset($state) && $state=="newMexico") {?> selected="selected"  <?php } ?>  value="newMexico">New Mexico</option>
                        <option <?php if(isset($state) && $state=="newYork") {?> selected="selected"  <?php } ?>  value="newYork">New York</option>
                        <option <?php if(isset($state) && $state=="northCarolina") {?> selected="selected"  <?php } ?>  value="northCarolina">North Carolina</option>
                        <option <?php if(isset($state) && $state=="northDakota") {?> selected="selected"  <?php } ?>  value="northDakota">North Dakota</option>
                        <option <?php if(isset($state) && $state=="ohio") {?> selected="selected"  <?php } ?>  value="ohio">Ohio</option>
                        <option <?php if(isset($state) && $state=="oklahoma") {?> selected="selected"  <?php } ?>  value="oklahoma">Oklahoma</option>
                        <option <?php if(isset($state) && $state=="oregon") {?> selected="selected"  <?php } ?>  value="oregon">Oregon</option>
                        <option <?php if(isset($state) && $state=="pennsylvania") {?> selected="selected"  <?php } ?>  value="pennsylvania">Pennsylvania</option>
                        <option <?php if(isset($state) && $state=="rhodeIsland") {?> selected="selected"  <?php } ?>  value="rhodeIsland">Rhode Island</option>
                        <option <?php if(isset($state) && $state=="southCarolina") {?> selected="selected"  <?php } ?>  value="southCarolina">South Carolina</option>
                        <option <?php if(isset($state) && $state=="southDakota") {?> selected="selected"  <?php } ?>  value="southDakota">South Dakota</option>
                        <option <?php if(isset($state) && $state=="tennessee") {?> selected="selected"  <?php } ?>  value="tennessee">Tennessee</option>
                        <option <?php if(isset($state) && $state=="texas") {?> selected="selected"  <?php } ?>  value="texas">Texas</option>
                        <option <?php if(isset($state) && $state=="utah") {?> selected="selected"  <?php } ?>  value="utah">Utah</option>
                        <option <?php if(isset($state) && $state=="vermont") {?> selected="selected"  <?php } ?>  value="vermont">Vermont</option>
                        <option <?php if(isset($state) && $state=="virginia") {?> selected="selected"  <?php } ?>  value="virginia">Virginia</option>
                        <option <?php if(isset($state) && $state=="washington") {?> selected="selected"  <?php } ?>  value="washington">Washington</option>
                        <option <?php if(isset($state) && $state=="westVirginia") {?> selected="selected"  <?php } ?>  value="westVirginia">West Virginia</option>
                        <option <?php if(isset($state) && $state=="wisconsin") {?> selected="selected"  <?php } ?>  value="wisconsin">Wisconsin</option>
                        <option <?php if(isset($state) && $state=="wyoming") {?> selected="selected"  <?php } ?>  value="wyoming">Wyoming</option>
                    </select>
                    <span style="color: <?php echo $stateColor;?>"> <?php echo $stateErr;?></span>
                    <span id="stateErr" style="color: red" class="help-block hide"> ❌ Please select your state.</span>
                    <span style="color: #02e01d" id="stateDiv" class="help-block hide"> Valid ✔️</span>
                </div>
            </div>
            <!-- Zipcode -->
             <div class="row">
                 <div class="col-25">
                     <label for="zipcode"> Zip Code *</label>
                 </div>
                 <div class="col-75" style="padding-right: 25px">
                     <input style="color: black; border-color: <?php echo $zipcodeColor;?>" type="text" id="zipcode" name="zipcode" placeholder="Zip Code" required="required" value="<?php echo $zipcode; ?>">
                     <span style="color: <?php echo $zipcodeColor;?>"> <?php echo $zipcodeErr;?></span>
                     <span id="zipcodeLengthErr" style="color: red" class="help-block hide"> ❌ Please enter your zipcode with 5 to 9 numbers.</span>
                     <span style="color: #02e01d" id="zipcodeLengthDiv" class="help-block hide"> Valid ✔️</span>
                 </div>
             </div>
             <!-- Phone Number -->
            <div id="phoneNumber" class="row">
                <div class="col-25">
                    <label for="phone"> Phone Number *</label>
                </div>
                <div class="col-75" style="padding-right: 25px">
                    <input style="color: black; border-color: <?php echo $phoneColor;?>" type="text" id="phone" name="phone" placeholder="Phone Number" required="required" value="<?php echo $phone; ?>">
                    <span style="color: <?php echo $phoneColor;?>"> <?php echo $phoneErr;?></span>
                    <span id="phoneLengthErr" style="color: red" class="help-block hide"> ❌ Please enter phone number with 10 digits.</span>
                    <span style="color: #02e01d" id="phoneLengthDiv" class="help-block hide"> Valid ✔️</span>
                </div>
            </div>
            <!-- Email -->
            <div class="row">
                <div class="col-25">
                    <label for="email"> Email *</label>
                </div>
                <div class="col-75" style="padding-right: 25px">
                    <input style="color: black; border-color: <?php echo $emailColor;?>" type="email" id="email" name="email" placeholder="example.gmail.com" required="required" value="<?php echo $email; ?>">
                    <span style="color: <?php echo $emailColor;?>"> <?php echo $emailErr;?></span>
                    <span id="emailErr" style="color: red" class="help-block hide"> ❌ Please enter your email in x@x.x format with alphanumerical characters.</span>
                    <span style="color: #02e01d" id="emailDiv" class="help-block hide"> Valid ✔️</span>
                </div>
            </div>
            <!-- Birthday -->
            <div class="row">
                <div class="col-25">
                    <label for="birthday">Birthday *</label>
                </div>
                <div class="col-75" style="padding-right: 25px">
                    <input style="color: black; border-color: <?php echo $birthdayColor;?>" type="date" id="birthday" name="birthday" placeholder="Birthday" required="required" value="<?php echo $birthday; ?>">
                    <span style="color: <?php echo $birthdayColor;?>"> <?php echo $birthdayErr;?></span>
                    <span id="birthdayLengthErr" style="color: red" class="help-block hide"> ❌ Please select your birthday.</span>
                    <span style="color: #02e01d" id="birthdayLengthDiv" class="help-block hide"> Valid ✔️</span>
                </div>
            </div>
            <hr/>
            <!-- Gender -->
            <p1 style="font-size: 25px">Gender *</p1><br/>
                <input type="radio" required="required"
                    name="gender" id="male" <?php if ($gender=="male"){echo "checked";}?>
                       value="male"/"
                    /> <label style="padding: 0 0 0 12px; font-size: 20px" for="maleGender">Male</label><br/>
                <input type="radio" required="required"
                    name="gender" id="female" <?php if ($gender=="female"){echo "checked";}?>
                       value="female"/"
                    /> <label style="padding: 0 0 0 12px; font-size: 20px" for="femaleGender">Female</label><br/>
                <input type="radio" required="required"
                    name="gender" id="other" <?php if ($gender=="other"){echo "checked";}?>
                       value="other"/"
                    /> <label style="padding: 0 0 0 12px; font-size: 20px" for="otherGender">Other</label><br>
                <span style="color: <?php echo $genderColor;?>"> <?php echo $genderErr;?></span>
                <span id="genderCheckErr" style="color: red" class="help-block hide"> ❌ Please select your gender.</span>
                <span id="genderCheckDiv" style="color: #02e01d" class="help-block hide"> Valid ✔ </span>
            <hr/>
            <!-- Marital Status -->
            <p1 style="font-size: 25px">Marital Status *</p1><br/>
            <input type="radio" required="required"
                   name="marital" id="married" <?php if ($marital=="married"){echo "checked";}?>
                   value="married"/"
                   value="married"/> <label style="padding: 0 0 0 12px; font-size: 20px" for="married">Married</label><br/>
            <input type="radio" required="required"
                   name="marital" id="widowed" <?php if ($marital=="widowed"){echo "checked";}?>
                   value="widowed"/"
                   value="widowed"/> <label style="padding: 0 0 0 12px; font-size: 20px" for="widowed">Widowed</label><br/>
            <input type="radio" required="required"
                   name="marital" id="separated" <?php if ($marital=="separated"){echo "checked";}?>
                   value="separated"/"
                   value="separated"/> <label style="padding: 0 0 0 12px; font-size: 20px" for="separated">Separated</label><br/>
            <input type="radio" required="required"
                   name="marital" id="divorced" <?php if ($marital=="divorced"){echo "checked";}?>
                   value="divorced"/"
                   value="divorced"/> <label style="padding: 0 0 0 12px; font-size: 20px" for="divorced">Divorced</label><br/>
            <input type="radio" required="required"
                   name="marital" id="single" <?php if ($marital=="single"){echo "checked";}?>
                   value="single"/"
                   value="single"/> <label style="padding: 0 0 0 12px; font-size: 20px" for="single">Single</label><br>
            <span style="color: <?php echo $maritalColor;?>"> <?php echo $maritalErr;?></span>
            <span id="maritalCheckErr" style="color: red" class="help-block hide"> ❌ Please select your marital status.</span>
            <span id="maritalCheckDiv" style="color: #02e01d" class="help-block hide"> Valid ✔ </span>
            <div class="row w3-container">
                <input type="submit" disabled="disabled"
                       id="submitButton" class="btn btn-primary" title="Please fill out all required fields. See 'Help' button.">
                <input type="reset" value="Reset" id="resetButton">
            </div>
        </form>

        <?php
        include 'insertValidData.php';
        ?>

    </div>


    <!-- End Page Content -->
</div>

<!-- Image of location/map -->


<script>
    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") === -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }

    // When the user clicks anywhere outside of the modal, close it
    var modal = document.getElementById('ticketModal');
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</body>
</html>
