<!DOCTYPE html>
<?php
include 'connectionInfo.php';
?>
<html lang = "en">
<head>
    <?php define("title", "Bloodborne"); ?>
    <title><?php echo title; ?></title>
    <meta charset = "utf-8" />
</head>
<body>
<br/>
<?php
include 'selectUserData.php';
?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <label style="margin-bottom: -40px" for="name">Name:</label>
    <input style="height: 45px; color: #c9c9c9" disabled id="name" type="text" name="name" value="<?php echo $name; ?>"/>

    <label style="margin-bottom: -40px" for="password1">Password:</label>
    <input style="height: 45px; color: #c9c9c9" disabled id="name" type="text" name="password1" value="<?php echo $password1; ?>"/>

    <label style="margin-bottom: -40px" for="firstName">First Name:</label>
    <input style="height: 45px; color: #c9c9c9" disabled id="firstName" type="text" name="lastName" value="<?php echo $firstName; ?>"/>

    <label style="margin-bottom: -40px" for="lastName">Last Name:</label>
    <input style="height: 45px; color: #c9c9c9" disabled id="lastName" type="text" name="lastName" value="<?php echo $lastName; ?>"/>

    <label style="margin-bottom: -40px" for="address1">Address 1:</label>
    <input style="height: 45px; color: #c9c9c9" disabled id="address1" type="text" name="address1" value="<?php echo $address1; ?>"/>

    <label style="margin-bottom: -40px" for="address2">Address 2:</label>
    <input style="height: 45px; color: #c9c9c9" disabled id="address2" type="text" name="address2" value="<?php echo $address2; ?>"/>

    <label style="margin-bottom: -40px" for="city">City:</label>
    <input style="height: 45px; color: #c9c9c9" disabled id="city" type="text" name="city" value="<?php echo $city; ?>"/>

    <label style="margin-bottom: -40px" for="State">State:</label>
    <input style="height: 45px; color: #c9c9c9" disabled id="State" type="text" name="State" value="<?php echo $state; ?>"/>

    <label style="margin-bottom: -40px" for="zipcode">Zipcode:</label>
    <input style="height: 45px; color: #c9c9c9" disabled id="zipcode" type="text" name="zipcode" value="<?php echo $zipcode; ?>"/>

    <label style="margin-bottom: -40px" for="lastName">Website:</label>
    <input style="height: 45px; color: #c9c9c9; color: #c9c9c9" disabled id="lastName" type="text" name="phone" value="<?php echo $phone; ?>"/>

    <label style="margin-bottom: -40px" for="email">Email:</label>
    <input style="height: 45px; color: #c9c9c9" disabled id="email" type="text" name="email" value="<?php echo $email; ?>"/>

    <label style="margin-bottom: -40px" for="birthday">Birthday:</label>
    <input style="height: 45px; color: #c9c9c9" disabled id="birthday" type="text" name="birthday" value="<?php echo $birthday; ?>"/>

    <hr>

    <?php
    $disableFemale = null;
    $disableOther = null;
    $disableMale = null;

    if ($gender == "male") {
        $disableOther= "disabled";
        $disableFemale = "disabled";
    } elseif ($gender == "other") {
        $disableFemale = "disabled";
        $disableMale = "disabled";
    } else {
        $disableOther = "disabled";
        $disableMale = "disabled";
    }
    ?>
    <label>Gender:</label>
    <label style="font-weight: normal !important;" for="female">Female</label>
    <input <?php echo $disableFemale;?> type="radio" id="female" name="gender"
        <?php if (isset($gender) && $gender=="female") echo "checked";?>
           value="female"/>

    <label style="font-weight: normal !important;" for="male">Male</label>
    <input <?php echo $disableMale;?> type="radio" id="male" name="gender"
        <?php if (isset($gender) && $gender=="male") echo "checked";?>
           value="male"/>

    <label style="font-weight: normal !important;" for="other">Other</label>
    <input <?php echo $disableOther;?> type="radio" id="other" name="gender"
        <?php if (isset($gender) && $gender=="other") echo "checked";?>
           value="other"/>

    <hr>

    <?php
    $disableMarried = null;
    $disableWidowed = null;
    $disableSeparated = null;
    $disableDivorced = null;
    $disableSingle = null;

    if ($marital == "married") {
        $disableWidowed = "disabled";
        $disableSeparated = "disabled";
        $disableDivorced = "disabled";
        $disableSingle = "disabled";
    } elseif ($marital == "widowed") {
        $disableMarried = "disabled";
        $disableSeparated = "disabled";
        $disableDivorced = "disabled";
        $disableSingle = "disabled";
    } elseif ($marital == "separated") {
        $disableMarried = "disabled";
        $disableWidowed = "disabled";
        $disableDivorced = "disabled";
        $disableSingle = "disabled";
    } elseif ($marital == "divorced") {
        $disableMarried = "disabled";
        $disableWidowed = "disabled";
        $disableSeparated = "disabled";
        $disableSingle = "disabled";
    } else {
        $disableMarried = "disabled";
        $disableWidowed = "disabled";
        $disableSeparated = "disabled";
        $disableDivorced = "disabled";
    }
    ?>

    <label>Marital Status:</label>
    <label style="font-weight: normal !important;" for="married">Married</label>
    <input <?php echo $disableMarried;?> type="radio" id="married" name="married"
        <?php if (isset($marital) && $marital=="married") echo "checked";?>
                                        value="married"/>

    <label style="font-weight: normal !important;" for="widowed">Widowed</label>
    <input <?php echo $disableWidowed;?> type="radio" id="widowed" name="widowed"
        <?php if (isset($marital) && $marital=="widowed") echo "checked";?>
                                         value="widowed"/>

    <label style="font-weight: normal !important;" for="separated">Separated</label>
    <input <?php echo $disableSeparated;?> type="radio" id="separated" name="separated"
        <?php if (isset($marital) && $marital=="separated") echo "checked";?>
                                         value="separated"/>

    <label style="font-weight: normal !important;" for="divorced">Divorced</label>
    <input <?php echo $disableDivorced;?> type="radio" id="divorced" name="divorced"
        <?php if (isset($marital) && $marital=="divorced") echo "checked";?>
                                         value="divorced"/>

    <label style="font-weight: normal !important;" for="single">Single</label>
    <input <?php echo $disableSingle;?> type="radio" id="single" name="single"
        <?php if (isset($marital) && $marital=="single") echo "checked";?>
                                         value="single"/>

    <div class="row w3-container">
        <input type="submit" disabled="disabled"
               id="submitButton" class="btn btn-primary">
    </div>

</form>
</body>
</html>