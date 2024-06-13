<!DOCTYPE html>


<!DOCTYPE html>
<html lang="en">
<head>

    <title><?php echo title; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/w3styles.css">
    <link rel="stylesheet" href="./css/styles.css"/>
    <link rel="stylesheet" href="./css/w3fonts.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="/confirmation.php">

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
<body>
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
<div class="w3-content" style="max-width:4000px;margin-top:25px">
    <div class="container outline w3-auto w3-panel" style="font-size: 25px">
        <div style="font-size: 50px; margin-bottom: -55px; text-align: center;">Hunter Creation Confirmation</div><br>
        <?php
        try {
            $last_id = $_SESSION["last_id"];
            //echo "<br/>ID: $last_id<br/>";
            $conn = new PDO("mysql:host=$servername;dbname=$dbname",
                $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT userName, password, firstName, lastName, address1, address2, city, state, zipCode, 
             phone, email, gender, maritalStatus, dateOfBirth".
                " FROM registration WHERE id = :last_id");
            $stmt->bindParam(':last_id', $last_id);
            $stmt->execute();

            // set the resulting array to associative
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            //var_dump($stmt->fetchAll()[0]);
            $assocArray = $stmt->fetchAll()[0];
            $name = $assocArray["userName"];
            $password1 = $assocArray["password"];
            $firstName = $assocArray["firstName"];
            $lastName = $assocArray["lastName"];
            $address1 = $assocArray["address1"];
            $address2 = $assocArray["address2"];
            $city = $assocArray["city"];
            $state = $assocArray["state"];
            $zipcode = $assocArray["zipCode"];
            $phone = $assocArray["phone"];
            $email = $assocArray["email"];
            $gender = $assocArray["gender"];
            $marital = $assocArray["maritalStatus"];
            $birthday = $assocArray["dateOfBirth"];

        }
        catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        } finally {
            $conn = null;
        }
        ?>
</body>
</html>



<!-- End Page Content -->

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
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }
</script>
</body>
</html>
