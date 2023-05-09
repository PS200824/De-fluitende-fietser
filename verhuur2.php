<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/verhuur2.css" rel="stylesheet">
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
                <a href="fietsen.php">Fietsen</a>
            </li>
            <li>
                <a class="active" href="verhuur.php">Verhuur</a>
            </li>
            <li>
                <a href="contact.php">Contact</a>
            </li>
            <li>
                <a href="overOns.php">Over Ons</a>
            </li>
        </ul>
    </nav>
    <form id="form" name="form">
        <div class="bl">&nbsp;</div>
        <label class="p1">Naam:</label>
        <input class="in1" type="text" required />
        <label class="p2">Emailadres:</label>
        <input class="in2" type="email" required placeholder="Enter your email">
        <label class="p3">Adres:</label>
        <input class="in3" type="text" required />
        <label class="p4">Stad:</label>
        <input class="in4" type="text" required />
        <label class="p5">Postcode:</label>
        <input class="in5" type="text" required />

        <button class="bt1"> Versturen gegevens </button>
    </form>
    <div class="fietsen">
        <?php
        if (isset($_POST['fietsen'])) {
            $fietsen = $_POST['fietsen'];
            echo "Dit is de geselcteerd fietsen: ";
            foreach ($fietsen as $key => $value) {
                echo "$value<br>";
            }
        }
        ?>
    </div>


    <div class="dIv"> &nbsp; </div>

    <?php include 'Footer.php'; ?>
</body>

</html>