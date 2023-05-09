<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/index.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/logo.ico">
    <script src="https://kit.fontawesome.com/10701cf6ed.js" crossorigin="anonymous"></script>
    <title>De fluitende fietser</title>
</head>
<!-- Hier voert het startTimer... -->

<body onload="startTimer()">
    <!-- <h3>Home</h3> -->

    <div class="ww">&nbsp;</div>
    <div class="ww">&nbsp;</div>
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img class="s1" src="img/sfeer1.jpg" alt="sfeer1" />
        </div>
        <div class="mySlides fade">
            <img class="s2" src="img/sfeer2.jpg" alt="sfeer2" />
        </div>
        <div class="mySlides fade">
            <img class="s3" src="img/sfeer3.jpg" alt="sfeer3" />
        </div>
        <div class="mySlides fade">
            <img class="s4" src="img/sfeer4.jpg" alt="sfeer4" />
        </div>
        <div class="mySlides fade">
            <img class="s5" src="img/sfeer5.jpg" alt="sfeer5" />
        </div>
    </div>

    <?php include 'header.php'; ?>

    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <li class="fas fa-bars"></li>
        </label>
        <ul>
            <li>
                <a class="active" href="index.php">Home</a>
            </li>
            <li>
                <a href="fietsen.php">Fietsen</a>
            </li>
            <li>
                <a href="verhuur.php">Verhuur</a>
            </li>
            <li>
                <a href="contact.php">Contact</a>
            </li>
            <li>
                <a href="overOns.php">Over Ons</a>
            </li>
        </ul>
    </nav>
    <div class="white">&nbsp;</div>
    <div class="bl6">&nbsp;</div>
    <p class="p1">
        <?php
        // een php om de tekst uit een tekst document uit te halen.
        $myfile = fopen("Teksten/welkom.txt", "r") or die("Unable to open file!");
        echo fread($myfile, filesize("Teksten/welkom.txt"));
        fclose($myfile);
        ?>
    </p>

    <div class="popup popup-content">
        <button class="close" id="close">&times;</button>
        <img class="poplogo" src="img/logo.png"></img>
        <h2 id="openclose">
        </h2>
    </div>
    <!-- <script src="JS"></script> -->
    <script src="JS/openingsTijden.js"></script>



    <div class="pDot">
        <span class="dot" onclick="currentSlide(0)"></span>
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>

    <script src="JS/index.js"></script>

    <?php include 'Footer.php'; ?>

</body>

</html>