<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bloodborne</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/w3styles.css">
    <link rel="stylesheet" href="./css/styles.css"/>
    <link rel="stylesheet" href="./css/w3fonts.css">
    <style>
        body {font-family: "FleshAndBlood", sans-serif}
        .mySlides {display: none}
    </style>

</head>
<body>

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

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

    <!-- Automatic Slideshow Images -->
    <div class="mySlides w3-display-container w3-center">
        <img src="./img/bbcleaver.gif" alt="Saw Cleaver" style="width:100%">
        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32">
            <img class="responsive" src="./img/Bloodborne-Logo-PNG.png" alt="Bloodborne Logo">
            <p class="responsive" style="font-size: 1vw"><b>May you find your worth in the waking world</b></p>
        </div>
    </div>
    <div class="mySlides w3-display-container w3-center">
        <img src="./img/footdown.gif" alt="Beast" style="width:100%">
        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32">
            <img class="responsive" src="./img/Bloodborne-Logo-PNG.png" alt="Bloodborne Logo">
            <p class="responsive" style="font-size: 1vw"><b>May you find your worth in the waking world</b></p>
        </div>
    </div>
    <div class="mySlides w3-display-container w3-center">
        <img src="./img/monstergun.gif" alt="Gun to Beast" style="width:100%">
        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32">
            <img class="responsive" src="./img/Bloodborne-Logo-PNG.png" alt="Bloodborne Logo">
            <p class="responsive" style="font-size: 1vw"><b>May you find your worth in the waking world</b></p>
        </div>
    </div>
    <div class="mySlides w3-display-container w3-center">
        <img src="./img/hit.gif" alt="Beast Hit" style="width:100%">
        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32">
            <img class="responsive" src="./img/Bloodborne-Logo-PNG.png" alt="Bloodborne Logo">
            <p class="responsive" style="font-size: 1vw"><b>May you find your worth in the waking world</b></p>
        </div>
    </div>
    <div class="mySlides w3-display-container w3-center">
        <img src="./img/stab.gif" alt="Beast Stabbed" style="width:100%">
        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32">
            <img class="responsive" src="./img/Bloodborne-Logo-PNG.png" alt="Bloodborne Logo">
            <p class="responsive" style="font-size: 1vw"><b>May you find your worth in the waking world</b></p>
        </div>
    </div>
    <div class="mySlides w3-display-container w3-center">
        <img src="./img/full-moon-bloodborne.gif" alt="Moon Presence" style="width:100%">
        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32l">
            <img class="responsive" src="./img/Bloodborne-Logo-PNG.png" alt="Bloodborne Logo">
            <p class="responsive" style="font-size: 1vw"><b>May you find your worth in the waking world</b></p>
        </div>
    </div>

    <footer class="w3-container w3-center w3-black">
        <p class="w3-large"><a href="https://en.wikipedia.org/wiki/Bloodborne" target="_blank">Learn More</a></p>
        <p class="w3-large"><a href="https://www.youtube.com/watch?v=iTDvYvlyPaE" target="_blank">Trailer</a></p>
        <p class="w3-large"><a href="https://store.playstation.com/en-us/product/UP9000-CUSA00900_00-BLOODBORNE000000" target="_blank">Main Game</a></p>
        <p class="w3-large"><a href="https://store.playstation.com/en-us/product/UP9000-CUSA00900_00-SPEXPANSIONDLC03" target="_blank">The Old Hunters DLC</a></p>
        <p class="w3-large"><a href="https://store.playstation.com/en-us/product/UP9000-CUSA00900_00-BLOODBORNECOMPLE" target="_blank">Complete Edition Bundle</a></p>
    </footer>
    <!-- The Band Section -->

    <!-- End Page Content -->
</div>

<!-- Image of location/map -->


<script>
    // Automatic Slideshow - change image every 4 seconds
    let myIndex = 0;
    carousel();

    function carousel() {
        let i;
        let x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 4000);
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
        let x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") === -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }

    // When the user clicks anywhere outside the modal, close it
    let modal = document.getElementById('ticketModal');
    window.onclick = function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }
</script>
</body>
</html>
