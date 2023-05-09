<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/Contact.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/logo.ico">
    <title>De fluitende fietser</title>
</head>

<body>

    <?php include 'header.php'; ?>

    <h2>Contact</h2>

    <div class="white"> &nbsp;</div>
    <div class="bl0"> &nbsp;</div>

    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <li class="fas fa-bars"></li>
        </label>
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="fietsen.php">Fietsen</a>
            </li>
            <li>
                <a href="verhuur.php">Verhuur</a>
            </li>
            <li>
                <a class="active" href="contact.php">Contact</a>
            </li>
            <li>
                <a href="overOns.php">Over Ons</a>
            </li>
        </ul>
    </nav>

    <div class="bl">&nbsp;</div>
    <div class="bl05">&nbsp;</div>
    <form>
        <div class="label">
            <label class="blokV">Voornaam:</label>
            <input class="in1" type="text" required />
        </div>
        <div>
            <label class="blokA">Achternaam:</label>
            <input class="in2" type="text" required />
        </div>
        <div>
            <label class="blokED">Email adres:</label>
            <input type="email" required placeholder="Enter your email">

        </div>

        <button class="bt1">Versturen</button>
    </form>

    <div class="ac">
        <button class="accordion">Openingstijden</button>
        <div class="panel">
            <p class="oP">
                <?php
                $myfile = fopen("Teksten/openingstijden.txt", "r") or die("Unable to open file!");
                echo fread($myfile, filesize("Teksten/openingstijden.txt"));
                fclose($myfile);
                ?>
            </p>
        </div>
    </div>
    <div class="ac2">
        <button class="accordion">Gegevens</button>
        <div class="panel">
            <p class="aD">
                <?php
                $myfile = fopen("Teksten/adres.txt", "r") or die("Unable to open file!");
                echo fread($myfile, filesize("Teksten/adres.txt"));
                fclose($myfile);
                ?>
            </p>
        </div>
    </div>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>


    <div id="kaart">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.123411707609!2d5.593374315326593!3d51.47424897962962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf2415daeb5e76b17!2zNTHCsDI4JzI3LjMiTiA1wrAzNSc0NC4wIkU!5e0!3m2!1snl!2snl!4v1650620271887!5m2!1snl!2snl" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <?php include 'Footer.php'; ?>
</body>

</html>