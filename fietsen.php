<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/fietsen.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/logo.ico">
    <title>De fluitende fietser</title>
</head>

<body>

    <?php include 'header.php'; ?>

    <div class="white">&nbsp;</div>

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
                <a class="active" href="fietsen.php">Fietsen</a>
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
    <div class="bl">&nbsp;</div>
    <div class="bl4">&nbsp;</div>

    <!-- Fiets 1 -->
    <div onclick="modal1()" class="card gr1">
        <button id="myBtn">
            <img class="img" src="img/Fietsen/1.jpg" alt="Pelikaan" />
        </button>
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <img class="img1" src="img/Fietsen/1.jpg" />
                <h2>
                    Pelikaan Carry On Lady
                </h2>
                <p class="pin">
                    Elektrisch
                </p>
                <p class="pin">
                    geschikt voor zakelijk en prive
                </p>
                <p class="pin">
                    Dames
                </p>
                <p class="pin">
                    Transport
                </p>
                <p class="pin">
                    Pelikaan
                </p>
                <p class="pin">
                    Nieuw
                </p>
                <p class="pin">
                    Zwart
                </p>
                <p class="pin">
                    &euro; 769,00
                </p>
                <p class="pin">
                    28 Inch 53 cm 3V V-Brakes
                </p>
                <button class="bt1">Verhuur</button>
            </div>
        </div>
        <h3>
            Naam: Pelikaan
            Carry On Lady
        </h3>
    </div>

    <!-- Fiets 2 -->
    <div onclick="modal2()" class="card gr2">
        <button id="myBtn2">
            <img class="img" src="img/Fietsen/2.jpg" alt="Allegra" />
        </button>
        <div id="myModal2" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close2">&times;</span>
                <img class="img1" src="img/Fietsen/2.jpg" />
                <h2>
                    Allegra voorwielmotor
                </h2>
                <p class="pin">
                    Elektrisch
                </p>
                <p class="pin">
                    geschikt voor zakelijk en prive
                </p>
                <p class="pin">
                    Dames
                </p>
                <p class="pin">
                    Stads
                </p>
                <p class="pin">
                    Stella
                </p>
                <p class="pin">
                    Nieuw
                </p>
                <p class="pin">
                    Zwart
                </p>
                <p class="pin">
                    &euro; 999,00
                </p>
                <p class="pin">
                    Frameraat S (Lichaamslengte 1,62m - 1,73m)
                </p>
                <button class="bt1">Verhuur</button>
            </div>
        </div>
        <h3>
            Naam: Allegra
            voorwielmotor
        </h3>
    </div>

    <!-- Fiets 3 -->
    <div class="dIv">
        &nbsp;
    </div>
    <div onclick="madal3()" class="card gr3">
        <button id="myBtn3">
            <img class="img" src="img/Fietsen/3.jpg" alt="Gazelle" />
        </button>
        <div id="myModal3" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close3">&times;</span>
                <img class="img1" src="img/Fietsen/3.jpg" />
                <h2>
                    Gazelle Orange C7+ HMB 2020
                </h2>
                <p class="pin">
                    Elektrisch
                </p>
                <p class="pin">
                    geschikt voor zakelijk en prive
                </p>
                <p class="pin">
                    Heren
                </p>
                <p class="pin">
                    Stads
                </p>
                <p class="pin">
                    Gazelle
                </p>
                <p class="pin">
                    Nieuw
                </p>
                <p class="pin">
                    Blauw
                </p>
                <p class="pin">
                    &euro; 2199,00
                </p>
                <p class="pin">
                    Frameraat 53cm(1.66cm-1.77cm)
                </p>
                <button class="bt1">Verhuur</button>
            </div>
        </div>
        <h3>
            Naam: Gazelle
            Orange C7+
            HMB 2020
        </h3>
    </div>

    <!-- Fiets 4 -->
    <div onclick="modal4()" class="card gr4">
        <button id="myBtn4">
            <img class="img" src="img/Fietsen/4.jpg" alt="Gazelle C" />
        </button>
        <div id="myModal4" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close4">&times;</span>
                <img class="img1" src="img/Fietsen/4.jpg" />
                <h2>
                    Gazelle CityGo C7
                </h2>
                <p class="pin">
                    Niet Elektrisch
                </p>
                <p class="pin">
                    geschikt voor zakelijk en prive
                </p>
                <p class="pin">
                    Heren
                </p>
                <p class="pin">
                    Stads
                </p>
                <p class="pin">
                    Gazelle
                </p>
                <p class="pin">
                    Nieuw
                </p>
                <p class="pin">
                    Meerdere
                </p>
                <p class="pin">
                    &euro; 679,00
                </p>
                <p class="pin">
                    wielmaat 28 inches
                </p>
                <button class="bt1">Verhuur</button>
            </div>
        </div>
        <h3>
            Naam: Gazelle
            CityGo C7
        </h3>
    </div>
    <script src="JS/fietsInfo.js"></script>
    <?php include 'Footer.php'; ?>
</body>

</html>