<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/overOns.css" rel="stylesheet">
        <link href="css/menu.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="img/logo.ico">
        <title>De fluitende fietser</title>
    </head>
    <body>
        <h2 class="h2">Over ons</h2>

        <?php include 'header.php';?>

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
                    <a href="verhuur.php">Verhuur</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
                <li>
                    <a class="active" href="overOns.php">Over Ons</a>
                </li>
            </ul>
        </nav>
        <p class="p1">
            <?php 
                $kleuren = fopen("Teksten/overons.txt", "r") or die("Kan het bestand niet openen!");
                                    echo fread($kleuren,filesize("Teksten/overons.txt"));
                                    fclose($kleuren);
                                    echo "<br>";
            ?>
        </p>

        <img class="img" src="img/historie1.jpg" alt="Historie"/>

        <?php include 'Footer.php';?>
    </body>
</html>