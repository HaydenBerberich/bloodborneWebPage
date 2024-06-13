<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bloodborne</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/w3styles.css">
    <link rel="stylesheet" href="./css/styles.css"/>
    <link rel="stylesheet" href="./css/w3fonts.css">
    <link rel="stylesheet" href="./css/animation.css">
    <style>
        body {font-family: "FleshAndBlood", sans-serif}
        .mySlides {display: none}
    </style>

</head>
<body style="background-color: black">

<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-black w3-card">
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

<div class="rain responsive"></div>



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
